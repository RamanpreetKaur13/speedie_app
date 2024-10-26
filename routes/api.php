<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\AdminController;
use App\Http\Controllers\Api\CustomerController;
use App\Http\Controllers\Api\DeliveryController;
use App\Http\Controllers\Api\RestaurantController;

// Passport-protected route to fetch authenticated user data
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Public routes
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// Admin routes
Route::post('/admin/login', [AdminController::class, 'login'])
    ->name('admin.login');

    // restaurant routes
Route::post('/restaurant/login', [RestaurantController::class, 'restaurantLoginApi'])
->name('restaurant.login');

// Protected restaurant routes
Route::middleware('auth:restaurant-api')->prefix('restaurant')->group(function () {
    Route::get('/dashboard', [RestaurantController::class, 'dashboard']);
    Route::get('/profile', [RestaurantController::class, 'profile']);
});


// Protected routes
Route::middleware('auth:api')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);

    // User/Customer routes
    Route::middleware('customer')->group(function () {
        Route::get('/dashboard', [CustomerController::class, 'dashboard']);
        Route::get('/profile', [CustomerController::class, 'profile']);
    });

    // Admin Routes
    Route::middleware('admin')->prefix('admin')->group(function () {
        Route::post('/logout', [AdminController::class, 'logout']);
        Route::get('/dashboard', [AdminController::class, 'dashboard']);
        Route::get('/profile', [AdminController::class, 'profile']);

        // Restaurant CRUD operations for admin
        Route::post('/restaurants/store', [RestaurantController::class, 'store']);
        Route::get('/restaurants/get', [RestaurantController::class, 'get']);
        Route::get('/restaurants/edit/{id}', [RestaurantController::class, 'edit']);
        Route::put('/restaurants/update/{id}', [RestaurantController::class, 'update']);
    });

     // restaurant owner Routes
    //  Route::middleware('restaurant')->prefix('restaurant')->group(function () {
    //     Route::get('/resDashboard', [RestaurantController::class, 'dashboard']);
    //     Route::get('/profile', [RestaurantController::class, 'profile']);
    // });

    // Delivery Boy Routes
    Route::middleware('delivery')->prefix('delivery')->group(function () {
        Route::get('/dashboard', [DeliveryController::class, 'dashboard']);
        Route::get('/profile', [DeliveryController::class, 'profile']);
    });
});
