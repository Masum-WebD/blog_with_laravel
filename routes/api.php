<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post("/login",[AuthController::class, "login"])->middleware("guest");
Route::get("/logout",[AuthController::class, "logout"])->middleware("auth");
