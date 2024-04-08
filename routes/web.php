<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
Route::get('/index',[UserController::class,'index']);
Route::get('/',[UserController::class,'index']);
Route::get('/about',[UserController::class,'about']);
Route::get('/contact',[UserController::class,'contact']);
Route::get('/products',[UserController::class,'products']);
Route::get('/single_product',[UserController::class,'single_product']);
Route::get('/add_product',[UserController::class,'add_product']);
Route::get('/cart',[UserController::class,'cart']);
Route::post('/add_product_data',[UserController::class,'add_product_data']);
Route::post('/updateqty',[UserController::class,'updateqty']);
Route::post('/remove',[UserController::class,'remove']);
Route::post('/order',[UserController::class,'order']);
Route::post('/addToCart',[UserController::class,'addToCart']);
