<?php

use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');

});
Route::get('profesores', [TeacherController::class,"inicio"]);
Route::post('profesores', [TeacherController::class,"store"])->name("profesores.store");
Route::get('profesores/index', [TeacherController::class, 'index'])->name('profesores.index');
Route::get('profesores/{id}', [TeacherController::class, 'show'])->name('profesores.show');
Route::put('profesores/{id}', [TeacherController::class, 'update'])->name('profesores.update');
Route::delete('profesores/{id}', [TeacherController::class, 'destroy'])->name('profesores.destroy');
Route::get('profesores/{id}/edit', [TeacherController::class, 'edit'])->name('profesores.edit');
