<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Section;
use App\Models\User;
use App\Notifications\admin\ProductNotify;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::with('userCreateProduct', 'userUpdatedProduct','productSection', 'productBrand')->get();        
        return view('en.admin.products.products', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::get(['id', 'email']);
        $sections = Section::get(['id', 'name']);
        $brands = Brand::get(['id', 'name']);
        return view('en.admin.products.create', compact(['users', 'sections', 'brands']));
    }

    // show
    public function show($id){
        $product = Product::with('userCreateProduct', 'userUpdatedProduct','productSection', 'productBrand')
        ->findOrFail($id);        

        return view('en.admin.products.show', compact('product'));
    }

    // show
    public function showProductFromNotification($id){
     
        $notification = auth()->user()->notifications()->findOrFail($id);
        $data = $notification->data;

        if (isset($data['product_id'])) {
            $product_id = $data['product_id'];
            $product = Product::with('userCreateProduct', 'userUpdatedProduct','productSection', 'productBrand')
            ->findOrFail($product_id);
            
            $notification->markAsRead();

            return view('en.admin.products.show', compact('product'));
        }

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
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

        $product = new Product();

        // تحميل الصورة الرئيسية وحفظها
        $image = $request->file('image');
        $imagePath = $image->store($folderName, 'category');

        $product->image = $imagePath;

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
            $product->gallery = json_encode($multiple_images_paths);
        }
        
        $productNumber = substr(date('YmdHis'), 0, 6) . substr(mt_rand(1000, 9999), 0, 3);
        // حفظ المنتج
        $product->name = $request->name_en;
        $product->processes = $request->processes;
        $product->creator = $request->creator;

        $product->product_number = $productNumber;
        $product->created_by = $created_by;
        $product->updated_by = $updated_by;
        $product->status = 1;
        $product->section_id = $request->section_id;
        $product->brand_id = $request->brand_id;
        $product->purpose = $request->purpose; /////////////////////
        $product->price = $request->price;
        $product->discount = $request->discount;
        $product->disc = $request->desc_en;
        
        $product->save();

        $users = User::where('role', '>', 0)->get();
        $message = "New Product";
        $product_id = $product->id;
        $user_create = Auth::user()->name;

        Notification::send($users, new ProductNotify($product_id, $message, $user_create));

        return redirect()->back()->with('success', 'Product added successfuly!' . "<br>" .' with Product Number: '. $productNumber);
    }

    // holds 
    public function holds(){
        $products = Product::with('userCreateProduct', 'userUpdatedProduct','productSection', 'productBrand')
        ->where('processes', 'processed')->get();        
        return view('en.admin.products.holds', compact('products'));
    }

    // canceled
    public function canceled(){
        $products = Product::with('userCreateProduct', 'userUpdatedProduct','productSection', 'productBrand')
        ->where('processes', 'Cancelled')->get();        
        return view('en.admin.products.canceled', compact('products'));
    }

    // disabled
    public function disabled(){
        $products = Product::with('userCreateProduct', 'userUpdatedProduct','productSection', 'productBrand')
        ->where('processes', 'disabled')->get();        
        return view('en.admin.products.disabled', compact('products'));
    }

    // accepted
    public function accepted(){
        $products = Product::with('userCreateProduct', 'userUpdatedProduct','productSection', 'productBrand')
        ->where('processes', 'accepted')->get();        
        return view('en.admin.products.accepted', compact('products'));
    }
    /**
     * Display the specified resource.
     */
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $users = User::get(['id', 'email']);
        $sections = Section::get(['id', 'name']);
        $brands = Brand::get(['id', 'name']);
        $product = Product::findorFail($id);
        
        return view('en.admin.products.edit', compact(['users', 'sections', 'brands', 'product']));
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

        $product = Product::findorFail($id);

        $updated_by = Auth::user()->id;
        // تحميل الصورة الرئيسية وحفظها
        $image = $request->file('image');
        if ($image) {
            
            $imagePath = $image->store($folderName, 'category');

            $product->image = $imagePath;
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
                $product->gallery = json_encode($multiple_images_paths);
            }
        }
        // $productNumber = substr(date('YmdHis'), 0, 6) . substr(mt_rand(1000, 9999), 0, 3);
        // حفظ المنتج
        $product->name = $request->name_en;
        $product->processes = $request->proccesses;
        $product->creator = $request->creator;

        // $product->product_number = $productNumber;
        $product->created_by = $created_by;
        $product->updated_by = $updated_by;
        $product->status = 1;
        $product->section_id = $request->section_id;
        $product->brand_id = $request->brand_id;
        $product->purpose = $request->purpose; /////////////////////
        $product->price = $request->price;
        $product->discount = $request->discount;
        $product->disc = $request->desc_en;
        
        $product->save();

        // Get Product Number
        $productNumber = Product::findorFail($id)->first('product_number');
        return redirect()->back()->with('success', 'The Product #'.$productNumber.' Edite successfuly!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $product = Product::findorFail($id);
        $productNumber = Product::findorFail($id)->first('product_number');

        $product->delete();

        return redirect()->back()->with('success', 'Product #'.$productNumber.' deleted successfuly!');        
    }
}