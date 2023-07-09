<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Book extends Model
{
    use HasFactory;
    use SoftDeletes;

    ###############Relationships#################
    // Rent Books
    public function userRentBooks() // Rent Books
    {
        return $this->belongsTo(User::class, 'rent_id');
    }

    // Product Books
    public function userProductBooks() // Product Books
    {
        return $this->belongsTo(User::class, 'product_id');
    }
    ###############Relationships#################
}
