<?php

namespace App\Http\Controllers\User;

use App\Models\Rent;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserRentsController extends Controller
{
    // show rents page
    public function rentsPage()
    {
        $rents = Rent::paginate(6);
        return view('en.user.rents', ['rents' => $rents]);
    }

    // show rents page
    public function rentDetailsPage($id)
    {
        $rent = rent::findOrFail($id);
        return view('en.user.rentdetails', ['rent' => $rent]);
    }
}
