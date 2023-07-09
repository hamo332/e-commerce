<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CheckAddUserRequest;

class UserRegisterationController extends Controller
{
    // Show Registeration Page
    public function registerPage()
    {
        if (Auth::check() && Auth::user()->role == 0) {
            return redirect()->route('profile');
        }else{
            return view('en.user.register');
        }
    }

    // User Registeration
    public function userRegisteration(CheckAddUserRequest $request)
    {
        // return $request;

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = bcrypt($request->password);
        $user->address = $request->address;
        $user->gender = $request->gender;
        $user->post_code = $request->postcode;
        try {
            // حفظ البيانات
            $user->save();

            $credentials = $request->only('email', 'password');
            
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
    
                $request->session()->put('user_email', $request->email);
                
                auth()->login($user);

                return redirect()->route('profile');
            }


        } catch (\Exception $e) {
            echo $e->getMessage();

            // return redirect()->route('error');
        }
    }
}