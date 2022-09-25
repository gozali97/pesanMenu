<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\NoMejaController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\UserController;
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
})->middleware('auth');
//home


//Kategori
Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori')->middleware('auth');
Route::post('/kategori/store', [KategoriController::class, 'store'])->name('store')->middleware('auth');
Route::get('/showkategori/{id}', [KategoriController::class, 'show'])->name('show')->middleware('auth');
Route::post('/kategori/update/{id}', [KategoriController::class, 'update'])->name('update')->middleware('auth');
Route::get('/kategori/delete/{id}', [KategoriController::class, 'destroy'])->name('delete')->middleware('auth');


//no meja
Route::get('/nomeja', [NoMejaController::class, 'index'])->name('nomeja')->middleware('auth');
Route::post('/nomeja/insert', [NoMejaController::class, 'insert'])->name('insert')->middleware('auth');
Route::get('/shownomeja/{id}', [NoMejaController::class, 'show'])->name('show')->middleware('auth');
Route::post('/nomeja/update/{id}', [NoMejaController::class, 'update'])->name('update')->middleware('auth');
Route::get('/nomeja/delete/{id}', [NoMejaController::class, 'destroy'])->name('delete')->middleware('auth');

//produk
Route::get('/produk', [ProdukController::class, 'index'])->name('produk')->middleware('auth');
Route::post('/produk/store', [ProdukController::class, 'store'])->name('store')->middleware('auth');
Route::get('/produk/showproduk/{id}', [ProdukController::class, 'show'])->name('show')->middleware('auth');
Route::post('/produk/update/{id}', [ProdukController::class, 'update'])->name('update')->middleware('auth');
Route::get('/produk/delete/{id}', [ProdukController::class, 'destroy'])->name('delete')->middleware('auth');

//Transaksi
Route::get('/transaksi', [TransaksiController::class, 'index'])->name('Transaksi')->middleware('auth');
Route::post('/transaksi/store', [TransaksiController::class, 'store'])->name('store')->middleware('auth');
Route::get('/transaksi/showproduk/{id}', [TransaksiController::class, 'show'])->name('show')->middleware('auth');
Route::post('/transaksi/update/{id}', [TransaksiController::class, 'update'])->name('update')->middleware('auth');
Route::get('/transaksi/delete/{id}', [TransaksiController::class, 'destroy'])->name('delete')->middleware('auth');

Route::get('/transaksi/bayar/{id}', [TransaksiController::class, 'bayar'])->name('bayar')->middleware('bayar');
Route::get('/transaksi/proses/{id}', [TransaksiController::class, 'proses'])->name('proses')->middleware('auth');

//exportPDf
Route::get('/transaksi/pdf', [TransaksiController::class, 'pdf'])->name('pdf')->middleware('auth');

//User
Route::get('/user', [UserController::class, 'index'])->name('user');
Route::post('/user/store', [UserController::class, 'store'])->name('store');
Route::get('/user/showproduk/{id}', [UserController::class, 'show'])->name('show');
Route::post('/user/update/{id}', [UserController::class, 'update'])->name('update');
Route::get('/user/delete/{id}', [UserController::class, 'destroy'])->name('delete');

//User login
Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard')->middleware('auth');
Route::get('/user/login', [UserController::class, 'login'])->name('login');
Route::post('/user/loginUser', [UserController::class, 'loginUser'])->name('loginUser');
Route::get('/user/register', [UserController::class, 'register'])->name('register');
Route::post('/user/registerStore', [UserController::class, 'registerStore'])->name('registerStore');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');


//pesan user
Route::get('/menu', [PesanController::class, 'index'])->name('menu');
Route::get('/tambah/{id}', [PesanController::class, 'tambah'])->name('tambah')->where('id', '[0-9]+');
Route::get('/hapus/{id}', [PesanController::class, 'hapus'])->name('hapus')->where('id', '[0-9]+');
Route::get('/cart', [PesanController::class, 'cart'])->name('cart');
Route::post('/transaksi', [PesanController::class, 'transaksi'])->name('transaksi');
Route::post('/cash', [PesanController::class, 'cash'])->name('cash');
Route::post('/bayar/{id}', [PesanController::class, 'bayar'])->name('bayar');
Route::get('/nota/{id}', [PesanController::class, 'nota'])->name('nota');

Route::post('/plus', [PesanController::class, 'plus']);
Route::post('/minus', [PesanController::class, 'minus']);


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
