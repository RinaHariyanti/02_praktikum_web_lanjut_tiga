<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProductController;
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

//Route::get ('/', [HomeController::class. 'home']);
Route::get('/', function () {
    echo "Halaman Home";
});

Route::prefix('category')->group(function(){
        Route::get('/marbel-edu-games', [ProductController::class, 'category1']);
        Route::get('/marbel-and-friends-kid-games', [ProductsController::class, 'category2']);
        Route::get('/riri-story-books', [ProductsController::class, 'category3']);
        Route::get('/kolak-kids-songs', [ProductsController::class, 'category4']);
});

Route::get('/news/{id}', [NewsController::class, 'news']);

Route::prefix('program')->group(function(){
    Route::get('/karir', [ProgramController::class, 'program1']);
    Route::get('/magang', [ProgramController::class, 'program2']);
    Route::get('/kunjungan-industri', [ProgramController::class, 'program3']);
});

Route::get('/about', [AboutUsController::class, 'about']);

Route::resource('contact-us', ContactUsController::class);


