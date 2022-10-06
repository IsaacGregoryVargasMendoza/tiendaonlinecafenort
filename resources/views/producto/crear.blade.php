@extends('layouts.plantillabase')

@section('title')
Producto
@endsection

@section('container')
<div class="text-center"><h2 >Nuevo Producto</h2></div>

<form action="/catalogo" class="" method="POST" enctype="multipart/form-data" autocomplete="off">
    @csrf
    <div class="card shadow-sm col-7 mx-auto">
        <div class="card-body">
            <div class="d-grid gap-1 col-5 mx-auto">
                <!-- Grupo Nombre -->
                <label for="nombre" class="formulariolabel">Nombre</label>
                <input type="text" id="nombre" name="nombre" class="form-control" tabindex="2" autocomplete="off">

                <!-- Grupo Stock -->
                <label for="stock" class="formulariolabel">Stock</label>
                <input type="text" id="stock" name="stock" class="form-control" tabindex="2" autocomplete="off">

                <!-- Grupo Precio -->
                <label for="precio" class="formulariolabel">Precio</label>
                <input type="text" id="precio" name="precio" class="form-control" tabindex="2" autocomplete="off">
            
                <!-- Grupo Unidad de Medida -->
                <label for="unidadmedida" class="formulariolabel">Unidad de medida</label>
                <input type="text" id="unidadmedida" name="unidadmedida" class="form-control" tabindex="2" autocomplete="off">

                <!-- Grupo Tipo Producto -->
                <label for="tipoproducto" class="formulariolabel">Tipo de Producto</label>
                <select name="tipoproducto" class="form-control" aria-label="Default select example" tabindex="1"> 
                    @foreach ($tipoproductos as $tipoproducto)
                        <option value="{{$tipoproducto->id}}">{{$tipoproducto->descripcionTipoProducto}}</option>
                    @endforeach
                </select>

                <!-- Grupo esta Visible -->
                <label for="visible" class="formulariolabel">Visible</label>
                <select name="visible" class="form-control" aria-label="Default select example" tabindex="4"> 
                    <option value="1">SI</option>
                    <option value="0">NO</option>
                </select>

                <!-- Grupo Producto -->
                <label for="imagenproducto" class="formulariolabel">Imagen Producto</label>
                <input type="file" id="imagenproducto" name="imagenproducto" class="form-control" tabindex="2" autocomplete="off" accept="image/*">

                <!-- Imagen del Producto -->
                <div class="card shadow-sm">
                    <img class="img-catalogo" src="/imagenes/no_imagen.png" alt="hjkhjkhkj">
                </div>
            </div>
            
            <div class="d-grid gap-1 col-5 mx-auto mt-3">
                <button class="btn btn-primary" type="submit">Guardar</button>
                <button class="btn btn-secondary" type="button">Cancelar</button>
            </div>
        </div>
    </div>
</form>
@endsection