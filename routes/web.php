<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\ClasificacionController;
use App\Http\Controllers\TicketStatusController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\PosicionController;
use App\Http\Controllers\CarritoController;
use App\Http\Controllers\LogoutController;
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
Route::get('/',[EventoController::class,'index'])->name('dashboard')->middleware('auth');

Route::group(['middleware'=>['auth','verified']],function (){

    Route::get ('/evento_crud', [EventoController::class,'index_crud'])->name('indexEventosCrud')->middleware('role:1');
    Route::resource('users',UserController::class);
    Route::resource('eventos',EventoController::class);
    Route::resource('clasificacions',ClasificacionController::class)->middleware('role:1');
    Route::resource('ticketstatuses',TicketStatusController::class)->middleware('role:1');
    Route::resource('tickets',TicketController::class);
    Route::resource('posiciones',PosicionController::class)->middleware('role:1');
    Route::resource('ticketposiciones',PosicionController::class)->middleware('role:1');
    Route::resource('carritos',CarritoController::class);
    #Logout
    Route::get('/logout', [LogoutController::class,'perform'])->name('logout.perform');
});
require __DIR__.'/auth.php';
