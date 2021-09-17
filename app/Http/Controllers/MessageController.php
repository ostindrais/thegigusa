<?php

namespace App\Http\Controllers;

use App\Mail\ContactMessageCreated;
use App\Mail\NotifyContactMessageCreated;
use App\Models\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\View;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messages = ContactMessage::all();
        return View::make('messages', ['messages' => $messages]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    public function add(Request $request)
    {
        $contactMessage = new ContactMessage;
        $contactMessage->name = $request->name;
        $contactMessage->email = $request->email;
        $contactMessage->message = $request->message;
        $contactMessage->save();
        $notifyEmail = new NotifyContactMessageCreated($contactMessage);
        $createdEmail = new ContactMessageCreated($contactMessage);
        Mail::to($contactMessage->email)->send($createdEmail);
        Mail::to(self::NOTIFY_EMAIL_ADDRESS)->send($notifyEmail);
        return redirect('/contact')->with('messageSent', 1);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
