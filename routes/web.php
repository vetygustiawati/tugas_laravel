<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/layout', function () {
    return view("admin.layout");
});
Route::get('/about', function () {
    return view("about");
});
Route::get('/profil', function () {
    return view("profil");
});
Route::get('/product', function () {
    return view("product");
});
Route::get('/kategori', function () {
    return view("kategori");
});
Route::get('/login', function () {
    return view("login");
});
Route::get('/admin', function () {
    return view("admin.admin");
});
Route::get('/about2', function () {
    return view("about2");
});
Route::get('/profil2', function () {
    return view("profil2");
});
Route::get('/product2', function () {
    return view("product2");
});
Route::get('/kategori2', function () {
    return view("kategori2");
});
Route::get('/login2', function () {
    return view("login2");
});
Route::get('/pelanggan', function () {
    return view("pelanggan");
});
Route::get('/supplier', function () {
    return view("supplier");
});