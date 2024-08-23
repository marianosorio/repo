<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\empleadoController;
use App\Http\Controllers\productoController;
use App\Http\Controllers\proveedoresController;

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

//Empleados
Route::get('/inicioEmpleados', 
       [empleadoController::class, 'mostrarInicio'])->name('empleados.inicio');

Route::get('/mostrarEmpleados', 
       [empleadoController::class, 'inicioEmpleado'])->name('empleados.mostrar');
        

Route::get('/agregarEmpleados', 
       [empleadoController::class, 'agregarEmpleados'])->name('empleados.agregar');

Route::post('/empleados/guardar', 
       [TiposAsientosController::class, 'guardarEmpleados'])->name('empleados.guardar');

//Productos
Route::get('/inicioProductos', 
       [productoController::class, 'mostrarInicio'])->name('productos.inicio');

Route::get('/mostrarProductos', 
       [productoController::class, 'inicioProductos'])->name('productos.mostrar');
        

Route::get('/agregarProductos', 
       [productoController::class, 'agregarProductos'])->name('productos.agregar');

Route::post('/productos/guardar', 
       [productoController::class, 'guardarProductos'])->name('productos.guardar');

//Proveedores
Route::get('/inicioProveedores', 
       [proveedoresController::class, 'mostrarInicio'])->name('proveedores.inicio');

Route::get('/mostrarProveedores', 
       [proveedoresController::class, 'inicioProveedores'])->name('proveedores.mostrar');
        

Route::get('/agregarProveedores', 
       [proveedoresController::class, 'agregarProveedores'])->name('proveedores.agregar');

Route::post('/proveedores/guardar', 
       [proveedoresController::class, 'guardarProveedores'])->name('proveedores.guardar');


