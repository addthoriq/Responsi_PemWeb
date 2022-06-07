<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
// Auth Controller
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AuthMaba\LoginController as MabaLoginController;
// Admin Controller
use App\Http\Controllers\Admin\HomeController as AdminController;
// Maba Controller
use App\Http\Controllers\HomeController;
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

Route::get('/', [MabaLoginController::class, 'showLoginForm'])->name('masuk');

Route::get('/daftar', function(){
    return view('daftar');
})->name('daftar')->middleware('auth');

Auth::routes();
Route::get('/logout', [LoginController::class, 'logout']);
Route::post('mabalogin', [MabaLoginController::class, 'login'])->name('maba-login');
Route::get('/mabalogout', [MabaLoginController::class, 'logout'])->name('maba-logout');

// Memblokir akses ke /login (Admin)
Route::match(["GET"], "/login", function () {
    return redirect("/");
})->name("login");
// Memblokir akses ke /register (Admin)
Route::match(["GET", "POST"], "/register", function () {
    return redirect("/");
})->name("register");

// Admin Area
Route::prefix('admin')->group(function(){
    Route::get('/', [AdminController::class, 'index'])->name('admin.home');
});
Route::get('/admin-login', [LoginController::class, 'showLoginForm'])->middleware('guest:maba[')->name('admin.login');

// Maba Area
Route::middleware('guest')->group(function (){
});
Route::get('/beranda', [HomeController::class, 'index'])->name('home');
