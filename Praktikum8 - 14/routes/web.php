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
Route::get('/form', function () {
    return view('P8/Tugas/form');
});
Route::get('/hello/{nama}/alamat', function ($nama, $alamat) {
    return "<h2> Hello $nama dari $alamat </h2>";
});

Route::get('/produk{id}', function ($id) {
    return view('P9/produk/produk', ['id' => $id]);
});

use App\Http\Controllers\UserController;

Route::get('/user', 
    [UserController::class, 'index']);

Route::get('/user/daftar', 
    [UserController::class, 'daftar']);

Route::post('/user/store', 
    [UserController::class, 'store'])-> name('user/store');
