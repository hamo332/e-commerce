<?php

namespace App\Http\Controllers;

use App\Http\Requests\CheckAddUserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // get users
    public function getUsers()
    {
        $users = User::where('role', '<=' ,0)
        ->get();
        
        return $users;
    }
    // get particular user
    public function getuser($id)
    {
        $user = User::findorFail($id)->first();

        return $user;
    }
    
    // View Customers Page
    public function customers()
    {
        $users = $this->getUsers();
        return view('admin.customers', compact('users'));
    }

    // create user page
    public function createUser()
    {
        return view('admin.create_user');
    }

    // Stor User
    public function addUser(CheckAddUserRequest $request)
    {
        if ($request) {
            
        }
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = bcrypt($request->password);
        $user->address = $request->address;
        $user->gender = $request->gender;
        $user->post_code = $request->postcode;

        $user->save();

        return redirect()->back()->with('success', 'تم تسجيل مستخدم جديد بنجاح!');

    }
}