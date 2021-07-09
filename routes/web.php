<?php

use App\Http\Controllers\aboutController;
use App\Http\Controllers\shopsController;
use App\Http\Controllers\dashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\indexController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Route::get('/home', ['uses'=>'indexController@index']);
Route::get('/home', [indexController::class, 'index']);
Route::get('/login', [UserController::class, 'log']);
Route::post('/login', [UserController::class, 'loginVerify'])->name('loginVerify');
Route::get('/dashboard', [dashboardController::class, 'dash']);
Route::get('/about', [aboutController::class, 'about']);
Route::get('/shop', [shopsController::class, 'shop']);
Route::get('/register', [UserController::class, 'reg']);
// Route :: post ('/register', [UserController::class, 'verify']);
Route::post('/register', [UserController::class, 'store'])->name('store');
Route::get('/contact', [contactController::class, 'contact']);

Route::post('/contact', [contactController::class, 'message'])->name('message2');
Route::post('/dashboard', [shopsController::class, 'review'])->name('review');
Route::post('/cont', [shopsController::class, 'refand'])->name('refand');
Route::get('/campaigns', [ShopsController::class, 'camp']);
Route::get('/cart', [ShopsController::class, 'cart']);
Route::get('/checkout', [ShopsController::class, 'check']);
Route::get('/product', [productController::class, 'products']);
//product list..
 Route::get('/dashboard', [dashboardController::class, 'productslist'])->name('productlist');
Route::get('/product_details/{id}', [productController::class, 'productdet'])->name('product_details');

Route::get("add_to_cart/{id}/{title}/{price}",[CartController::class, 'add'])->name("add_to_cart");
Route::get('/cart_item_delete/{id}', [CartController::class, 'cart_item_delete'])->name("cart_item_delete");
// Route::get('/checkout', function () {
//     return view('checkout');
// });
