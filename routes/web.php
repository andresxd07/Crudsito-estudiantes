<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Auth;


Auth::routes();

Route::resource('student',StudentController::class)->middleware('auth');

Route::get('/home', [StudentController::class, 'index'])->name('home');

Route::group(['middleware' =>'auth'], function () {
    Route::get('/', [StudentController::class, 'index'])->name('home');

});
