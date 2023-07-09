<?php

namespace App\Http\Controllers\User;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductsController extends Controller
{
    // show products page
    public function productsPage()
    {
        $products = Product::paginate(6);
        return view('en.user.products', ['products' => $products]);
    }

    // show products page
    public function productDetailsPage($id)
    {
        $product = Product::findOrFail($id);
        return view('en.user.productdetails', ['product' => $product]);
    }
}