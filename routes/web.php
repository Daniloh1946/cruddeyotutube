<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
 Route::get('libro/pdf', [App\Http\Controllers\LibroController::class, 'pdf'])->name('libro.pdf');
Route::resource('libros',App\Http\Controllers\LibroController::class)->middleware('auth') ;
Route::resource('categorias',App\Http\Controllers\CategoriaController::class)-> middleware('auth');

// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('inicio');
