@extends('layouts.plantillabase')

@section('title')
Tienda Cafenort
@endsection

@section('container')
<div class="row mt-5">
    @php
        $imagen = $producto->imagenProducto;
        if(!file_exists($imagen)){
            $imagen = "/imagenes/no_imagen.png";
        }
    @endphp
    <div class="col-md-6 order-md-1">
        <img class="img-catalogo-detalle" src="/{{$imagen}}" alt="">
    </div>
    <div class="col-md-6 order-md-2 ps-4">
        <h2 class="text-center">{{$producto->nombreProducto}}</h2>
        <h2 class="">S/.{{number_format($producto->precioProducto,2,'.',',')}}</h2>
        <textarea class="lead" name="" id="" cols="60" rows="10" style="border: none; outline: 0;" readonly>{{$producto->descripcionProducto}}</textarea>

        <div class="d-grid gap-3 col-10 mx-auto">
            <button class="btn btn-primary" type="button">Comprar ahora</button>
            <button class="btn btn-outline-primary" type="button">Agregar al carrito</button>
        </div>
    </div>
</div>
@endsection