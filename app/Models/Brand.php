<?php

namespace App\Models;

use App\Models\User;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Brand extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['name', 'image', 'desc', 'created_by', 'updated_by'];

    ########## Relations #############

    // Relationship With User Model
    public function userCreatedBrand()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
    
    // Relationship With User Model
    public function userUpdatedBrand()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }

    // product
    public function productBrand() // brand id
    {
        return $this->hasOne(Product::class, 'brand_id');
    }


    // Relationship With Rent Model
    public function RentBrand() // brand id
    {
        return $this->hasOne(Rent::class, 'brand_id');
    }


    ########## Relations #############
}
