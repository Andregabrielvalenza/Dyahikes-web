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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [App\Http\Controllers\WebController::class, 'index'])->name('home');
Route::get('/destinos', [App\Http\Controllers\WebController::class, 'destinos'])->name('destinos');
Route::get('/tours', [App\Http\Controllers\WebController::class, 'tours'])->name('tours');
Route::get('/gracias-customizar', [App\Http\Controllers\WebController::class, 'graciasCustomizar'])->name('gracias-customizar');
Route::get('/about-us', [App\Http\Controllers\WebController::class, 'aboutus'])->name('about-us');
Route::get('/contacto', [App\Http\Controllers\WebController::class, 'contacto'])->name('contacto');
Route::get('/terms-conditions', [App\Http\Controllers\WebController::class, 'termsConditions'])->name('terms-conditions');
Route::get('/gracias-reservar', [App\Http\Controllers\WebController::class, 'graciasReservar'])->name('gracias-reservar');
Route::get('/gracias-comprar', [App\Http\Controllers\WebController::class, 'graciasComprar'])->name('gracias-comprar');
Route::get('/completar-reserva', [App\Http\Controllers\WebController::class, 'completarReserva'])->name('completar-reserva');
Route::get('/nuestros-tours', [App\Http\Controllers\WebController::class, 'nuestrosTours'])->name('nuestros-tours');
Route::get('/customize', [App\Http\Controllers\WebController::class, 'Customize'])->name('customize');
Route::get('/detalle-tours', [App\Http\Controllers\WebController::class, 'detalleTours'])->name('detalle-tours');

Route::get('generate-pdf', [App\Http\Controllers\WebController::class, 'generatePDF']);
