<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
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
});

Route::get('about', function () {
    return view("about");
});
Route::get('profil', function () {
    return view("profil");
});
Route::get('product', function () {
    return view("product");
});
Route::get('kategori', function () {
    return view("kategori");
});
Route::get('login', function () {
    return view("login");
});

Route::get('about2', [HomeController::class, 'showAbout']);
Route::get('profil2', [HomeController::class, 'showProfil']);
Route::get('product2', [HomeController::class, 'showProduct']);
Route::get('kategori2', [HomeController::class, 'showKategori']);
Route::get('login2', [AuthController::class, 'showLogin']);
Route::get('pelanggan', [HomeController::class, 'showPelanggan']);
Route::get('supplier', [HomeController::class, 'showSupplier']);

