<?php

use Illuminate\Support\Facades\Route;
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