<?php

use App\Http\Controllers\Auth\SocialAuthController;
use App\Http\Controllers\InformeController;
use App\Http\Controllers\InicioController;
use App\Models\Informe;
use App\Models\Persona;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Stripe\Checkout\Session;
use Stripe\Stripe;

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
})->name("home");
Route::get('/revolucionsolar', function () {
    return view('revolucionsolar');
});

Route::get('/revolucionlunar', function () {
    return view('revolucionlunar');
});

Route::post('informeciudad', [InformeController::class, 'selecionarCiudadDeInforme']);
Route::post('generarinforme', [InformeController::class, 'generarInforme']);

Route::get('/informe{primordial}', [InformeController::class, 'selecionarAquinVaDirigidofunction'])->name("informe");


Route::get('/previstadeinforme/{informe}', [InformeController::class, 'verinforme'])->name("previstadeinforme");


Route::get('/verinforme/{id}', [InformeController::class, 'verinforme']);

Route::resource('/inicio', InicioController::class)->middleware('auth');

Route::post("checkout", [InformeController::class, 'checkoutInforme'])->name("checkout");

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('auth/{provider}', [SocialAuthController::class, 'redirectToProvider'])->name('social.auth');
Route::get('auth/{provider}/callback',  [SocialAuthController::class, 'handleProviderCallback']);

require __DIR__ . '/auth.php';
