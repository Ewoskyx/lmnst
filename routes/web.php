<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Public Routes
Route::controller(AuthController::class)->group(function(){
    Route::get('login','login')->name('login');
    Route::post('login','userLogin')->name('login');
    Route::get('logout','logout')->name('logout');
});

// Protected Routes
Route::group(['middleware'=>'auth'],function() {
    Route::get('/',[HomeController::class,"index"])->name('home');

    // Route::controller(TurbeController::class)->group(function () {
    //     Route::group(['prefix' => 'turbeler'], function() {
    //         Route::get('', 'list')->name('panel.turbe_list');
    //         Route::get('form/{unique?}', 'form')->name('panel.turbe_form');
    //         Route::post('form/{unique?}', 'save')->name('panel.turbe_save');
    //         Route::delete('delete', 'delete')->name('panel.turbe_delete');
    //     });
    });
