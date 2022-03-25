<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TrainerNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $from;
    public $to;
    public $name;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($from,$to,$name)
    {
        // $this->from = $from;
        // $this->to = $to;
        $this->name = $name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('support@email.com')
        ->subject('A sample email')
        ->to('shankhantanoli@gmail.com')
        ->view('emails.appointment-email');
    }
}
