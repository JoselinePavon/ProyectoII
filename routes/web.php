<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProducController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
})->middleware('auth');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

/* Routes technical */
Route::get('/create/tecnico', [\App\Http\Controllers\TechnicalController::class, 'createTechnical'])->name('createTechnical')->middleware('auth'); // Ruta para formulario de Registro
Route::post('/tecnico/createTechnical', [\App\Http\Controllers\TechnicalController::class, 'saveTechnical'])->name('saveTechnical')->middleware('auth'); // Ruta para guardar el formulario
Route::get('/read/tecnico', [\App\Http\Controllers\TechnicalController::class, 'index'])->name('index')->middleware('auth'); // Ruta para la vista de técnico

/* Routes product */
Route::resource('/producs', ProducController::class);
Route::get('/create/product', [\App\Http\Controllers\ProductosController::class, 'createProduct'])->name('createProduct')->middleware('auth'); // Ruta para formulario de producto
Route::get('/productos/read', [\App\Http\Controllers\ProductosController::class, 'index'])->name('productos.index')->middleware('auth'); // Ruta para la vista de productos
Route::post('/productos/create/product', [\App\Http\Controllers\ProductosController::class, 'save'])->name('save')->middleware('auth');//Ruta para guardar el formulario

/* Routes ordenes */
Route::get('/read/ordenes', [\App\Http\Controllers\OrdenController::class, 'index'])->name('ordenes.index'); // Ruta para la vista de ordenes
