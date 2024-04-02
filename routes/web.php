<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\CategoryConroller;
use App\Http\Controllers\ProfileController;


Route::get('/', function () {
    return view('welcome');
});

Route::controller(ProfileController::class)->group(function(){
    Route::get('/profile','index')->name('profile.index');
    Route::get('/profile/create','create')->name('profile.create');
    Route::post('/profile/saveprofile','saveProfile')->name('profile.saveprofile');
});

Route::controller(UserController::class)->group(function(){
    Route::get('/register','register')->name('user.register');
    Route::post('/register/store','createUser')->name('user.store');
    Route::get('/login','login')->name('user.login');
    Route::post('/login/auth','authenticate')->name('user.auth');
});