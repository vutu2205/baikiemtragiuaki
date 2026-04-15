<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClassRoomController;

// TRANG CHỦ
Route::get('/', function () {
    return redirect('/login');
});

// AUTH
Route::get('/login',[AuthController::class,'loginForm']);
Route::post('/login',[AuthController::class,'login']);

Route::get('/register',[AuthController::class,'registerForm']);
Route::post('/register',[AuthController::class,'register']);

Route::get('/dashboard',[AuthController::class,'dashboard']);
Route::get('/logout',[AuthController::class,'logout']);

// CLASS
Route::get('/classes',[ClassRoomController::class,'index']);
Route::get('/classes/create',[ClassRoomController::class,'create']);
Route::post('/classes/store',[ClassRoomController::class,'store']);

Route::get('/classes/edit/{id}',[ClassRoomController::class,'edit']);
Route::post('/classes/update/{id}',[ClassRoomController::class,'update']);

Route::get('/classes/delete/{id}',[ClassRoomController::class,'delete']);