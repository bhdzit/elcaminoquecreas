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
    return view('home');
});
Route::get('/revolucionsolar', function () {
    return view('revolucionsolar');

});

Route::get('/revolucionlunar', function () {
    return view('revolucionlunar');
});

Route::get('/primordial', function () {
    return view('primordial');
});

Route::get('/previstadeinforme', function () {
    return view('previstadeinforme');
});


Route::get('/informe', function () {
    return view('informe');
});


Route::get('/inicio', function () {
    return view('inicio');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
