<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('default_welcome');
});


Route::get('/home', [HomeController::class,'index']);

Route::prefix('products')->group(function() {
    Route::get('/', [ProductsController::class,'index']);
    Route::get('/category/food-beverage', [ProductsController::class,'foodBeverage']);
    Route::get('/category/beauty-health', [ProductsController::class,'beautyHealth']);
    Route::get('/category/home-care', [ProductsController::class,'homeCare']);
    Route::get('/category/baby-kid', [ProductsController::class,'babyKid']); 
});

Route::prefix('user')->group(function() {
    Route::get('/', [UserController::class,'index']);
    Route::get('/{user}', [UserController::class,'index']);
    Route::get('/{user}/{id}', [UserController::class,'index']);
});

Route::get('/penjualan', [PenjualanController::class,'index']);