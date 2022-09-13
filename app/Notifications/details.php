<?php

namespace App\Notifications;

use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Maneger;

class details extends Notification
{
    use Queueable;
    public $detail;
    public $name;


    public function __construct($detail , $name)
    {
        $this->detail = $detail;
        $this->name = $name;
    }


    public function via($notifiable)
    {
        return ['mail'];
    }


    public function toMail($notifiable)
    {
        $detail = $this->detail;
        $name = $this->name;

        return (new MailMessage)
            ->subject('School-Digtal')
            ->line('المرسل : '  . $name)
            ->line('تفاصيل الايميل المرسل : '  .  $detail);

    }


    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
