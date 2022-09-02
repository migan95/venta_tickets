<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\ClasificacionController;
use App\Http\Controllers\TicketStatusController;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::resource('users',UserController::class);
Route::resource('eventos',EventoController::class);
Route::resource('clasificacions',ClasificacionController::class);
Route::resource('ticketstatuses',TicketStatusController::class);

require __DIR__.'/auth.php';
