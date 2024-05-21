<?php

use App\Http\Controllers\ClientsController;
use App\Http\Controllers\ProduitsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/',[ClientsController::class,'index'])->name('Layout.index');
Route::get('/contact',[ClientsController::class,'contact'])->name('Layout.contact');
Route::get('/docs',[ClientsController::class,'docs'])->name('Layout.docs');


Route::get('/produits',[ProduitsController::class,'index'])->name('Produits.index');
Route::get('/produits/delete/{id}',[ProduitsController::class,'delete'])->name('Produits.delete');
Route::get('/produits/edit/{id}',[ProduitsController::class,'edit'])->name('Produits.edit');
Route::post('/produits/update/{id}',[ProduitsController::class,'update'])->name('Produits.update');
Route::get('/produits/ajouter',[ProduitsController::class,'ajouter'])->name('Produits.ajouter');
Route::post('/produits/store',[ProduitsController::class,'store'])->name('Produits.store');


Route::get('/users',[UserController::class,'index'])->name('Users.index');
Route::get('/users/add',[UserController::class,'add'])->name('Users.add')->middleware('auth');
Route::post('/store',[UserController::class,'store'])->name('Users.store')->middleware('auth');
Route::get('/edit/{id}',[UserController::class,'edit'])->name('Users.edit')->middleware('auth');
Route::post('/update/{id}',[UserController::class,'update'])->name('Users.update')->middleware('auth');
Route::get('/delete/{id}',[UserController::class,'delete'])->name('Users.delete')->middleware('auth');
Route::get('/users/connecter',[UserController::class,'connecter'])->name('Users.connecter');
Route::post('/users/login',[UserController::class,'login'])->name('Users.login');
Route::get('/users/deconnecter',[UserController::class,'deconnecter'])->name('Users.deconnecter');
