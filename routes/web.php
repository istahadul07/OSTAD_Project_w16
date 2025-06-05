<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home',[HomeController::class,'homepage']);
Route::get('/registraion',[UserController::class,'registrationpage']);
Route::get('/resetpage',[UserController::class,'resetpage']);
Route::get('/sendpage',[UserController::class,'sendpage']);
Route::get('/verifypage',[UserController::class,'verifypage']);
Route::get('/category',[DashboardController::class,'categorypage']);
Route::get('/customer',[DashboardController::class,'customerpage']);
Route::get('/invoice',[DashboardController::class,'invoicepage']);
Route::get('/profile',[DashboardController::class,'profilepage']);
Route::get('/product',[DashboardController::class,'productpage']);
Route::get('/report',[DashboardController::class,'reportpage']);
Route::get('/sale',[DashboardController::class,'salepage']);