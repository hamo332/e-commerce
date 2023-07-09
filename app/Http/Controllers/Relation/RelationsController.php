<?php

namespace App\Http\Controllers\Relation;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class RelationsController extends Controller
{
    // Relation with users and products
    public function product_user(){
        
        $user = Product::with('created_by')->find(1);

        return $user;
    }
}
