<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BuyerController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\CategoryConroller;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleAndPermissionController;


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

Route::group(['middleware' => ['permission:buy items']], function () { 
    Route::controller(BuyerController::class)->group(function(){
    Route::get('/buyer','profile')->name('buyer.profile');
});
 });

Route::group(['middleware' => ['permission:add items']], function () { 
    Route::controller(SellerController::class)->group(function(){
        Route::get('/seller','profile')->name('seller.profile');
    });
});

Route::controller(RoleAndPermissionController::class)->group(function(){
    Route::get('/role/create','create')->name('role.create');
});