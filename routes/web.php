<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BeritaController;
use Illuminate\Routing\Route as RoutingRoute;

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

Route::get('/home', function () {
    return view('Home');
});

Route::get('/about', function () {
    return view('About');
});

Route::get('/berita', [BeritaController::class, 'index']);
Route::get('/berita/{detil_berita:slug}', [BeritaController::class, 'show']);

Route::get('/login',[LoginController::class,'index'])->name('login')->middleware('guest');
Route::get('/register',[RegisterController::class, 'index'])->middleware('guest');