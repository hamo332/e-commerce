<?php

use App\Models\User;
use App\Models\user\PublicPage;
use Illuminate\Support\ViewErrorBag;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\User\ProductsController;
use App\Http\Controllers\User\BookController;
use App\Http\Controllers\User\AboutPageController;
use App\Http\Controllers\User\UserLoginController;
use App\Http\Controllers\User\UserRentsController;
use App\Http\Controllers\User\PublicPageController;
use App\Http\Controllers\User\ContactPageController;
use App\Http\Controllers\User\UserCommentController;

use App\Http\Controllers\Relation\RelationsController;
use App\Http\Controllers\User\UpdateProfileController;
use App\Http\Controllers\User\UserRegisterationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('admin/login', [UserController::class, 'login'])->name('admin.login');
Route::get('doLogin', [UserController::class, 'authenticate'])->name('doLogin');

Route::prefix('admin')->middleware(['checksession'])->group(function(){

    // dashboard
    Route::get('/dashboard', function(){
        return view('admin.dashboard');
    })->name('admin/dashboard');

    // get users
    Route::get('getusers', [AdminController::class, 'getUsers']);

    // add new user
    Route::post('users/store', [AdminController::class, 'addUser'])->name('users.store');

    // Add New Brand
    Route::post('brands/store', [BrandController::class, 'store'])->name('brand.store');

    // Update Brand Info
    Route::post('brands/update/{id}', [BrandController::class, 'update'])->name('brand.update');

    // Disabled Brand Status
    Route::get('brands/disabled/{id}', [BrandController::class, 'disabled'])->name('brand.disabled');

    // Active Brand Status
    Route::get('brands/active/{id}', [BrandController::class, 'active'])->name('brand.active');
    
    // Brand Destroy
    Route::post('brands/destroy/{id}', [BrandController::class, 'destroy'])->name('brand.destroy');
    
    // Disabled section Status
    Route::get('section/disabled/{id}', [SectionController::class, 'disabled'])->name('section.disabled');

    // Active section Status
    Route::get('section/active/{id}', [SectionController::class, 'active'])->name('section.active');

    // logout
    Route::get('/logout', [UserController::class, 'logout'])->name('admin.logout');

    // View Pages
    Route::get('/customers', [AdminController::class, 'customers'])->name('customers.page'); // customers page
    Route::get('create', [AdminController::class, 'createUser'])->name('admin.createUser'); // Create new user
    
    Route::get('brands/create', [BrandController::class, 'create'])->name('brands.create'); // Create new brands
    Route::get('brands/edit/{id}', [BrandController::class, 'edit'])->name('brand.edit'); // edit brand page
    Route::get('brands/show/{id}', [BrandController::class, 'show'])->name('brand.show');
    Route::get('brands', [BrandController::class, 'index'])->name('brands');

    Route::resource('sections', SectionController::class); // sections
    
    Route::resource('products', ProductController::class); // products
    Route::get("/product/holds", [ProductController::class, 'holds'])->name('products.holds');

    Route::get("/product/canceled", [ProductController::class, 'canceled'])->name('products.canceled');
    Route::get("/product/disabled", [ProductController::class, 'disabled'])->name('products.disabled');
    Route::get("/product/accepted", [ProductController::class, 'accepted'])->name('products.accepted');
    Route::get('/showProductFromNotification/{id}', [ProductController::class, 'showProductFromNotification'])->name('showProductFromNotification');

    Route::resource('/messages', MessageController::class);
    Route::get('/showMessageFromNotification/{id}', [MessageController::class, 'showMessageFromNotification'])->name('showMessageFromNotification');

    Route::resource('/comments', CommentController::class);
    Route::get('/showCommentsFromNotification/{id}', [CommentController::class, 'showCommentsFromNotification'])->name('showCommentsFromNotification');
    
    // ==========================
    Route::resource('rents', RentController::class);
    Route::get("/rent/holds", [RentController::class, 'holds'])->name('rents.holds');
    Route::get("/rent/canceled", [RentController::class, 'canceled'])->name('rents.canceled');
    Route::get("/rent/disabled", [RentController::class, 'disabled'])->name('rents.disabled');
    Route::get("/rent/accepted", [RentController::class, 'accepted'])->name('rents.accepted');
    Route::get('/showRentFromNotification/{id}', [RentController::class, 'showRentFromNotification'])->name('showRentFromNotification');
    // ==========================

    Route::resource('/comments', CommentController::class);
    Route::get('/showCommentFromNotification/{id}', [CommentController::class, 'showCommentFromNotification'])->name('showCommentFromNotification');

    // End View Pages
});


// =======================================
        // Public

Route::get('/', [PublicPageController::class, 'mainPage']);
Route::get('/about', [AboutPageController::class, 'aboutPage']);
Route::get('/contact', [ContactPageController::class, 'contactPage']);
Route::get('/contact/send-message', [ContactPageController::class, 'storeMessage'])->name('storeMessage');

// =======================================
        // logout
Route::get('/logout', [UserLoginController::class, 'logout'])->name('logout');

        // User Registeration
Route::get('/login',[UserLoginController::class, 'loginPage'])->name('loginPage');
Route::get('userLogin', [userLoginController::class, 'userLogin'])->name('userLogin');


Route::get('/register',[UserRegisterationController::class, 'registerPage'])->name('registerPage');
Route::get('/registeration',[UserRegisterationController::class, 'userRegisteration'])->name('registeration');

Route::middleware(['checkUserSession'])->group(function(){
    // show profile
    Route::get('profile', function(){
        return view('en.user.profile');
    })->name('profile');

    Route::get('/update-profile', [UpdateProfileController::class, 'updateProfile'])->name('update-profile');
    // new comment on product
    Route::get('newComment', [UserCommentController::class, 'storeProductComment'])->name('storeProductComment');
    // new comment on rent
    Route::get('newRentComment', [UserCommentController::class, 'storeRentComment'])->name('storeRentComment');
    // add new booking
    Route::get('booking', [BookController::class, 'storeNewBook'])->name('booking');

});
    // Show Product Page And Get 10 Products
Route::get('products', [ProductsController::class, 'productsPage'])->name('productsPage');
Route::get('product/details/{id}', [ProductsController::class, 'productDetailsPage'])->name('product-details');

// Show Rent Page And Get 10 Rents
Route::get('rents', [UserRentsController::class, 'rentsPage'])->name('rentsPage');
Route::get('rent/details/{id}', [UserRentsController::class, 'rentDetailsPage'])->name('rent-details');


// =======================================