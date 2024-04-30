<?php

use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedoresController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


//Productos
Route::get('/productos',[ProductoController::class,'ver'])->name('productos.ver');
Route::get('/productos/crear',[ProductoController::class,'crear'])->name('productos.crear');
Route::post('/productos/guardar',[ProductoController::class,'guardar'])->name('productos.guardar');

//Empleados
Route::get('/empleados',[EmpleadoController::class,'ver'])->name('empleado.ver');
Route::get('/empleados/crear',[EmpleadoController::class,'crear'])->name('empleado.crear');
Route::post('/empleados/guardar',[EmpleadoController::class,'guardar'])->name('empleado.guardar');

//Proveedores
Route::get('/proveedores',[ProveedoresController::class,'ver'])->name('proveedor.ver');
Route::get('/proveedores/crear',[ProveedoresController::class,'crear'])->name('proveedor.crear');
Route::post('/proveedores/guardar',[ProveedoresController::class,'guardar'])->name('proveedor.guardar');