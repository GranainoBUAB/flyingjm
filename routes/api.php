<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PlaneController;
use App\Http\Controllers\AuthController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/planes',[PlaneController::class,'index'])->name('apiplaneshome');
Route::delete('/planes/{id}',[PlaneController::class,'destroy'])->name('apiplanesdestroy');
Route::post('/planes', [PlaneController::class, 'store'])->name('apiplanesstore');
Route::put('/planes/{id}',[PlaneController::class,'update'])->name('apiplanesupdate');

