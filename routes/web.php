<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LangController;
use App\Http\Controllers\UserController;
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
    Route::get('chart',[ChartController::class,"index"])->name('chart');
    Route::get('lang',[LangController::class,"lang"])->name('lang');
    Route::controller(UserController::class)->group(function () {
        Route::get('users', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('edit/{id}', 'edit')->name('edit');
        Route::patch('update/{id}', 'update')->name('update');
        Route::delete('delete/{id}', 'destroy')->name('delete');
    });

});
