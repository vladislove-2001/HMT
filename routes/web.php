<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', function () {
    return view('home');
});

Route::get('/contacts', function () {
    return view('contacts');
});

Route::get('/categories', function () {
    return view('categories');
});

Route::get('/geohomes', function () {
    return view('geohomes');
});

Route::get('/wegs', function () {
    return view('wegs');
});

Route::get('/mawegs', function () {
    return view('mawegs');
});

Route::get('/energystore', function () {
    return view('energystore');
});

Route::get('/franchising', function () {
    return view('franchising');
});


Route::get('/product', function () {
    return view('product');
});
Route::get('/cart', function () {
    return view('cart');
});
Route::get('/checkout', function () {
    return view('checkout');
});
//Route::get('/cart', function () {
//    return view('cart');
//});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

