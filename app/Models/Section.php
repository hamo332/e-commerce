<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Section extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['name', 'desc','status', 'created_by', 'updated_by'];


    ########## Relations #############

    // user
    public function userCreatedSection()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
    
    // Relationship With Brand Model
    public function userUpdatedSection()
    {
        return $this->belongsTo(User::class, 'updated_by');
    }

    // product
    // Relationship With Section Model
    public function productSection() // section id
    {
        return $this->hasOne(Product::class, 'section_id');
    }

    ########## Relations #############
}