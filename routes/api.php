<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListaController;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\ProductoController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(ListaController::class)->group(function () {
    Route::get('/buscarproducto/{id}', 'show');
});

Route::controller(ProductoController::class)->group(function () {
    Route::get('/filtrarproductos/{id}', 'filtrarProductos');
    Route::get('/sinfiltrarproductos', 'sinFiltrarProductos');
});

Route::post('/mercado', function () {
    return view('mercado.mercado');
});

Route::post('/verCarrito',function () {
    return view('producto.carrito');
});

Route::controller(VentaController::class)->group(function () {
    Route::post('/agregarCarrito', 'agregarCarrito');
    Route::post('/venta','store');
    Route::delete('/eliminarCarrito', 'eliminarCarrito');
    Route::get('/listadetalleventa/{id}', 'listaDetalleVenta');
});
Route::POST('/carritoCompras', [VentaController::class, 'verCarrito']);