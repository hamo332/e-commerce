<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\UpdateProfileRequest;

class UpdateProfileController extends Controller
{

    // update user profile image
    public function updateUserImage(Request $request, $user)
    {
        // update image
        if ($request->hasFile('image')) {
            $profileImage = $request->file('image');
            $imagePath = $profileImage->store('users', 'userProfile');
            
            if (Storage::disk('userProfile')->exists($imagePath)) {
                $user->image = $imagePath;
                // تم رفع الصورة بنجاح وموجودة على السيرفر
                return "Image uploaded successfully.";
            } else {
                // حدث خطأ في رفع الصورة أو لم تكن متواجدة على السيرفر
                return "Error uploading image.";
            }
            return "none";
        }
    }

    // update Profile data
    public function updateProfile(UpdateProfileRequest $request)
    {
    //     // Update data
        $credentials = [
            'email' => Auth::user()->email,
            'password' => $request->input('password')
        ];
        
        if (Auth::attempt($credentials)) {
            $user = User::where('email', Auth::user()->email)->first();
            
            if ($user) {
                // update profile image
                $this->updateUserImage($request, $user);
                // update data
                // تحقق مما إذا كان البريد الإلكتروني المرسل غير موجود في قاعدة البيانات
                $existingUser = User::where('email', $request->input('email'))->exists();
                
                if (!$existingUser) {

                    // update data
                    $user->name = $request->input('name');
                    $user->email = $request->input('email');
                    $user->address = $request->input('address');
                    $user->phone = $request->input('phone');
                    $user->post_code = $request->input('postcode');
                    
                    try {
                        $user->save();
                        return redirect()->route('profile')->with('success', 'Data was updated successfuly!');
                    } catch (\Exception $e) {
                        echo 'Something went wrong';
                        // return redirect()->route('error');
                    }
                } else {
                    echo 'Email maybe exists or blocked!';
                    // يمكنك تنفيذ سلوك إضافي هنا إذا كان البريد الإلكتروني موجود بالفعل في قاعدة البيانات
                }
            }
        }
        
    }
    
}