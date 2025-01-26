<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => ['web', 'guest']], function(){
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::get('msconnect', [AuthController::class, 'connect'])->name('msconnect');
});

Route::group(['middleware' => ['web', 'MsGraphAuthenticated'], 'prefix' => 'app'], function(){
    Route::view('/', 'welcome')->name('app');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});