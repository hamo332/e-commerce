<?php

namespace App\Notifications\admin;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class RentNotify extends Notification
{
    use Queueable;

    private $rent_id;
    private $alert;
    private $user_create;

    /**
     * Create a new notification instance.
     */
    public function __construct($rent_id, $alert, $user_create)
    {
        $this->rent_id = $rent_id;
        $this->alert = $alert;
        $this->user_create = $user_create;
    }


    public function via(object $notifiable): array
    {
        return ['database'];
    }


    public function toArray(object $notifiable): array
    {
        return [
            'rent_id' => $this->rent_id,
            'alert' => $this->alert,
            'user_create' => $this->user_create,
            'notification_id' => $this->id,
        ];
    }
}
