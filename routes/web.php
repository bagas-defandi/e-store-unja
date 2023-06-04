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

Route::view('/login', 'login');
Route::view('/home', 'home');
Route::view('/about', 'about');
Route::view('/profile', 'profile');
Route::view('/keranjang', 'keranjang');
Route::view('/checkout', 'checkout');
Route::view('/daftar-produk', 'daftar-produk');
Route::view('/detail-produk', 'detail-produk');
Route::view('/ulasan', 'ulasan');

Route::view('/penjual/login', 'penjual.login');
Route::view('/penjual/buat-akun', 'penjual.buat-akun');
Route::view('/penjual/dashboard', 'penjual.dashboard');
Route::view('/penjual/data-pembelian', 'penjual.data-pembelian');
Route::view('/penjual/kelola-produk', 'penjual.kelola-produk');
Route::view('/penjual/proses-pesanan', 'penjual.proses-pesanan');
