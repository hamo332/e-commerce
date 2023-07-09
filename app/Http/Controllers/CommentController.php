<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Comment;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Notifications\admin\CommentNotify;
use Illuminate\Support\Facades\Notification;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return "comments";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.create-comment');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $comment = new Comment;

        $comment->comment = $request->comment;
        
        $comment->save();

        // Save Notification To Database
        $users = User::where('role', '>', 0)->get();
        $alert = "New Comment";
        $comment_id = $comment->id;
        $comment = $comment->comment;
        $user_createId = Auth::user()->id;
        $user_createName = Auth::user()->name;

        $product_id = $request->product_id;

        Notification::send($users, new CommentNotify($comment_id, $alert, $comment, $product_id, $user_createId, $user_createName));
    }

    /**
     * Display the specified resource.
     */
    public function show(Comment $comment)
    {
        //
    }

    public function showCommentsFromNotification($id)
    {
        $notification = auth()->user()->notifications()->findOrFail($id);
        $data = $notification->data;

        if (isset($data['comment_id'])) {
            $comment_id = $data['comment_id'];
            $comment = Comment::findOrFail($comment_id);
            
            $product_id = $data['product_id'];
            $product = Product::findOrFail($product_id);
            
            $user_id = $data['user_createId'];
            $user = User::findOrFail($user_id);
            
            $notification->markAsRead();

            return view('en.admin.comments.show', compact(['comment', 'data', 'product', 'user']));
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        //
    }
}
