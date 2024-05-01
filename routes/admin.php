<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\AdminRegisterController;







/*
|--------------------------------------------------------------------------
| admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('admin/dashbord/home',[AdminController::class,'index'])->name('admin.dashbord.home')->middleware('auth:admin');
Route::get('admin/dashbord/login',[AdminLoginController::class,'login'])->name('admin.dashbord.login');
Route::post('admin/dashbord/login',[AdminLoginController::class,'check'])->name('admin.dashbord.check');
Route::get('admin/dashbord/registar',[AdminRegisterController::class,'registar'])->name('admin.dashbord.registar');
Route::post('admin/dashbord/registar',[AdminRegisterController::class,'store'])->name('admin.dashbord.store');
// Route::get('admin/dashbord/logout',[AdminLoginController::class,'logout'])->name('admin.dashbord.logout');


















