<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public $request;
    public function __construct($request)
    {
        $this->request = $request;
    }

    public function build()
    {
        return $this->from($this->request['email'], $this->request['sender'])
                    ->subject($this->request['subject'])
                    ->view('mail');
    }
}

