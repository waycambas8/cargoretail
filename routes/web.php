<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LinkController;


Route::get("/",[DashboardController::class,"dashboard"])->name("dashboard");

//order
Route::get("/{name}",[LinkController::class,"parent"]);

Route::get("login",function(){
    return view("modul.login.login");
})->name("login");