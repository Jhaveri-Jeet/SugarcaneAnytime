<?php

use App\Http\Controllers\feedbackController;
use App\Http\Controllers\heroSectionController;
use App\Http\Controllers\orderController;
use App\Http\Controllers\productController;
use App\Http\Controllers\roleController;
use App\Http\Controllers\shopController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AdminAuth;
use App\Http\Middleware\UserAuth;

// Website Routes
Route::get('/', [heroSectionController::class, 'showHeroSection']);
Route::get('/aboutUs', [heroSectionController::class, 'showHeroSection']);
Route::get('/services', [heroSectionController::class, 'showHeroSection']);
Route::get('/contactUs', [heroSectionController::class, 'showHeroSection']);
Route::get('/shop', [shopController::class, 'index']);
Route::view('/cart', 'cart')->middleware(UserAuth::class);
Route::view('/login', 'login');
Route::post('/checkUser', [userController::class, 'checkUser']);
Route::view('/register', 'register');
Route::post('/users/insert', [userController::class, 'userInsert']);
Route::get('/userLogout', [userController::class, 'logout']);

// Login Routes
Route::get('admin/login', [userController::class, 'loginPage']);
Route::post('admin/checkUser', [userController::class, 'checkAdmin']);
Route::get('admin/logout', [userController::class, 'logout']);

// Admin Routes
Route::prefix('admin')->middleware(AdminAuth::class)->group(function () {

    // Main Admin Routes
    Route::view('/', 'admin.index');
    Route::view('/main', 'admin.index');

    // Products Routes
    Route::get('/products', [productController::class, 'index']);
    Route::get('/products/addProduct', [productController::class, 'addProductPage']);
    Route::post('/products/insert', [productController::class, 'insert']);
    Route::get('/products/delete/{id}', [productController::class, 'delete']);
    Route::get('/products/editProduct/{id}', [productController::class, 'editProductPage']);
    Route::put('/products/update/{id}', [productController::class, 'update']);

    // Orders Routes
    Route::get('/orders', [orderController::class, 'index']);
    Route::get('/orders/completeOrder/{id}', [orderController::class, 'completeOrder']);
    Route::get('/orders/notAvailable/{id}', [orderController::class, 'notAvailable']);

    // Roles Routes
    Route::post('/roles/insert', [roleController::class, 'insert']);

    // Users Routes
    Route::get('/users', [userController::class, 'index']);
    Route::post('/users/insert', [userController::class, 'insert']);
    Route::put('/users/update/{id}', [userController::class, 'update']);
    Route::get('/users/delete/{id}', [userController::class, 'delete']);

    // Feedback Routes
    Route::get('/feedback', [feedbackController::class, 'index']);
    Route::post('/feedback/insert', [feedbackController::class, 'insert']);
    Route::get('/feedback/delete/{id}', [feedbackController::class, 'delete']);
});
