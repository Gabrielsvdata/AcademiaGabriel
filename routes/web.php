<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;

Route::get('/', [ClienteController::class, 'home'])->name('cliente.home');
Route::resource('clientes', ClienteController::class);