<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use App\Models\Message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Notifications\admin\MessageNotify;
use Illuminate\Support\Facades\Notification;

class ContactPageController extends Controller
{
    // view contact page
    public function contactPage()
    {
        return view('en.user.contact');
    }

    // send message from user
    public function storeMessage(Request $request)
    {
        // return $request;
        
        $message = new Message;

        $message->title = $request->title;
        $message->body = $request->body;
        $message->name = $request->name;
        $message->email = $request->email;
        $message->phone = $request->phone;
        
        $message->save();

        // Save Notification To Database
        // $users = User::where('role', '>', 0)->get();
        // $alert = "New Message";
        // $message_id = $message->id;
        // $title = $message->title;
        // $user_create = $request->name;

        // Notification::send($users, new MessageNotify($message_id, $alert, $title, $user_create));
        return redirect()->back()->with('success', 'Message send successfuly!');
    }
}