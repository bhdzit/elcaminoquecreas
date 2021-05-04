<?php

use App\Http\Controllers\Auth\SocialAuthController;
use App\Http\Controllers\InicioController;
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

Route::get('primordialciudad',function(){
return view('primordialciudad');
});
Route::get('/previstadeinforme', function () {
    return view('previstadeinforme');
});


Route::get('/informe', function () {
    return view('informe');
});

Route::resource('/inicio', InicioController::class)->middleware('auth');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('auth/{provider}', [SocialAuthController::class, 'redirectToProvider'])->name('social.auth');
Route::get('auth/{provider}/callback',  [SocialAuthController::class, 'handleProviderCallback']);

require __DIR__ . '/auth.php';
