<?php

use Illuminate\Support\Facades\Route;
use APP\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');


});
Route::post("users",[UserController::class,'testRequest']);
Route::view("login",'user');
