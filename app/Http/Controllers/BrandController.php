<?php

namespace App\Http\Controllers;

use App\Http\Requests\BrandRequest;
use App\Models\Brand;
use App\Traits\UploadImageTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class BrandController extends Controller
{
    use UploadImageTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brands = Brand::with('userCreatedBrand','userUpdatedBrand')->get();        
        return view('en.admin.brands.brands', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('en.admin.brands.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BrandRequest $request)
    {
        if (session()->has('admin_email') && Auth::user()->role == 2) {
            
            // Move image to admins folder
            $path = $this->uploadImage($request, 'admins');

            // store in database
            $brand = new Brand();
            
            $brand->name = $request->name_en;
            $brand->image = $path;
            $brand->desc = $request->desc_en;
            $brand->created_by = Auth::user()->id;
            $brand->updated_by = Auth::user()->id;
            
            $brand->save();
            return redirect()->back()->with('success', 'Brand added successfuly!');
        }
        return 'something went wrong!';
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $brand = Brand::findorFail($id)->first();

        return view('en.admin.brands.show', compact('brand'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $brand = Brand::findorFail($id)->first(['id', 'name', 'image', 'desc']);

        return view('en.admin.brands.edit', compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $brand = Brand::findorFail($id);

        $data = [
            'name' => $request->name_en,
            'desc' => $request->desc_en,
        ];
        
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $path = $this->uploadImage($request, 'admins');
            $data['image'] = $path;
        }

        $brand->update($data);

        return redirect()->back()->with('success', 'Brand updated successfuly!');

    }

    // disabled brand status
    public function disabled($id)
    {
        $status = Brand::findorFail($id);

        $status->status = 0;
        $status->save();
        return redirect()->back()->with('disabled', 'Brand was disabled successuly!');
    }

    // Active brand status
    public function active($id)
    {
        $status = Brand::findorFail($id);

        $status->status = 1;

        $status->save();

        return redirect()->back()->with('active', 'Brand was active successuly!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Brand::findorFail($id)->delete();
        return redirect()->back()->with('success', 'Brand deleted successfuly!');
    }
}
