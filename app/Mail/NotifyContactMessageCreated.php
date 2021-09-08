<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\ContactMessage;

class NotifyContactMessageCreated extends Mailable
{
    use Queueable, SerializesModels;

    public $contactMessage;
    public $url;
    public $hideFooterNavigation;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(ContactMessage $message)
    {
        $this->contactMessage = $message;
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
        $this->subject("New The GIG USA Contact Message");
        return $this->view('emails.notifyContactMessage');
    }
}
