<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HobiController;
use App\Http\Controllers\KeluargaController;
use App\Http\Controllers\MatkulController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', [DashboardController::class, 'welcome']);
// Route::get('/prak2', [DashboardController::class, 'welcome']);
// Route::get('/profile', [DashboardController::class, 'profile']);
// Route::get('/experience', [DashboardController::class, 'experience']);

// Route::get('/kendaraan', [KendaraanController::class, 'index']);
// Route::get('/hobi', [HobiController::class, 'index']);
// Route::get('/keluarga', [KeluargaController::class, 'index']);
// Route::get('/matkul', [MatkulController::class, 'index']);


Auth::routes();

Route::get('/logout', [LoginController::class, 'logout']);

Route::middleware(['auth'])->group(function(){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/', [DashboardController::class, 'welcome']);
    Route::get('/prak2', [DashboardController::class, 'welcome']);
    Route::get('/profile', [DashboardController::class, 'profile']);
    Route::get('/experience', [DashboardController::class, 'experience']);

    Route::get('/kendaraan', [KendaraanController::class, 'index']);
    Route::get('/hobi', [HobiController::class, 'index']);
    Route::get('/keluarga', [KeluargaController::class, 'index']);
    Route::get('/matkul', [MatkulController::class, 'index']);
    Route::resource('/mahasiswa', MahasiswaController::class)->parameter('mahasiswa','id');
    Route::get('/mahasiswa/{id}/nilai', [MahasiswaController::class, 'show']);
    Route::get('/mahasiswa/{id}/pdfNilai', [MahasiswaController::class ,'cetak_pdf']);
    Route::put('/mahasiswa/{id}', [MahasiswaController::class ,'update'])->name('mahasiswa.update');

    
    Route::get('/prodi', [ProdiController::class, 'index']);
    
    Route::resource('/articles', ArticleController::class);

    Route::get('/article/cetak_pdf' ,[ArticleControler::class ,'cetak_pdf']);
    
});
