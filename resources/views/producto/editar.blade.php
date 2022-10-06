@extends('layouts.plantillabase')

@section('title')
Producto
@endsection

@section('container')
<div class="text-center"><h2 >Editar Producto</h2></div>

<form action="/listaproductos/{{$producto->id}}" class="" method="POST" enctype="multipart/form-data" autocomplete="off">
    @csrf
    @method('PUT')
    @php
        $imagen = $producto->imagenProducto;

        if(!file_exists($imagen)){
            $imagen = "imagenes/no_imagen.png";
        }
    @endphp
    <div cass="column">
    <div class="card shadow-sm col-7 mx-auto">
        <div class="card-body">
            <div class="d-grid gap-1 col-5 mx-auto">
                <!-- Grupo Nombre -->
                <label for="nombre" class="formulariolabel">Nombre</label>
                <input type="text" id="nombre" name="nombre" class="form-control" tabindex="2" autocomplete="off" value="{{$producto->nombreProducto}}">

                <!-- Grupo Stock -->
                <label for="stock" class="formulariolabel">Stock</label>
                <input type="text" id="stock" name="stock" class="form-control" tabindex="2" autocomplete="off" value="{{$producto->stockProducto}}">

                <!-- Grupo Precio -->
                <label for="precio" class="formulariolabel">Precio</label>
                <input type="text" id="precio" name="precio" class="form-control" tabindex="2" autocomplete="off" value="{{$producto->precioProducto}}">
            
                <!-- Grupo Unidad de Medida -->
                <label for="unidadmedida" class="formulariolabel">Unidad de medida</label>
                <input type="text" id="unidadmedida" name="unidadmedida" class="form-control" tabindex="2" autocomplete="off" value="{{$producto->unidadMedida}}">

                <!-- Grupo Tipo Producto -->
                <label for="tipoproducto" class="formulariolabel">Tipo de Producto</label>
                <select name="tipoproducto" class="form-control" aria-label="Default select example" tabindex="1"> 
                    @foreach ($tipoproductos as $tipoproducto)
                        @if ($tipoproducto->id == $producto->tipoproducto->id)
                            <option selected="true" value="{{$tipoproducto->id}}">{{$tipoproducto->descripcionTipoProducto}}</option>
                        @else
                            <option value="{{$tipoproducto->id}}">{{$tipoproducto->descripcionTipoProducto}}</option>
                        @endif
                    @endforeach
                </select>

                <!-- Grupo esta Visible -->
                <label for="visible" class="formulariolabel">Visible</label>
                <select name="visible" class="form-control" aria-label="Default select example" tabindex="4">
                    @if ($producto->visibleProducto == 1)
                        <option selected="true" value="1">SI</option>
                        <option value="0">NO</option>
                    @else
                        <option value="1">SI</option>
                        <option selected="true" value="0">NO</option>
                    @endif
                </select>

                <!-- Grupo Producto -->
                <label for="imagenproducto" class="formulariolabel">Imagen Producto</label>
                <input type="file" id="imagenproducto" name="imagenproducto" class="form-control" tabindex="2" autocomplete="off" accept="image/*">
                
                <!-- Imagen del Producto -->
                <div class="card shadow-sm">
                    <img class="img-catalogo" src="/{{$imagen}}" alt="hjkhjkhkj">
                </div>
                
            </div>
            
            <div class="d-grid gap-1 col-5 mx-auto mt-3">
                <button class="btn btn-primary" type="submit">Guardar</button>
                <button class="btn btn-secondary" type="button">Cancelar</button>
            </div>
        </div>
        </div>
    </div>
</form>
@endsection