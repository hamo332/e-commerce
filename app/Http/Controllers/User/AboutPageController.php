<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutPageController extends Controller
{
    // view about page
    public function aboutPage()
    {
        return view('en.user.about');
    }
}
