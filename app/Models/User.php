<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Book;
use App\Models\Brand;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'phone',
        'image',
        'role',
        'address',
        'gender',
        'post_code',
        'password'
    ];


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    ########## Relations #############
    
    // Relationship with Product Model
    // public function created_by()
    // {
    //     return $this->belongsTo(User::class, 'user_id');
    // }

    // Relationship With Brand Model
    public function brandCreatedBy()
    {
        return $this->hasOne(Brand::class, 'created_by');
    }

    // Relationship With Brand Model
    public function brandUpdatedBy()
    {
        return $this->hasOne(Brand::class, 'updated_by');
    }

    // Relationship With Section Model
    public function sectionCreatedBy()
    {
        return $this->hasOne(Section::class, 'created_by');
    }

    // Relationship With Section Model
    public function sectionUpdatedBy()
    {
        return $this->hasOne(Section::class, 'updated_by');
    }


    // Relationship With Section Model
    public function productCreatedBy() // create
    {
        return $this->hasOne(Product::class, 'created_by');
    }
    // Relationship With Section Model
    public function productUpdatedBy() // update
    {
        return $this->hasOne(Product::class, 'updated_by');
    }

    // comments
    public function userComments() // comments
    {
        return $this->hasMany(Comment::class, 'created_by');
    }

    // Rent Books
    public function userRentBooks() // Rent Books
    {
        return $this->hasMany(Book::class, 'rent_id');
    }
    // Product Books
    public function userProductBooks() // Product Books
    {
        return $this->hasMany(Book::class, 'product_id');
    }
    ########## Relations #############
}
