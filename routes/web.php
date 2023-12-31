<?php

use App\Http\Controllers\CartController;
use App\Models\cliente;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProducController;
use App\Http\Controllers\VistaClienteController;

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


Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->middleware('auth');



/* Routes technical */
Route::get('/create/tecnico', [\App\Http\Controllers\TechnicalController::class, 'createTechnical'])->name('createTechnical')->middleware('auth'); // Ruta para formulario de Registro
Route::post('/tecnico/createTechnical', [\App\Http\Controllers\TechnicalController::class, 'saveTechnical'])->name('saveTechnical')->middleware('auth'); // Ruta para guardar el formulario
Route::get('/read/tecnico', [\App\Http\Controllers\TechnicalController::class, 'index'])->name('index')->middleware('auth'); // Ruta para la vista de técnico
Route::delete('/eliminar/{id}', [\App\Http\Controllers\TechnicalController::class,'destroy'])->name('destroy')->middleware('auth'); //Ruta para eliminar un usuario tecnico

/* Routes product */
Route::resource('/producs', ProducController::class)->middleware('auth');;


/* Routes ordenes */
Route::resource('/servicios', \App\Http\Controllers\ServicioController::class)->middleware('auth'); // Ruta para la vista de ordenes
Route::get('/asignar/{id}', [\App\Http\Controllers\ServicioController::class, 'asignar']) ->name('asignar')->middleware('auth');;
Route::post('/asignartecnico/{servicio}', [\App\Http\Controllers\ServicioController::class, 'asignartecnico'])->name('asignartecnico')->middleware('auth');;
//---------------FINALIZAN LAS RUTAS DEL ADMINISTRADOR--------------------

//RUTA DEL CLIENTE
Route::get('/home3', [\App\Http\Controllers\HomeController::class, 'index'])->name('home3')->middleware('auth'); // Ruta para la vista de cliente
Route::get('/catalogo',[\App\Http\Controllers\Catalogo::class, 'index'])->name('catalogo')->middleware('auth');// vista para el catalogo del cliente
Route::resource('/clientes', \App\Http\Controllers\ClienteController::class)->middleware('auth');

//RUTA PARA CARRITO
Route::get('/shop', [CartController::class, 'shop'])->name('shop');
Route::get('/cart', [CartController::class, 'cart'])->name('cart.index');
Route::post('/add', [CartController::class, 'add'])->name('cart.store');
Route::post('/update', [CartController::class, 'update'])->name('cart.update');
Route::post('/remove', [CartController::class, 'remove'])->name('cart.remove');
Route::post('/clear', [CartController::class, 'clear'])->name('cart.clear');
Route::get('/checkout', [CartController::class,
    'checkout'])->name('checkout');
Route::post('/ventas', [CartController::class, 'storeVenta'])->name('ventas.store');


// RUTA PARA EL INFORME
Route::get('/informe', [\App\Http\Controllers\ClienteController::class, 'venta'])->name('informe')->middleware('auth');
Route::delete('/ventas/{id}', [\App\Http\Controllers\ClienteController::class, 'destroyVenta'])->name('ventas.destroy')->middleware('auth');
Route::get('/ventas/search', [\App\Http\Controllers\ClienteController::class, 'search'])->name('ventas.search');


//RUTA PARA EL TECNICO
Route::get('/home2', [\App\Http\Controllers\OrdenController::class, 'index'])->name('home2')->middleware('auth');; // Ruta para la vista de cliente

//RUTA PARA ESTADO DE CONFIRMACION DE SOLICITUDES
Route::post('/estado/{id}', [\App\Http\Controllers\EstadoController::class, 'toggle'])->name('toggle')->middleware('auth');
