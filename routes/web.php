<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StripePaymentController;

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


Route::get('/login', function () {
    return view('login');
});
Route::get('/', function () {
    return view('product');
});
Route::get('/logout', function () {
    Session::forget('user');
    return redirect('/login');
});
Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::post("/login",[UserController::class,'login']);
Route::view("/register","register");
Route::post("register",[UserController::class,'register']);
Route::get("/redirect",[UserController::class,'redirect']);

Route::get("/shop",[ProductController::class,'index']);
Route::get("detail/{id}",[ProductController::class,'detail']);
// Route::get("/detail",[ProductController::class,'detail']);
Route::get("search",[ProductController::class,'search']);
Route::post("add_to_cart",[ProductController::class,'addToCart']);
// Route::get("cartlist",[ProductController::class,'cartList']);
Route::get("cartlist",[ProductController::class,'cartList']);
Route::get("removecart/{id}",[ProductController::class,'removeCart']);
Route::get("ordernow",[ProductController::class,'orderNow']);
Route::post("orderplace",[ProductController::class,'orderPlace']);
Route::get("myorder",[ProductController::class,'myOrder']);


Route::controller(StripePaymentController::class)->group(function(){
    Route::get('stripe', 'stripe');
    Route::post('stripe', 'stripePost')->name('stripe.post');
});
