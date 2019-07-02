<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Http\Request;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    // public $email;
    public $bodyMessage;
    public $frommail;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($bodyMessage, $frommail)
    {
        $this->bodyMessage = $bodyMessage;
        $this->formmail = $frommail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->frommail)->view('pesan');

    //     return $this->subject('New Contact')
    //                 ->from('tinosunjaya@gmail.com')
    //                 ->with([
    //                     'name' => $name,
    //                     'email' => $email,
    //                     'message' => $message,
    //                 ])
    //                 ->view('pesan');
    //
    }
}