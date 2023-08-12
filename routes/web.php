<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\BooksDetailController;

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

Route::get('/', function () {
    return view('home');
});

Auth::routes();

//ini benar
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/books', [BooksController::class, 'index'])->name('books');

Route::get('/detail/{id}', [BooksDetailController::class, 'index']);

Route::get('/contact', [ContactController::class, 'index']);

Route::get('/about', [AboutController::class, 'index']);

Route::get('/profile', [ProfileController::class, 'index']);

Route::post('/profile', [ProfileController::class, 'update']);

Route::get('/cart', [CartController::class, 'index']);

Route::get('/confirm-checkout', [CartController::class, 'confirm']);

Route::get('/cart', [CartController::class, 'checkout']);

Route::post('cart/{id}', [CartController::class, 'cart']);

Route::delete('/cart/{id}', [CartController::class, 'delete']);

Route::get('/checkout', [CheckoutController::class, 'index']);

Route::get('/checkout/{id}', [CheckoutController::class, 'detail']);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
