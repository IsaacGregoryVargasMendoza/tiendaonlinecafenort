@extends('layouts.plantillabase')

@section('title')
Tienda Cafenort
@endsection

@section('container')
<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-md-4 g-3">
    @foreach($productos as $producto)
    @php
        $imagen = $producto->imagenProducto;
        if(!file_exists($imagen)){
            $imagen = "imagenes/no_imagen.png";
        }
    @endphp
    @csrf
    @method('DELETE')
    <div class="col">
        <div class="card shadow-sm">
            <img class="img-catalogo" src="{{$imagen}}" alt="">
            <div class="card-body">
                <h5 class="card-title">{{$producto->nombreProducto}}</h5>
                <hr>
                <p class="card-text">
                Precio: S/.{{number_format($producto->precioProducto,2,'.',',')}}
                <br>Unidad de Medida: {{$producto->unidadMedida}}
                <br>Stock: {{$producto->stockProducto}}
                
                </p>
                <input class="form-control text-end" type="number"><br>
                <div class="d-flex justify-content-between align-item-center">
                    <div class="btn-group">
                        <a href="{{route ('catalogo.show',$producto->id)}}" class="btn btn-primary">Detalles</a>
                    </div>
                    <a href="#" class="btn btn-success">Agregar</a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection