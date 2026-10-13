<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\EmpleadosController;
use App\Http\Controllers\PedidosController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\ProveedoresController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/clientes', [ClientesController::class, 'index']);
Route::get('/empleados', [EmpleadosController::class, 'index']);
Route::get('/pedidos', [PedidosController::class, 'index']);
Route::get('/productos', [ProductosController::class, 'index']);
Route::get('/proveedores', [ProveedoresController::class, 'index']);
