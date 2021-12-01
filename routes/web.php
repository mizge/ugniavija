<?php

use App\Http\Controllers\FilmController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SeansesController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\TicketsController;
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

Route::get('/',[SeansesController::class, 'view']);

// function () {
//     return view('seanses');
// });
Route::get('register',[RegisterController::class, 'create']);
Route::post('register',[RegisterController::class, 'store']);
Route::get('login', [SessionsController::class, 'create']);
Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');
Route::post('sessions', [SessionsController::class, 'store']);
Route::get('/show/tickets', [TicketsController::class, 'show'])->middleware('user');
Route::get('delete/tickets/{id}', [TicketsController::class, 'showDelete'])->middleware('user');
Route::post('delete/tickets/{id}', [TicketsController::class, 'deleteTicket'])->middleware('user');
Route::get('buy/tickets/{id}', [TicketsController::class, 'showBuy'])->middleware('user');
Route::post('buy/tickets/{id}', [TicketsController::class, 'storeBuy'])->middleware('user');
Route::get('create/seanse', [SeansesController::class, 'create'])->middleware('admin');
Route::post('create/seanse', [SeansesController::class, 'store'])->middleware('admin', 'auth');
Route::get('create/film', [FilmController::class, 'get'])->middleware('director');
Route::post('create/film', [FilmController::class, 'store'])->middleware('director');
Route::get('show/films', [FilmController::class, 'show'])->middleware('director');
