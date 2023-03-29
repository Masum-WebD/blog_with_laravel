<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Models\Blogs;
use App\Models\BlogTags;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::middleware(["auth"])->group(function(){
    Route::get('/dashboard', function (){
        return view('dashboard',[
            'title' => 'Dashboard'
        ]);
    });
});

Route::middleware(["web"])->group(function(){
    Route::get('/', [HomeController::class,'home']);
    Route::get('/login', [AuthController::class,'loginView'])->name("login");

});

