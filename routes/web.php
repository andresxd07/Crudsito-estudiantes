<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use Illuminate\Support\Facades\Auth;


Auth::routes();

Route::resource('students',StudentController::class)->middleware('auth');
Route::get('/home', [StudentController::class, 'index'])->name('home');
Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');

Route::delete('/students/delete/{id}', [StudentController::class, 'delete'])->name('students.delete');

Route::group(['middleware' =>'auth'], function () {
Route::get('/', [StudentController::class, 'index'])->name('index');

Route::resource('subjects',SubjectController::class)->middleware('auth');
Route::get('/home', [SubjectController::class, 'index'])->name('home');
Route::get('/subjects/create', [SubjectController::class, 'create'])->name('subjects.create');

Route::delete('/subjects/delete/{id}', [SubjectController::class, 'delete'])->name('subjects.delete');
Route::get('/', [SubjectController::class, 'index'])->name('index');


});
