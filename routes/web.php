<?php

use App\Http\Controllers\GuestController;
use App\Http\Controllers\GuestListController;
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

Route::get('/', [GuestController::class, 'index']);
Route::post('add', [GuestController::class, 'store'])->name('add_guest');
Route::delete('delete/{id}', [GuestController::class, 'destroy']);
Route::get('guest', [GuestListController::class, 'index']);
