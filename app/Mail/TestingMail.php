<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class TestingMail extends Mailable
{
    use Queueable, SerializesModels;

    public $from;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($from = [])
    {
        $this->from = $from;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->from)
                    ->subject('Hi This is the email utility.')
                    ->markdown('emails.test');
    }
}
