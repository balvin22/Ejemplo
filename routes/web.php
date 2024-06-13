<?php

use App\Http\Controllers\BookController;
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
Route::get('libro', [BookController::class,"inicio"]);
Route::post('libro', [BookController::class,"store"])->name("libros.store");
Route::get('libro/index', [BookController::class, 'index'])->name('libros.index');
Route::get('libro/{id}', [BookController::class, 'show'])->name('libros.show');
Route::put('libro/{id}', [BookController::class, 'update'])->name('libros.update');
Route::delete('libro/{id}', [BookController::class, 'destroy'])->name('libros.destroy');
Route::get('libro/{id}/edit', [BookController::class, 'edit'])->name('libros.edit');
