<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Mail\ContactCreated;
use App\Mail\NotifyContactCreated;
use App\Mail\VIPCreated;
use App\Mail\NotifyVIPCreated;
use Illuminate\Support\Facades\Mail;

class Controller extends BaseController
{
    const NOTIFY_EMAIL_ADDRESS = 'info@thegigusa.com';

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function addEmail(Request $request)
    {
        $thisContact = new Contact;
        $foundContact = Contact::where('email', $request->email)->first();
        if (!is_null($foundContact)) {
            return redirect('/')->with('contactExists', 1);
        }
        $thisContact->name = $request->name;
        $thisContact->email = $request->email;
        $thisContact->contactType = $request->contactType;
        if (is_null($thisContact->contactType)) {
            $thisContact->contactType = 'fan';
        }
        $thisContact->vip = $request->vip;
        if (is_null($thisContact->vip)) {
            $thisContact->vip = 0;
        }
        $thisContact->comments = $request->comments;
        $thisContact->subscribed = 1;
        $thisContact->save();
        $createdEmail = new VIPCreated($thisContact);
        $notifyEmail = new NotifyVIPCreated($thisContact);
        if ($thisContact->vip == 0) {
            $createdEmail = new ContactCreated($thisContact);
            $notifyEmail = new NotifyContactCreated($thisContact);
        }
        Mail::to($thisContact->email)->send($createdEmail);
        Mail::to(self::NOTIFY_EMAIL_ADDRESS)->send($notifyEmail);
        return redirect('/')->with('contactAdded', 1);
    }

    public function unsubscribeEmail(Request $request)
    {
        $thisContact = new Contact;
        $foundContact = Contact::where('email', $request->email)->first();
        if (is_null($foundContact)) {
            return redirect('/')->with('contactDoesNotExist', 1);
        }
        $foundContact->subscribed = 0;
        $foundContact->save();
        return redirect('/')->with('emailUnsubscribed', 1);
    }

    public function verifyEmail(Request $request)
    {
        $thisContact = new Contact;
        $foundContact = Contact::where('email', $request->email)->first();
        if (is_null($foundContact)) {
            return redirect('/')->with('contactDoesNotExist', 1);
        }
        $foundContact->emailIsVerified = 1;
        $foundContact->save();
        return redirect('/')->with('emailVerified', 1);
    }
}
