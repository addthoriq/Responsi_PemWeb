<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('welcome');
})->name('masuk');

Route::get('/daftar', function(){
    return view('daftar');
})->name('daftar');

Auth::routes();

Route::get('/beranda', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
