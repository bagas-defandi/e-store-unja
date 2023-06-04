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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::redirect('/', '/login');

Route::view('/login', 'login');
Route::view('/home', 'home');
Route::post('/home',  function () {
    return redirect('/home');
});

Route::view('/about', 'about');
Route::view('/profile', 'profile');
Route::view('/keranjang', 'keranjang');
Route::view('/checkout', 'checkout');
Route::view('/daftar-produk', 'daftar-produk');
Route::view('/detail-produk', 'detail-produk');
Route::view('/ulasan', 'ulasan');

Route::view('/penjual/login', 'penjual.login');
Route::post('/penjual/login', function () {
    return redirect('/penjual/login');
});

Route::view('/penjual/buat-akun', 'penjual.buat-akun');

Route::view('/penjual/dashboard', 'penjual.dashboard');
Route::post('/penjual/dashboard', function () {
    return redirect('/penjual/dashboard');
});

Route::view('/penjual/data-pembelian', 'penjual.data-pembelian');
Route::view('/penjual/kelola-produk', 'penjual.kelola-produk');
Route::view('/penjual/proses-pesanan', 'penjual.proses-pesanan');
