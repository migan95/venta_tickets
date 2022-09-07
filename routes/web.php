<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\ClasificacionController;
use App\Http\Controllers\TicketStatusController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\ClienteStatusController;
use App\Http\Controllers\ClienteTiposController;
use App\Http\Controllers\LoginController;

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


# Ruta para llegar directamente a la página de login.
Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard'); # El nombre rápido de está ruta se llama dashboard. Por lo tanto solo permite ver el dashboard si se setá autenticado.

#Si cualquier solicitud es echa al endpoint logout, terminar la sesión del usuario.
Route::match(['get', 'post'], '/logout', [LoginController::class, 'logout'])->name('logout');

#Rutas hacia las APIS de cada Modelo
Route::resource('users',UserController::class);
Route::resource('eventos',EventoController::class);
Route::resource('clasificacions',ClasificacionController::class);
Route::resource('ticketstatuses',TicketStatusController::class);
Route::resource('tickets',TicketController::class);
Route::resource('clientestatuses',ClienteStatusController::class);
Route::resource('clientetipos',ClienteTiposController::class);

require __DIR__.'/auth.php';
