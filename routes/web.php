<?php

use App\Http\Controllers\EditController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

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

Route::get('/', [EditController::class, 'index'])->name('inicio.index');
Route::get('/añadir', [RegisterController::class, 'index'])->name('añadir.index');
Route::post('/', [RegisterController::class, 'store'])->name('añadir.store');
Route::get('/opciones/{user}/edit', [EditController::class, 'edit'])->name('añadir.edit');
Route::put('/{user}', [EditController::class, 'update'])->name('inicio.update');
