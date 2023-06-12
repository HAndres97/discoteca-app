<?php

use App\Http\Controllers\DiscotecaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


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

Route::get('/',HomeController::class);
Route::controller(DiscotecaController::class)->group(function(){
    Route::get('discoteca','index');
    Route::get('carta','carta');
    Route::get('eventos','eventos');
    Route::post('formulario_pago','formulario_pago');
    Route::get('reservar','reservar');
    Route::get('fotos','fotos');
    Route::get('contacto','contacto');
    Route::post('pasarela_pago','pasarela_pago');

});