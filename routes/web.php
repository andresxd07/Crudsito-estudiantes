<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Auth;


Auth::routes();

Route::resource('students',StudentController::class)->middleware('auth');

Route::get('/home', [StudentController::class, 'index'])->name('home');

Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');
Route::delete('/students/delete/{id}', [StudentController::class, 'delete'])->name('students.delete');

Route::group(['middleware' =>'auth'], function () {
Route::get('/', [StudentController::class, 'index'])->name('index');

});
