<?php

namespace App\Models;

use App\Models\User;
use App\Models\Brand;
use App\Models\Section;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Rent extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'disc',
        'image',
        'gallery',
        'product_number',
        'created_by',
        'updated_by',
        'status',
        'processes',
        'purpose',
        'price',
        'discount',
        'creator',
        'section_id',
        'brand_id',        
    ];

    ########## Relations #############

    // user
    // Relationship With Product Model
    public function userCreateRent() // create
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    // Relationship with brand Model
    public function brand_id()
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }

    // Relationship with brand Model
    public function section_id()
    {
        return $this->belongsTo(Section::class, 'section_id');
    }


    // user
    // Relationship With Product Model
    public function userCreateProduct() // create
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    // Relationship With Product Model
    public function userUpdatedRent() // update
    {
        return $this->belongsTo(User::class, 'updated_by');
    }

    // section
    public function RentSection() // section
    {
        return $this->belongsTo(Section::class, 'section_id');
    }

    // brand
    public function RentBrand() // section
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }

    // comments
    public function rentComment() // section
    {
        return $this->hasMany(Comment::class, 'rent_id');
    }
    ########## Relations #############
}
