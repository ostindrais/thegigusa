<?php

namespace App\Mail;

use App\Models\Contact;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class VIPCreated extends Mailable
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
        $this->subject("Welcome VIP to The GIG USA!");
        return $this->view('emails.newVIP');
    }
}
