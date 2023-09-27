<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/* Routes technical */
Route::get('/create/tecnico', [\App\Http\Controllers\TechnicalController::class, 'createTechnical'])->name('createTechnical');//Ruta para formulario de Registro
Route::post('/tecnico/createTechnical', [\App\Http\Controllers\TechnicalController::class, 'saveTechnical'])->name('saveTechnical');//Ruta para guardar el formulario
Route::get('read/tecnico',  [\App\Http\Controllers\TechnicalController::class, 'index'])->name('index');//Ruta para la vista de tecnico


/* Routes product */
Route::get('create/product', [\App\Http\Controllers\ProductosController::class, 'createProduct'])->name('createProduct'); // Ruta para formulario de producto
Route::get('productos/read',  [\App\Http\Controllers\ProductosController::class, 'index'])->name('index');//Ruta para la vista de productos


/* Routes ordenes */
Route::get('read/ordenes',  [\App\Http\Controllers\OrdenController::class, 'index'])->name('index');//Ruta para la vista de ordenes
