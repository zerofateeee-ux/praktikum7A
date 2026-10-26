<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(LandingController::class)->name('landing.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/shop', 'shop')->name('shop');
    Route::get('/shop-detail', 'shopDetail')->name('shop-detail');
    Route::get('/cart', 'cart')->name('cart');
    Route::get('/checkout', 'checkout')->name('checkout');
    Route::get('/contact', 'contact')->name('contact');
});

Route::prefix('admin')->controller(AdminController::class)->name('admin.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/calendar', 'calendar')->name('calendar');
    Route::get('/login', 'login')->name('login');
    Route::get('/modals', 'modals')->name('modals');
    Route::get('/form-elements', 'formElements')->name('form-elements');
    Route::get('/datatable', 'datatable')->name('datatable');
});