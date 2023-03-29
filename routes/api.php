<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post("/login",[AuthController::class, "login"])->middleware("guest");
Route::get("/logout",[AuthController::class, "logout"])->middleware("auth");
Route::middleware(["auth:sanctum"])->group(function () {
    Route::get("/dashboard/users/index", [UsersController::class, "index"]);
   
});
