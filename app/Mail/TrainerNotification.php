<?php

namespace App\Mail;

use App\Models\Setting;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TrainerNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $subject;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $subject)
    {
        $this->name = $name;
        $this->subject = $subject;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('support@email.com')
            ->subject($this->subject)
            ->from('no-reply@' . strtoupper(Setting::Logo()) . '.com', Setting::Logo())
            ->to('shankhantanoli1@gmail.com')
            ->view('emails.appointment-email');
    }
}
