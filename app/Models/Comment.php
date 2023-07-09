<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['comment'];

    // Products
    public function productComment() // brand id
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    // Rents
    public function rentComment() // brand id
    {
        return $this->belongsTo(Rent::class, 'rent_id');
    }

    // Users
    public function userComments() // user id
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}