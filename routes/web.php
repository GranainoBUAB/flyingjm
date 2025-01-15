<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlaneController;

/* Route::get('/', function () {
    return view('welcome');
}); */

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/planes', [PlaneController::class, 'index'])->name('planeHome');
