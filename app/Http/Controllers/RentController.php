<?php

namespace App\Http\Controllers;

use App\Models\Rent;
use App\Models\User;
use App\Models\Brand;
use App\Models\Section;
use Illuminate\Http\Request;
use App\Http\Requests\RentRequest;
use App\Notifications\admin\RentNotify;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;

class RentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rents = Rent::with('userCreateRent', 'userUpdatedRent','RentSection', 'RentBrand')->get();        
        return view('en.admin.rents.rents', compact('rents'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::get(['id', 'email']);
        $sections = Section::get(['id', 'name']);
        $brands = Brand::get(['id', 'name']);
        return view('en.admin.rents.create', compact(['users', 'sections', 'brands']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RentRequest $request)
    {
        if ($request->creator == 'user') {
        $folderName = 'users';
        $created_by = $request->created_by;
        $updated_by = $request->created_by;
        }elseif ($request->creator == 'admin'){
            $folderName = 'admins';
            $created_by = Auth::user()->id;
            $updated_by = Auth::user()->id;
        }else{
            return 'something went wrong!';
        }

        $rent = new Rent();

        // تحميل الصورة الرئيسية وحفظها
        $image = $request->file('image');
        $imagePath = $image->store($folderName, 'category');

        $rent->image = $imagePath;

        // تحميل الصور المتعددة وحفظها
        $multiple_images = $request->file('multiple_images');

        $multiple_images_paths = [];
        if ($multiple_images) {
            foreach ($multiple_images as $key => $image) {
                if ($image) {
                    $path = $image->store($folderName, 'category');
                    $multiple_images_paths[$key] = $path;
                }
            }
            $rent->gallery = json_encode($multiple_images_paths);
        }
        
        $rentNumber = substr(date('YmdHis'), 0, 6) . substr(mt_rand(1000, 9999), 0, 3);
        // حفظ المنتج
        $rent->name = $request->name_en;
        $rent->processes = $request->processes;
        $rent->creator = $request->creator;

        $rent->rent_number = $rentNumber;
        $rent->created_by = $created_by;
        $rent->updated_by = $updated_by;
        $rent->status = 1;
        $rent->section_id = $request->section_id;
        $rent->brand_id = $request->brand_id;
        $rent->purpose = $request->purpose; /////////////////////
        $rent->price = $request->price;
        $rent->timeframe = $request->timeframe;
        $rent->discount = $request->discount;
        $rent->disc = $request->desc_en;
        
        $rent->save();

        $users = User::where('role', '>', 0)->get();
        $alert = "New Rent";
        $rent_id = $rent->id;
        $user_create = Auth::user()->name;

        Notification::send($users, new RentNotify($rent_id, $alert, $user_create));

        return redirect()->back()->with('success', 'Rent added successfuly! with Rent Number: '. $rentNumber);
    }

    // holds 
    public function holds(){
        $rents = Rent::with('userCreateRent', 'userUpdatedRent','rentSection', 'rentBrand')
        ->where('processes', 'processed')->get();        
        return view('en.admin.rents.holds', compact('rents'));
    }

    // canceled
    public function canceled(){
        $rents = Rent::with('userCreateRent', 'userUpdatedRent','rentSection', 'rentBrand')
        ->where('processes', 'Cancelled')->get();        
        return view('en.admin.rents.canceled', compact('rents'));
    }

    // disabled
    public function disabled(){
        $rents = Rent::with('userCreateRent', 'userUpdatedRent','rentSection', 'rentBrand')
        ->where('processes', 'disabled')->get();        
        return view('en.admin.rents.disabled', compact('rents'));
    }

    // accepted
    public function accepted(){
        $rents = Rent::with('userCreateRent', 'userUpdatedRent','rentSection', 'rentBrand')
        ->where('processes', 'accepted')->get();        
        return view('en.admin.rents.accepted', compact('rents'));
    }

    /**
     * Display the specified resource.
     */
    public function show($id){
        $rent = Rent::with('userCreateRent', 'userUpdatedRent','RentSection', 'RentBrand')
        ->findOrFail($id);

        return view('en.admin.rents.show', compact('rent'));
    }

    public function showRentFromNotification($id){
     
        $notification = auth()->user()->notifications()->findOrFail($id);
        $data = $notification->data;

        if (isset($data['rent_id'])) {
            $rent_id = $data['rent_id'];
            $rent = Rent::with('userCreateRent', 'userUpdatedRent','rentSection', 'rentBrand')
            ->findOrFail($rent_id);
            
            $notification->markAsRead();

            return view('en.admin.rents.show', compact('rent'));
        }

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $users = User::get(['id', 'email']);
        $sections = Section::get(['id', 'name']);
        $brands = Brand::get(['id', 'name']);
        $rent = Rent::findorFail($id);
        
        return view('en.admin.rents.edit', compact(['users', 'sections', 'brands', 'rent']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        if ($request->creator == 'user') {
            $folderName = 'users';
            $created_by = $request->created_by;
        }elseif ($request->creator == 'admin'){
            $folderName = 'admins';
            $created_by = Auth::user()->id;
        }else{
            return 'something went wrong!';
        }

        $rent = Rent::findorFail($id);

        $updated_by = Auth::user()->id;
        // تحميل الصورة الرئيسية وحفظها
        $image = $request->file('image');
        if ($image) {
            
            $imagePath = $image->store($folderName, 'category');

            $rent->image = $imagePath;
        }

        // تحميل الصور المتعددة وحفظها
        $multiple_images = $request->file('multiple_images');

        $multiple_images_paths = [];
        if (!empty($multiple_images))
        {
            foreach ($multiple_images as $key => $image) {
                if ($image) {
                    $path = $image->store($folderName, 'category');
                    $multiple_images_paths[$key] = $path;
                }
            }
            if (!empty($multiple_images_paths)) {
                $rent->gallery = json_encode($multiple_images_paths);
            }
        }
        // $rentNumber = substr(date('YmdHis'), 0, 6) . substr(mt_rand(1000, 9999), 0, 3);
        // حفظ المنتج
        $rent->name = $request->name_en;
        $rent->processes = $request->proccesses;
        $rent->creator = $request->creator;

        // $rent->rent_number = $rentNumber;
        $rent->created_by = $created_by;
        $rent->updated_by = $updated_by;
        $rent->status = 1;
        $rent->section_id = $request->section_id;
        $rent->brand_id = $request->brand_id;
        $rent->purpose = $request->purpose; /////////////////////
        $rent->price = $request->price;
        $rent->timeframe = $request->timeframe;
        $rent->discount = $request->discount;
        $rent->disc = $request->desc_en;
        
        $rent->save();

        // Get rent Number
        $rentNumber = rent::findorFail($id)->first('rent_number');
        return redirect()->back()->with('success', 'The rent #'.$rentNumber.' Edite successfuly!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $rent = Rent::findorFail($id);
        $rentNumber = Rent::findorFail($id)->first('rent_number');

        $rent->delete();

        return redirect()->back()->with('success', 'Rent #'.$rentNumber.' deleted successfuly!');        
    }
}
