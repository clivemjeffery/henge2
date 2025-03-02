<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PupilController;
use App\Livewire\PupilSearch;
use App\Livewire\ShowPupil;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Trad style controller route
Route::get('/pupils', [PupilController::class, 'index']);

// Livewire Routes
Route::get('/pupils/{user}', ShowPupil::class);

// this route is redundant, a legacy of the search component buildup
Route::get('/pupilSearch', PupilSearch::class);


// Login routes for Microsoft
Route::group(['middleware' => ['web', 'guest']], function(){
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::get('msconnect', [AuthController::class, 'connect'])->name('msconnect');
});

Route::group(['middleware' => ['web', 'MsGraphAuthenticated'], 'prefix' => 'app'], function(){
    Route::view('/', 'welcome')->name('app');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});