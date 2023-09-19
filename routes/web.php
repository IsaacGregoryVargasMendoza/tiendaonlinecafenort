<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\ProductoController;


/**
 * Clientes
 */

Route::get('/', function () {
    return view('website.index');
})->name('website.index');

/**
 * Catalogo de software
 */
Route::get('/software', function () {
    return view('website.software');
})->name('website.software');


Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(
    function () {
        Route::get('/admin', function () {
            return view('layouts.plantillaadmin');
        });
    }
);


Route::controller(ProductoController::class)->group(function () {
    Route::put('/actualizarproducto/{id}', 'update');
});

Route::resource('catalogo', 'App\Http\Controllers\ProductoController');
Route::resource('clientes', 'App\Http\Controllers\ClienteController')->middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified']);
Route::resource('categorias', 'App\Http\Controllers\TipoProductoController')->middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified']);
Route::resource('listaproductos', 'App\Http\Controllers\ListaController')->middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified']);

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(
    function () {
        Route::get('/dashboard', function () {
            return view('layouts.plantillaadmin');
        });
    }
);

Route::controller(VentaController::class)->group(function () {
    Route::get('/carrito', 'listaCarrito');
    Route::get('/listaventas', 'listaVentas')->middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified']);
});
