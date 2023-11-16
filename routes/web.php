<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('Register', function () {
    return view('frontend.Register');
});

Route::get('login', function () {
    return view('frontend.login');
});

Route::get('dashbor', function () {
    return view('frontend.dashbor');
});

Route::get('rental', function () {
    return view('frontend.rental');
});

Route::get('promo', function () {
    return view('frontend.promo');
});

Route::get('perlengkapan', function () {
    return view('frontend.perlengkapan');
});

Route::get('transaksi', function () {
    return view('frontend.transaksi');
});