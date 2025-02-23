<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Models\Client;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('welcome');
});


// Client

Route::get('/client/create', [ClientController::class, 'create'])->middleware('auth');
Route::post('/client', [ClientController::class, 'store'])->middleware('auth');

// Register

Route::get('/register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');

// Login

Route::get('login', [SessionController::class, 'create'])->middleware('guest')->name('login');
Route::post('login', [SessionController::class, 'store'])->middleware('guest');

// Session

Route::get('/account', [SessionController::class, 'show'])->middleware('auth');
Route::post('/logout', [SessionController::class, 'logout'])->middleware('auth');

Route::get('/account/{id}/edit', [SessionController::class, 'edit'])->middleware('auth');
Route::patch('/account/{id}', [SessionController::class,'update'])->middleware('auth');