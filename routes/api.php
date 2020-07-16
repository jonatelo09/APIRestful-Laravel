<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
/**
* Buyers
*/
Route::resource('buyers', 'Buyer\BuyerController', ['only' => ['index','show']]);

/**
* Buyers
*/
Route::resource('categories', 'Category\CategoryController', ['except' => ['create','edit']]);

/**
* Buyers
*/
Route::resource('products', 'Product\ProductController', ['only' => ['index','show']]);

/**
* Buyers
*/
Route::resource('transaction', 'Transaction\TransactionController', ['only' => ['index','show']]);

/**
* Buyers
*/
Route::resource('sellers', 'Seller\SellerController', ['only' => ['index','show']]);

/**
* Buyers
*/
Route::resource('users', 'User\UserController', ['except' => ['create','edit']]);