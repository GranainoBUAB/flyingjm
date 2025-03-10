<?php

use App\Http\Middleware\IsAdmin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlaneController;

/* Route::get('/', function () {
    return view('welcome');
}); */

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/planes', [PlaneController::class, 'index'])->name('planeHome');
Route::delete('/planes/{id}', [PlaneController::class, 'destroy'])->name('planedelete')->middleware(IsAdmin::class, 'auth');
Route::post('/planes', [PlaneController::class, 'store'])->name('planestore')->middleware(IsAdmin::class, 'auth');
Route::put('/planes/{id}', [PlaneController::class, 'update'])->name('planeupdate')->middleware(IsAdmin::class, 'auth');


Route::get('/errorblade', function () {
    return view('errorBlade');
})->name('errorBlade');
