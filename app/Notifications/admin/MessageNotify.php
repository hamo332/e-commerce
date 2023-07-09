<?php

namespace App\Notifications\admin;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class MessageNotify extends Notification
{
    use Queueable;

    private $message_id;
    private $alert;
    private $title;
    private $user_create;

    /**
     * Create a new notification instance.
     */
    public function __construct($message_id, $alert, $title, $user_create)
    {
        $this->message_id = $message_id;
        $this->alert = $alert;
        $this->user_create = $user_create;
        $this->title = $title;
    }


    public function via(object $notifiable): array
    {
        return ['database'];
    }


    public function toArray(object $notifiable): array
    {
        return [
            
            'message_id' => $this->message_id,
            'alert' => $this->alert,
            'title' => $this->title,
            'user_create' => $this->user_create,
            'notification_id' => $this->id,
        ];
    }
}