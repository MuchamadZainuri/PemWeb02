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

Route::get('/hello/{nama}/{alamat}', function ($nama, $alamat) {
    return "<h2> Hello $nama dari $alamat </h2>";
});

Route::get('/produk{id}', function ($id) {
    return view('produk/index', ['id' => $id]);
});

use App\Http\Controllers\UserController;

Route::get('/user', 
    [UserController::class, 'index']);

Route::get('/user/daftar', 
    [UserController::class, 'daftar']);

Route::post('/user/store', 
    [UserController::class, 'store'])-> name('user/store');


Route::get('/form', function () {
    return view('Tugas/form');
});

Route::post('/form/proses',
    [UserController::class, 'proses'])->name('form/proses');


use App\Http\Controllers\TokoController;

Route::prefix('toko') -> group(function(){

    Route::get(
        '/',
        [TokoController::class, 'index']
    );
    Route::get(
        '/detail',
        [TokoController::class, 'detail']
    );
    Route::get(
        '/about',
        [TokoController::class, 'about']
    );
    Route::get(
        '/admin',
        [TokoController::class, 'admin']
    );
    Route::get(
        '/produk',
        [TokoController::class, 'produk']
    );
    Route::get(
        '/pelanggan',
        [TokoController::class, 'pelanggan']
    );
});