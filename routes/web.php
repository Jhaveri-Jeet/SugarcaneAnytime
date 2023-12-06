<?php

use App\Http\Controllers\feedbackController;
use App\Http\Controllers\orderController;
use App\Http\Controllers\productController;
use App\Http\Controllers\roleController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->group(function () {

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
