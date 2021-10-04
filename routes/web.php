<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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
    return view('home',[
        "title" => "Home",
        'active' => "home",
    ]);
});
Route::get('/tentang-kami', function () {
    return view('about',[
        "title" => "Tentang Kami",
        'active' => "tentang-kami",
    ]);
});
Route::get('/semua-produk', function () {
    return view('AllProduct',[
        "title" => "produk",
        'active' => "produk",
    ]);
});
Route::get('/produk', function () {
    return view('product',[
        "title" => "produk",
        'active' => "produk",
    ]);
});
Route::get('/login', [LoginController::class, 'index']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);