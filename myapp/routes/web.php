<?php

use App\Http\Controllers\ClientsController;
use App\Http\Controllers\ProduitsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::controller(ClientsController::class)->group(function(){
    Route::get('/','index')->name('Layout.index');
    Route::get('/contact','contact')->name('Layout.contact');
    Route::get('/docs','docs')->name('Layout.docs');
    Route::get('/dashboard','dashboard')->name('Layout.dashboard')->middleware('isAdmin');
    Route::get('/calendar','calendar')->name('Layout.calendar')->middleware('isAdmin');
    Route::get('/blank','blank')->name('Layout.blank')->middleware('isAdmin');
    Route::get('/tables','tables')->name('Layout.tables')->middleware('isAdmin');
    Route::get('/forms','forms')->name('Layout.forms')->middleware('isAdmin');
    Route::get('/tabs','tabs')->name('Layout.tabs')->middleware('isAdmin');
    Route::get('/collections','collections')->name('Layout.collections');
});

Route::controller(ProduitsController::class)->group(function(){
    Route::get('/produits', 'index')->name('Produits.index')->middleware('auth');
    Route::get('/produits/delete/{id}', 'delete')->name('Produits.delete')->middleware('auth');
    Route::get('/produits/edit/{id}', 'edit')->name('Produits.edit')->middleware('auth');
    Route::put('/produits/update/{id}', 'update')->name('Produits.update')->middleware('auth');
    Route::get('/produits/ajouter', 'ajouter')->name('Produits.ajouter')->middleware('auth');
    Route::post('/produits/store', 'store')->name('Produits.store')->middleware('auth');
});

Route::controller(UserController::class)->group(function(){
    Route::get('/users','index')->name('Users.index')->middleware('isAdmin');
    Route::get('/users/add','add')->name('Users.add')->middleware('isAdmin');
    Route::post('/store','store')->name('Users.store')->middleware('isAdmin');
    Route::get('/edit/{id}','edit')->name('Users.edit')->middleware('isAdmin');
    Route::post('/update/{id}','update')->name('Users.update')->middleware('isAdmin');
    Route::get('/delete/{id}','delete')->name('Users.delete')->middleware('isAdmin');
    Route::get('/login','showLoginForm')->name('login');
    Route::post('/login','login')->name('Users.login');

    Route::get('/users/deconnecter','deconnecter')->name('Users.deconnecter')->middleware('auth');
    Route::get('/users/{id}','profile')->name('Users.profile')->middleware('auth');
});

