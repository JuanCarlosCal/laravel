<?php

use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\InstructorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('alumnos', AlumnoController::class);
Route::resource('instructors', InstructorController::class);