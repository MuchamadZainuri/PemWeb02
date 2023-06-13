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

Route::get(
    '/user',
    [UserController::class, 'index']
);

Route::get(
    '/user/daftar',
    [UserController::class, 'daftar']
);

Route::post(
    '/user/store',
    [UserController::class, 'store']
)->name('user/store');


Route::get('/form', function () {
    return view('Tugas/form');
});

Route::post(
    '/form/proses',
    [UserController::class, 'proses']
)->name('form/proses');


use App\Http\Controllers\TokoController;

Route::prefix('toko')->group(function () {

    Route::get(
        '/',
        [TokoController::class, 'index']
    );
    Route::get(
        '/detail',
        [TokoController::class, 'detail']
    );

    
    Route::group(['middleware' => ['auth']], function(){

        Route::get(
            '/product',
            [TokoController::class, 'product']
        )->name('product.admin');

        Route::get(
            'create',
            [TokoController::class, 'create']
        )->name('product.create');

        Route::get(
            '/admin',
            [TokoController::class, 'admin']
        );

        Route::post(
            '/',
            [TokoController::class, 'store']
        )->name('product.store');

        Route::get(
            '/{product}/edit',
            [TokoController::class, 'edit']
        )->name('product.edit');

        Route::delete(
            '/{product}',
            [TokoController::class, 'destroy']
        )->name('product.destroy');

        Route::put(
            '/{product}',
            [TokoController::class, 'update']
        )->name('product.update');

        Route::get(
            '/customer',
            [TokoController::class, 'customer']
        )->name('customer.admin');

        Route::get(
            'createc',
            [TokoController::class, 'createc']
        )->name('customer.create');

        Route::post(
            '/c',
            [TokoController::class, 'storec']
        )->name('customer.store');

        Route::get(
            '/{customer}/editc',
            [TokoController::class, 'editc']
        )->name('customer.edit');

        Route::delete(
            '/{customer}/c',
            [TokoController::class, 'destroyc']
        )->name('customer.destroy');

        Route::put(
            '/{customer}/c',
            [TokoController::class, 'updatec']
        )->name('customer.update');
    });


    Route::get(
        '/about',
        [TokoController::class, 'about']
    );
    
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
