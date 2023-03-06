<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\Prak1Controller;
use App\Http\Controllers\Prak2Controller;
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

Route::get('/', [HomeController::class, 'index']);

Route::get('/home', [Prak1Controller::class, 'home']);
Route::get('/about', [Prak1Controller::class, 'about']);
Route::get('/news', [Prak1Controller::class, 'news']);
Route::prefix('program')->group(function () {
    Route::get('/', function () {
        return view('content/program');
    });
});
Route::prefix('product')->group(function () {
    Route::get('/', function () {
        return view('content/shop');
    });
    Route::get('/product-1', function () {
        return view('content/product');
    });
});
Route::get('/contact', [Prak1Controller::class, 'contact']);

Route::get('/prak2', [Prak2Controller::class, 'welcome']);
Route::get('/profile', [Prak2Controller::class, 'profile']);
Route::get('/experience', [Prak2Controller::class, 'experience']);


// Auth::routes();
Route::get('/kendaraan', [KendaraanController::class, 'index']);

