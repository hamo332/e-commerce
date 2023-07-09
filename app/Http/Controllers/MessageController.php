<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Notifications\admin\MessageNotify;
use Illuminate\Support\Facades\Notification;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return "messages";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.create-message');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $message = new Message;

        $message->title = $request->title;
        $message->body = $request->body;
        
        $message->save();

        // Save Notification To Database
        $users = User::where('role', '>', 0)->get();
        $alert = "New Message";
        $message_id = $message->id;
        $title = $message->title;
        $user_create = Auth::user()->name;

        Notification::send($users, new MessageNotify($message_id, $alert, $title, $user_create));
    }

    /**
     * Display the specified resource.
     */
    public function show(Message $message)
    {
        
    }

    public function showMessageFromNotification($id)
    {
        $notification = auth()->user()->notifications()->findOrFail($id);
        $data = $notification->data;

        if (isset($data['message_id'])) {
            $message_id = $data['message_id'];
            $message = Message::findOrFail($message_id);
            
            $notification->markAsRead();

            return view('en.admin.messages.show', compact(['message', 'data']));
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Message $message)
    {
        //
    }
}
