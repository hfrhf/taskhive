<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;

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


Route::get("/",function(){
    return view("home");

})->name("home")->middleware("auth");





Route::resource("task",TaskController::class)->middleware("auth");
Route::resource("user",UserController::class)->middleware("auth");

Route::delete("/destroy/{task}",[TaskController::class,"destroyTask"])->name("task.destroyTask")->middleware("auth");
Route::get("/login",[LoginController::class,"index"])->name("login.index")->middleware("guest");
Route::post("/login",[LoginController::class,"login"])->name("login.login")->middleware("guest");
Route::get("/logout",[LoginController::class,"logout"])->name("login.logout")->middleware("auth");






