<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\employeController;
use App\Http\Controllers\employeLoginController;
use App\Http\Controllers\employeRegisterController;








/*
|--------------------------------------------------------------------------
| employe Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('employe/dashbord/home',[employeController::class,'index'])->name('employe.dashbord.home')->middleware('auth:employe');
Route::get('employe/dashbord/login',[employeLoginController::class,'login'])->name('employe.dashbord.login');
Route::post('employe/dashbord/login',[employeLoginController::class,'check'])->name('employe.dashbord.check');
Route::get('employe/dashbord/registar',[employeRegisterController::class,'create'])->name('employe.dashbord.registar');
Route::post('employe/dashbord/registar',[employeRegisterController::class,'store'])->name('employe.dashbord.store');








