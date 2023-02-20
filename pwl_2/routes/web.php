<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

// Praktikum 1
// Route::get('/', function () {
//     return "selamat datanggggg";
// });
// Route::get('/about', function () {
//     return "2141720258 & Dimas Putra Anhar";
// });
// Route::get('/articles/{id}', function ($id) {
//     return "articles untuk : $id";
// });


// Praktikum 2
// Route::get('/', [HomeController::class,'index']);
// Route::get('/about', [AboutController::class,'about']);
// Route::get('/articles/{id}', [ActicleController::class,'articles']);


// Praktikum 3
Route::view('/welcome', 'home');

Route::prefix('kategori')->group(function () {
    Route::get('/', function () {
        return 'List Link Kategori : ' .
            '<br><a href="https://www.educastudio.com/category/marbel-edu-games">https://www.educastudio.com/category/marbel-edu-games</a>' .
            '<br><a href="https://www.educastudio.com/category/marbel-and-friends-kids-games">https://www.educastudio.com/category/marbel-and-friends-kids-games</a>' .
            '<br><a href="https://www.educastudio.com/category/riri-story-books">https://www.educastudio.com/category/riri-story-books</a>' .
            '<br><a href="https://www.educastudio.com/category/kolak-kids-songs">https://www.educastudio.com/category/kolak-kids-songs</a>';
    });
    Route::get('/marbel-edu-games', function () {
        return '<a href="https://www.educastudio.com/category/marbel-edu-games">https://www.educastudio.com/category/marbel-edu-games</a>';
    });
    Route::get('/marbel-and-friends-kids-games', function () {
        return '<a href="https://www.educastudio.com/category/marbel-and-friends-kids-games">https://www.educastudio.com/category/marbel-and-friends-kids-games</a>';
    });
    Route::get('/riri-story-books', function () {
        return '<a href="https://www.educastudio.com/category/riri-story-books">https://www.educastudio.com/category/riri-story-books</a>';
    });
    Route::get('/kolak-kids-songs', function () {
        return '<a href="https://www.educastudio.com/category/kolak-kids-songs">https://www.educastudio.com/category/kolak-kids-songs</a>';
    });
});

Route::get('/articles/{id}', function ($id) {
    return '<a href="https://www.educastudio.com/news/educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19">https://www.educastudio.com/news/educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19</a>';
});

Route::prefix('program')->group(function () {
    Route::get('/', function () {
        return 'List Link Program : ' .
            '<br><a href="https://www.educastudio.com/program/karir">https://www.educastudio.com/program/karir</a>' .
            '<br><a href="https://www.educastudio.com/program/magang">https://www.educastudio.com/program/magang</a>' .
            '<br><a href="https://www.educastudio.com/program/kunjungan-industri">https://www.educastudio.com/program/kunjungan-industri</a>';
    });
    Route::get('/karir', function () {
        return '<a href="https://www.educastudio.com/program/karir">https://www.educastudio.com/program/karir</a>';
    });
    Route::get('/magang', function () {
        return '<a href="https://www.educastudio.com/program/magang">https://www.educastudio.com/program/magang</a>';
    });
    Route::get('/kunjungan-industri', function () {
        return '<a href="https://www.educastudio.com/program/kunjungan-industri">https://www.educastudio.com/program/kunjungan-industri</a>';
    });
});

Route::get('/about-us', function () {
    return '<a href=""></a>';
});

Route::get('/contact', [ContactController::class,'index']);

