<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;

//No. 1
Route::get('/', [HomeController::class, 'home']);

//No. 2 (Daftar Product)
Route::prefix('category')->group(function () {
    Route::get('/marbel-edu-games', function () {
        echo "Laman Marbel Edu Games";
    });
    Route::get('/marbel-and-friend-kids-games', function () {
        echo "Laman Marbel and Friend kids Games";
    });
    Route::get('/riri-story-books', function () {
        echo "Laman Riri Story Books";
    });
    Route::get('/kolak-kids-songs', function () {
        echo "Laman Kolak Kids Songs";
    });
});

//No. 3 (Daftar Berita)
Route::get('/news/{page?}', function ($page = null) {
    if($page== ''){
        echo "Ini adalah halaman News";
    }
    else{
        echo "Ini adalah laman Educa Studio berbagi untuk warga sekitar terdampak covid 19";
    }
});

//No. 4 (Daftar Program)
Route::prefix('program')->group(function () {
    Route::get('/karir', function () {
        echo "Ini adalah laman karir";
    });
    Route::get('/magang', function () {
        echo "Ini adalah laman magang";
    });
    Route::get('/kunjungan-industri', function () {
        echo "Ini adalah laman kunjungan industri";
    });
});

// No. 5 (About Us)
Route::get('/about-us', function () {
    echo "Selamat Datang di Laman About Us";
});

// No. 6 (Contact Us)
Route::resource('contact-us', ContactController::class)->only([
'show'
]);