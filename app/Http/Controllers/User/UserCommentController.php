<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Notifications\admin\CommentNotify;
use Illuminate\Support\Facades\Notification;

class UserCommentController extends Controller
{
    public function storeProductComment(Request $request)
    {
        $comment = new Comment;

        $comment->comment = $request->comment;
        $comment->product_id = $request->product_id;
        $comment->rate = $request->ratings;
        $comment->created_by = Auth::user()->id;
        
        $comment->save();
        if ($comment->wasRecentlyCreated) {
            // Save Notification To Database
            $users = User::where('role', '>', 0)->get();
            $alert = "New Comment";
            $comment_id = $comment->id;
            $comment = $comment->comment;
            $user_createId = Auth::user()->id;
            $user_createName = Auth::user()->name;
    
            $rent_id = $request->rent_id;
    
            Notification::send($users, new CommentNotify($comment_id, $alert, $comment, $rent_id, $user_createId, $user_createName));
        
            return redirect()->back()->with('success', 'Comment added successfuly!');
        }else{
            return redirect()->back()->with('error', 'Erroe Eccured!');
        }
    }

    public function storeRentComment(Request $request)
    {
        $comment = new Comment;

        $comment->comment = $request->comment;
        $comment->rent_id = $request->rent_id;
        $comment->rate = $request->ratings;
        $comment->created_by = Auth::user()->id;
        
        $comment->save();
        if ($comment->wasRecentlyCreated) {
            // Save Notification To Database
            $users = User::where('role', '>', 0)->get();
            $alert = "New Comment";
            $comment_id = $comment->id;
            $comment = $comment->comment;
            $user_createId = Auth::user()->id;
            $user_createName = Auth::user()->name;
    
            $rent_id = $request->rent_id;
    
            Notification::send($users, new CommentNotify($comment_id, $alert, $comment, $rent_id, $user_createId, $user_createName));
        
            return redirect()->back()->with('success', 'Comment added successfuly!');
        }else{
            return redirect()->back()->with('error', 'Erroe Eccured!');
        }
    }
}