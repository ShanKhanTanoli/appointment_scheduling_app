<?php

namespace App\Notifications;

use App\Models\Setting;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class EmailNotification extends Notification
{
    use Queueable;

    public $data;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        //Set App Name
        config(['app.name' => Setting::Logo()]);

        //Set From Name
        config(['database.connections.mysql.from_name' => Setting::Logo()]);

        config(['database.connections.mysql.from_address' => 'support@'.strtolower(Setting::Logo()).'.com']);

        config(['app.MAIL_FROM_NAME' => Setting::Logo()]);

        //dd($this->data['first_name']);

        return (new MailMessage)
            ->line($this->data['first_name'] . ' ' . $this->data['last_name'] . ' has requested an Appointment with you.');
            //->action('Notification Action', url('/'));
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
