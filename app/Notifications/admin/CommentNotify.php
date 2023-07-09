<?php

namespace App\Notifications\admin;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class CommentNotify extends Notification
{
    use Queueable;

    private $comment_id;
    private $alert;
    private $comment;
    private $product_id;
    private $user_createId;
    private $user_createName;

    /**
     * Create a new notification instance.
     */
    public function __construct($comment_id, $alert, $comment, $product_id, $user_createId, $user_createName)
    {
        $this->comment_id = $comment_id;
        $this->alert = $alert;
        $this->user_createId = $user_createId;
        $this->product_id = $product_id;
        $this->user_createId = $user_createId;
        $this->user_createName = $user_createName;
        $this->comment = $comment;
    }

    public function via(object $notifiable): array
    {
        return ['database'];
    }

    public function toArray(object $notifiable): array
    {
        return [
            
            'comment_id' => $this->comment_id,
            'alert' => $this->alert,
            'comment' => $this->comment,
            'user_createId' => $this->user_createId,
            'product_id' => $this->product_id,
            'user_createId' => $this->user_createId,
            'user_createName' => $this->user_createName,
            'notification_id' => $this->id,
        ];
    }
}
