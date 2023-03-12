<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HobiController;
use App\Http\Controllers\KeluargaController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/', [DashboardController::class, 'welcome']);
Route::get('/prak2', [DashboardController::class, 'welcome']);
Route::get('/profile', [DashboardController::class, 'profile']);
Route::get('/experience', [DashboardController::class, 'experience']);


// Auth::routes();
Route::get('/kendaraan', [KendaraanController::class, 'index']);
Route::get('/hobi', [HobiController::class, 'index']);
Route::get('/keluarga', [KeluargaController::class, 'index']);

