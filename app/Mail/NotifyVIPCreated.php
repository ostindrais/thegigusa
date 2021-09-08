<?php

namespace App\Mail;

use App\Models\Contact;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NotifyVIPCreated extends Mailable
{
    use Queueable, SerializesModels;

    public $contact;
    public $url;
    public $hideFooterNavigation;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
        $this->url = env('APP_URL');
        $this->hideFooterNavigation = true;
    }


    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->subject("New The GIG USA VIP Contact");
        return $this->view('emails.notifyVIP');
    }
}
