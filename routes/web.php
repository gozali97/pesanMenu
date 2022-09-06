<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\NoMejaController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\ProdukController;
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

//Kategori
Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori');
Route::post('/store', [KategoriController::class, 'store'])->name('store');
Route::get('/showkategori/{id}', [KategoriController::class, 'show'])->name('show');
Route::post('/update/{id}', [KategoriController::class, 'update'])->name('update');
Route::get('/delete/{id}', [KategoriController::class, 'destroy'])->name('delete');


//no meja
Route::get('/nomeja', [NoMejaController::class, 'index'])->name('nomeja');
Route::post('/insert', [NoMejaController::class, 'insert'])->name('insert');
Route::get('/shownomeja/{id}', [NoMejaController::class, 'show'])->name('show');
Route::post('/update/{id}', [NoMejaController::class, 'update'])->name('update');
Route::get('/delete/{id}', [NoMejaController::class, 'destroy'])->name('delete');

//produk
Route::get('/produk', [ProdukController::class, 'index'])->name('produk');
Route::post('/store', [ProdukController::class, 'store'])->name('store');
Route::get('/showproduk/{id}', [ProdukController::class, 'show'])->name('show');
Route::post('/update/{id}', [ProdukController::class, 'update'])->name('update');
Route::get('/delete/{id}', [ProdukController::class, 'destroy'])->name('delete');


//pesan user
Route::get('/menu', [PesanController::class, 'index'])->name('menu');
Route::get('/tambah/{id}', [PesanController::class, 'tambah'])->name('tambah')->where('id', '[0-9]+');
Route::get('/hapus/{id}', [PesanController::class, 'hapus'])->name('hapus')->where('id', '[0-9]+');
Route::get('/cart', [PesanController::class, 'cart'])->name('cart');


//qrcode
Route::get('/qrcode', function () {

    // \QrCode::size(500)
    //     ->format('png')
    //     ->generate('ItSolutionStuff.com', public_path('images/qrcode.png'));

    return view('user.qrcode');
});

Route::get('/pesanmeja/{qrcode}', function () {
    return view('user.menu');
});

Route::get('/scan', [NoMejaController::class, 'scan'])->name('scan');
Route::get('/print', [NoMejaController::class, 'print'])->name('print');
