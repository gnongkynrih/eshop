<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\CategoryConroller;


Route::get('/', function () {
    return view('welcome');
});

Route::controller(CategoryConroller::class)->group(function(){
    Route::get('/category/create','create')->name('category.create');
    Route::get('/category','index')->name('category.index');
    Route::post('/category/store','store')->name('category.store');
});

Route::controller(ColorController::class)->group(function(){
    Route::get('/color/create','add')->name('color.create');
    Route::get('/color','index')->name('color.index');
    Route::post('/color','insert')->name('color.insert');
});