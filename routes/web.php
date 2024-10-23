<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\DeliveryController;
use App\Http\Controllers\Backend\CustomerController;
use App\Http\Controllers\Backend\RestaurantController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

// // Route::get('/dashboard', function () {
// //      // Prevent delivery boys from accessing customer dashboard
// //      if (Auth::user()->role === 'delivery_boy') {
// //         abort(403, 'Unauthorized access.');
// //     }
// //     return view('dashboard');
// // })->middleware(['auth', 'verified'])->name('dashboard');

// // Route::middleware('auth')->group(function () {
// //     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
// //     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
// //     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// // });

// // Customer Routes
// Route::middleware(['auth', 'verified', 'customer'])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');

//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });


// // Admin Routes
// // Route::middleware('guest')->group(function () {
// //     Route::get('admin/login', [AdminController::class, 'adminLogin'])
// //     ->name('admin.login');

// //     Route::post('admin/login', [AdminController::class, 'adminLogin'])
// //     ->name('admin.login');

// // });

// // Route::prefix('admin')->name('admin.')->namespace('App\Http\Controllers\Backend')->group(function(){
// //     // Route::middleware(['guest'])->group(function () {
// //         Route::match(['get' , 'post'] ,'login' ,  'AdminController@login')->name('login')->middleware('guest');

// //         // Route::middleware(['admin'])->group(function () {
// //         //     Route::get('dashboard' , 'AdminController@dashboard')->name('dashboard');
// //         // });

// // });
// // Route::middleware(['auth', 'admin'])->group(function () {
// //     Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
// //     Route::get('/admin/profile', [AdminController::class, 'profile'])->name('admin.profile');
// //     // other admin routes...
// // });


// Route::prefix('admin')->name('admin.')->group(function() {
//     // Guest routes
//     Route::middleware('guest')->group(function() {
//         Route::match(['get', 'post'], '/login', [AdminController::class, 'login'])
//             ->name('login');
//     });

//     // Admin protected routes using default guard
//     Route::middleware(['auth', 'admin'])->group(function() {
//         Route::post('logout', [AdminController::class, 'logout'])->name('logout');
//         Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
//         Route::get('/profile', [AdminController::class, 'profile'])->name('profile');
//         Route::post('/logout', [AdminController::class, 'logout'])->name('logout');
//         // Restaurants

//         Route::resource('restaurants', RestrauntController::class);
//     });
// });


// // Delivery Routes
// Route::middleware(['auth', 'delivery'])->group(function () {
//     Route::get('/delivery/dashboard', [DeliveryController::class, 'dashboard'])->name('delivery.dashboard');
//     Route::get('/delivery/profile', [DeliveryController::class, 'profile'])->name('delivery.profile');
//     // other delivery routes...
// });


// // // Customer Routes
// // Route::middleware(['auth', 'customer'])->group(function () {
// //     Route::get('/restaurants', [CustomerController::class, 'listRestaurants'])->name('customer.restaurants');
// //     // other customer routes...
// // });

// require __DIR__.'/auth.php';




// Public routes
Route::get('/', function () {
    return view('welcome');
});

// Authentication routes
Route::middleware('guest')->group(function () {
    // Admin login
    // Route::get('/admin/login', [AdminController::class, 'showAdminLoginForm'])->name('admin.login');
    // Route::post('/admin/login', [AdminController::class, 'adminLogin']);

    Route::match(['get', 'post'], '/admin/login', [AdminController::class, 'login'])->name('admin.login');


    // Restaurant login
    Route::get('/restaurant/login', [RestaurantController::class, 'showRestaurantLoginForm'])->name('restaurant.login');
    Route::post('/restaurant/login', [RestaurantController::class, 'restaurantLogin']);

    // Customer routes
    Route::get('/register', [CustomerController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [CustomerController::class, 'register']);
    Route::get('/login', [CustomerController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [CustomerController::class, 'login']);

    // Delivery registration
    // Route::get('/delivery/register', [DeliveryController::class, 'showDeliveryRegistrationForm'])->name('delivery.register');
    // Route::post('/delivery/register', [DeliveryController::class, 'deliveryRegister']);

    Route::match(['get', 'post'], '/delivery/registration', [DeliveryController::class, 'showDeliveryRegistration'])->name('delivery.registration');

});

// Protected routes
Route::middleware(['auth'])->group(function () {
    // Admin routes
    Route::middleware(['admin'])->prefix('admin')->name('admin.')->group(function () {
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
        // Logout route
    Route::post('/logout', [AdminController::class, 'logout'])->name('logout');
        Route::resource('/restaurants', RestaurantController::class);
        // Other admin routes...
    });

    // Restaurant routes
    Route::middleware(['restaurant'])->prefix('restaurant')->group(function () {
        Route::get('/dashboard', [RestaurantController::class, 'dashboard'])->name('restaurant.dashboard');
        // Other restaurant routes...
    });

    // Customer routes
    Route::middleware(['customer'])->prefix('customer')->group(function () {
        Route::get('/dashboard', [CustomerController::class, 'dashboard'])->name('customer.dashboard');
        // Other customer routes...
    });

    // Delivery routes
    Route::middleware(['delivery'])->prefix('delivery')->group(function () {
        Route::get('/dashboard', [DeliveryController::class, 'dashboard'])->name('delivery.dashboard');
        // Other delivery routes...
    });

    // Logout route
    // Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});
require __DIR__ . '/auth.php';
