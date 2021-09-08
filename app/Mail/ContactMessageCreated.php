<?php

namespace App\Mail;

use App\Models\ContactMessage;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMessageCreated extends Mailable
{
    use Queueable, SerializesModels;

    public $message;
    public $url;
    public $hideFooterNavigation;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(ContactMessage $message)
    {
        $this->message = $message;
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
        $this->subject("The GIG USA Got Your Message");
        return $this->view('emails.newContactMessage');
    }
}
