<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::group(['prefix'=>'users'], function(){
    Route::get('/',                               [UserController::class, 'index']);
    Route::any('/show',                         [UserController::class, 'show']);


});
