<?php

use Illuminate\Support\Facades\Route;



use App\Http\Controllers\PaysController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\TarifController;
use App\Http\Controllers\VilleController;


use App\Http\Controllers\ClientController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\Home\homeController;
use App\Http\Controllers\TypeclientController;
use App\Http\Controllers\AssociationController;
use App\Http\Controllers\ForgetPasswordManager;
use App\Http\Controllers\DestinataireController;
use App\Http\Controllers\pieceIdontiteController;
use App\Http\Controllers\employeRegisterController;
use App\Http\Controllers\AssosiationTarifeController;
use App\Http\Controllers\Lodin\LoginClientController;


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

//Home--------------------------------------------
Route::get('/',[homeController::class,'home'])->name('Home.home');

//client----------------------------------------
Route::resource('Client',ClientController::class);
// About----------------------------------------------
Route::get('/About',[AboutController::class,'About'])->name('about.about');

//Authontification------------------------------------------

Route::get('loginClient',[LoginClientController::class,'show'])->name('loginClient.show');
Route::post('loginClient/store',[LoginClientController::class,'store'])->name('loginClient.store');




Route::get('logoutClient',[LoginClientController::class,'logout'])->name('logoutClient');

//Pays---------------------------------------------------
Route::get('pays/index',[PaysController::class,'index'])->name('Pays.index');
Route::get('Pays/create',[PaysController::class,'create'])->name('Pays.create');
Route::post('Pays/store',[PaysController::class,'store'])->name('Pays.store');
//type_client
Route::get('type-client',[TypeclientController::class,'create'])->name('type_client');
Route::post('type-client/store',[TypeclientController::class,'store'])->name('typeClient.store');

//type_piece_identite-------------------------------------------
Route::get('piece-identite',[pieceIdontiteController::class,'create'])->name('pieceEdontite.create');
Route::post('piece-identite',[pieceIdontiteController::class,'store'])->name('pieceEdontite.store');


//association_type_clients----------
Route::get('assosiation-client',[AssociationController::class,'create'])->name('assosiation-client.create');
Route::post('assosiation-client/store',[AssociationController::class,'store'])->name('assosiation-client.store');


//Destinataire-------------------------------------------
Route::resource('Destenataire',DestinataireController::class);
//Commande---------------------------------------------
Route::resource('Commande',CommandeController::class);
//Ville-------------------------------------------
Route::get('ville/index',[VilleController::class,'create'])->name('ville.index');
Route::post('ville/store',[VilleController::class,'store'])->name('ville.store');

Route::get('employe/dashbord/registar',[employeRegisterController::class,'create'])->name('employe.dashbord.registar');



//forget password--------------------------------------
Route::get('forget-password', [ForgetPasswordManager::class,'forgetPassword'])->name('forget.Password');
Route::post('forget-password', [ForgetPasswordManager::class,'forgetPasswordPost'])->name('forget.password.post');

Route::get('reset-password/{token}', [ForgetPasswordManager::class,'resetPassword'])->name('reset.password');

Route::post('reset-password', [ForgetPasswordManager::class,'resetPasswordPost'])->name('reset.password.post');


//----------------------------------------------------------------------------------
Route::get('tarife',[TarifController::class,'create'])->name('tarife.create');
Route::post('tarife',[TarifController::class,'store'])->name('tarife.store');

//----------------------------------------------------------------------------------
Route::get('Assosiation-tarif/index',[AssosiationTarifeController::class,'index'])->name('assosiation-tarif.index');
Route::get('Assosiation-tarif',[AssosiationTarifeController::class,'create'])->name('assosiation-tarif.create');
Route::post('Assosiation-tarif',[AssosiationTarifeController::class,'store'])->name('assosiation-tarif.store');


Route::get('Assosiation-tarif/{assosiationTarif}/edit',[AssosiationTarifeController::class,'edit'])->name('assosiation-tarif.edit');
Route::put('Assosiation-tarif/{assosiationTarif}/update',[AssosiationTarifeController::class,'update'])->name('assosiation-tarif.update');
//---------------------------------------------------------------------------------

Route::get('contact',[contactController::class,'index'])->name('contact.index');



















