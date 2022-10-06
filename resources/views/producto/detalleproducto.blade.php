@extends('layouts.plantillabase')

@section('title')
Tienda Cafenort
@endsection

@section('container')
<div class="row">
    <div class="col-md-6 order-md-1">
        <img src="imagenes/no_imagen1.png" alt="">
    </div>
    <div class="col-md-6 order-md-2">
        <h2>{{$producto->nombreProducto}}</h2>
        <h2>S/.{{number_format($producto->precioProducto,2,'.',',')}}</h2>
        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Ducimus atque ut cumque nesciunt beatae perferendis error. Eveniet sit praesentium
         iure voluptatum, qui ex natus explicabo consectetur deserunt voluptatibus voluptate.
          Quasi!</p>

        <div class="d-grid gap-3 col-10 mx-auto">
            <button class="btn btn-primary" type="button">Comprar ahora</button>
            <button class="btn btn-outline-primary" type="button">Agregar al carrito</button>
        </div>
    </div>
</div>
@endsection