<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;


Route::get("/",[DashboardController::class,"dashboard"])->name("dashboard");

Route::get("login",function(){
    return view("modul.login.login");
})->name("login");