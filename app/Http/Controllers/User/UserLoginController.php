<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserLoginController extends Controller
{
    // Show login page
    public function loginPage()
    {
        if (Auth::check() && Auth::user()->role == 0)
        {
            return redirect()->route('profile');
        }
        return view('en.user.login');
    }

    // handle login Request
    public function userLogin(Request $request)
    {
        $credentials = $request->only('email', 'password');
        
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            
            $request->session()->put('user_email', $request->email);

            return redirect()->route('profile');
        } else {            
            return redirect()->route('loginPage')->with('error', 'خطأ في تسجيل الدخول، يرجى التحقق من البريد الإلكتروني وكلمة المرور.');
        }
    }
    
    public function logout()
    {
        Auth::logout();

        return redirect()->route('loginPage');
    }
}
