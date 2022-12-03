@extends('layouts.plantillabase')

@section('title')
Tienda Cafenort
@endsection

@section('container')
<div id="contenedorpadre">
    <div id="catalogocategorias" class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-md-4 row-cols-md-5 g-3 mt-5">
        @csrf
        <!-- <div class="col-12"><h2 >Filtrado: </h2></div> -->
        <div class="col-2 pd-2 d-grid gap-2">
            <button class="btn btn-success btn-sm" id="tipoproducto0" type="button" onclick="filtrarPorTipoProducto(0)">Todos</button>
        </div>
        @foreach($tipoproductos as $tipoproducto)
        <div class="col-2 pd-2 d-grid gap-2">
            <button class="btn btn-outline-success btn-sm" id="tipoproducto{{$tipoproducto->id}}" type="button" onclick="filtrarPorTipoProducto(<?php echo $tipoproducto->id; ?>)">{{$tipoproducto->descripcionTipoProducto}}</button>
        </div>
        @endforeach
    </div>
    <div id="catalogoproducto" class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-md-4 row-cols-md-5 g-3 mt-5">
        @foreach($productos as $producto)
        @php
            $imagen = $producto->imagenProducto;
            if(!file_exists($imagen)){
                $imagen = "imagenes/no_imagen.png";
            }
        @endphp
        
        @method('DELETE')
        <div class="col producto" id="{{$producto->id}}">
            <div class="card shadow-sm">
                <img class="img-catalogo" src="{{$imagen}}" alt="">
                <div class="card-body">
                    <h5 class="card-title text-uppercase" style="font-size: 14px;">{{$producto->nombreProducto}}</h5>
                    <hr>
                    <p class="card-text text-uppercase" style="font-size: 12px;">
                    Precio: S/.{{number_format($producto->precioProducto,2,'.',',')}}
                    <br>Unidad de Medida: {{$producto->unidadMedida}}
                    <br>Stock: {{$producto->stockProducto}}
                    
                    </p>
                    <input class="form-control text-end form-control-sm" id="cantidad{{$producto->id}}" type="number" value=0><br>
                    <div class="d-flex justify-content-between align-item-center">
                        <div class="btn-group">
                            <a href="{{route ('catalogo.show',$producto->id)}}" class="btn btn-outline-dark">ver</a>
                        </div>
                        <button class="btn btn-outline-success btn-sm" type="button" onclick="agregaralcarritoclick(<?php echo $producto->id; ?>, document.getElementById('cantidad<?php echo $producto->id; ?>').value, <?php echo $producto->stockProducto; ?>)">Agregar</button>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
</div>
@endsection

@section('js')
<script src="/js/catalogo.js"></script>
<script src="/js/carrito.js"></script>
@endsection