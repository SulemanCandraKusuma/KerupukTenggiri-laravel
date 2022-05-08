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

Route::get('/home', function () {
    return view('home',[
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('aboutUS',[
        "title" => "About"
    ]);
});

Route::get('/produk', function () {
    return view('produk',[
        "title" => "Produk"
    ]);
});

Route::get('/dashboard', function () {
    return view('maindashboard',[
        "title" => "Dashboard"
    ]);
});

Route::get('/editHP', function () {
    return view('editHP/editHPdashboard',[
        "title" => "Edit Homepage"
    ]);
});

Route::get('/login', function () {
    return view('indexlogin',[
        "title" => "Login"
    ]);
});
