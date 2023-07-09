<?php

namespace App\Http\Controllers\User;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    // store new rent book
    public function storeNewBook(Request $request)
    {
        $book = new Book();

        $booking_number = substr(date('YmdHis'), 0, 6) . substr(mt_rand(1000, 9999), 0, 3);

        $book->booking_number = $booking_number;
        $book->user_id = Auth::user()->id;
        $book->amount = $request->amount;
        $book->message = $request->message;
        $book->address = $request->address;
        
        if($request->has('rent_id'))
        {
            $book->rent_id = $request->rent_id;
        }else if($request->has('product_id')){
            $book->product_id = $request->product_id;
        }

        $book->save();

        if ($book->wasRecentlyCreated) {
            return redirect()->back()->with('success', 'Book Added Successfuly!');
        }else{
            return redirect()->back()->with('error', 'Something Went Wrong, Try Again Later!');
        }
    }
}
