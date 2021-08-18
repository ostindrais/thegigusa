<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Contact;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function addEmail(Request $request)
    {
        $inputValues = $request->input();
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
        $thisContact->save();
        return redirect('/')->with('contactAdded', 1);
    }
}
