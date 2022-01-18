<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\PdfController;
use App\http\Controllers\DiarioController;

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
    return view('auth.login');
});

Route::resource('articulos','App\Http\Controllers\ArticuloController');
Route::resource('ingresos','App\Http\Controllers\IngresoController');
Route::resource('egresos','App\Http\Controllers\EgresoController');
Route::resource('creditos','App\Http\Controllers\CreditoController');
Route::resource('debitos','App\Http\Controllers\DebitoController');
Route::resource('inventarios','App\Http\Controllers\InventarioController');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
