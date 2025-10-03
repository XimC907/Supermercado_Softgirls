<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\FacturasController;
use App\Http\Controllers\DetallesController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/clientes', [ClientesController::class, 'index'])->middleware(['auth', 'verified'])->name('clientes');
//Route::get('/categorias', [CategoriasController::class, 'categorias'])->middleware(['auth', 'verified'])->name('categorias');

Route::get('/categorias', [CategoryController::class, 'index'])->middleware(['auth', 'verified'])->name('categorias');
Route::get('/categorias/registro', [CategoryController::class, 'form_registro'])->middleware(['auth', 'verified'])->name('form_reg_categoria');
Route::post('/categorias/registro', [CategoryController::class, 'registrar'])->middleware(['auth', 'verified'])->name('registro_categoria');
Route::get('/categorias/edicion/{id}', [CategoryController::class, 'form_edicion'])->middleware(['auth', 'verified'])->name('form_edc_cat');
Route::post('/categorias/edicion/{id}', [CategoryController::class, 'actualizar'])->middleware(['auth', 'verified'])->name('actualiza_categoria');
Route::get('/categorias/eliminacion/{id}', [CategoryController::class, 'eliminar'])->middleware(['auth', 'verified'])->name('elimina_categoria');

//Route::get('/productos', [ProductosController::class, 'productos'])->middleware(['auth', 'verified'])->name('productos');
Route::get('/productos', [ProductController::class, 'index'])->middleware(['auth', 'verified'])->name('productos');
Route::get('/facturas', [FacturasController::class, 'facturas'])->middleware(['auth', 'verified'])->name('facturas');
Route::get('/detalles', [DetallesController::class, 'detalles'])->middleware(['auth', 'verified'])->name('detalles');
/*Route::get('/listadouno', [CategoriasController::class, 'listarUno'])->middleware(['auth', 'verified'])->name('detalles');
Route::get('/listadodos', [CategoriasController::class, 'listarCondicion'])->middleware(['auth', 'verified'])->name('detalles');*/
Route::get('/listadoUno', [ClientesController::class, 'firstCustomer'])->middleware(['auth', 'verified'])->name('clientes');
Route::get('/listadodireccion', [ClientesController::class, 'address'])->middleware(['auth', 'verified'])->name('clientes');
Route::get('/listadogenero', [ClientesController::class, 'gender'])->middleware(['auth', 'verified'])->name('clientes');



require __DIR__.'/auth.php';
