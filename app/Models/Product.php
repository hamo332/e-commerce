<?php

namespace App\Models;

use App\Models\Brand;
use App\Models\Section;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
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

    protected $casts = [
        'processes' => 'string'
    ];
    

    ########## Relations #############

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
    public function userUpdatedProduct() // update
    {
        return $this->belongsTo(User::class, 'updated_by');
    }

    // section
    public function productSection() // section
    {
        return $this->belongsTo(Section::class, 'section_id');
    }

    // brand
    public function productBrand() // section
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }

    // comments
    public function productComment() // comment
    {
        return $this->hasMany(Comment::class, 'product_id');
    }
    ########## Relations #############
}