<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Prak 1 & 2
// Route::get('/', [PageController::class, 'index']);
// Route::get('/about', [PageController::class, 'about']);
// Route::get('/articles/{id}', [PageController::class, 'articles']);
// ----------------------------------------------------------------------
// Route::get('/', [AboutController::class, 'index']);
// Route::get('/about', [AboutController::class, 'about']);
// Route::get('/articles/{id}', [AboutController::class, 'articles']);

//Prak 3
//No. 1
Route::get('/', function () {
     return view('Selamat Datang di Halaman Awal Website !!!');
});

//No. 2
Route::prefix('category')->group(function () {
    Route::get('/marbel-edu-games', function () {
        echo "Marbel Edu Games";
    });
    Route::get('/marbel-and-friend-kids-games', function () {
        echo "Marbel and Friend kids Games";
    });
    Route::get('/riri-story-books', function () {
        echo "Riri Story Books";
    });
    Route::get('/kolak-kids-songs', function () {
        echo "Kolak Kids Songs";
    });
});