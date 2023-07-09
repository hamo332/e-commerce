<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Rent;
use Illuminate\Http\Request;

class PublicPageController extends Controller
{
    // get limit products
    private function getLimitProducts($num)
    {
        $products = Product::limit($num)->with(
        'productSection'
        ,'productBrand'
        ,'productComment')
        ->get();

        return $products;
    }
    
    // get lastest products
    private function getRandomProducts($num)
    {
        $products = Product::inRandomOrder()->take($num)->get();

        return $products;
    }

    // get random products
    private function getLastestProducts($num)
    {
        $products = Product::latest()->limit($num)->get();

        return $products;
    }

    // get number of products
    private function getNumberOfProducts()
    {
        return Product::count();
    }

    // get limit rents
    private function getLimitRents($num)
    {
        $rents = Rent::with(('rentComment'))->limit($num)->get();

        return $rents;
    }

    // view public page
    public function mainPage()
    {
        $limitProducts = $this->getLimitProducts(6);
        $randomProducts = $this->getRandomProducts(6);
        $lastestProducts = $this->getLastestProducts(6);

        $limitRents = $this->getLimitRents(6);

        return view('en.user.index', compact('limitProducts'
        , 'randomProducts'
        , 'lastestProducts'
        , 'limitRents'));
    }
}
