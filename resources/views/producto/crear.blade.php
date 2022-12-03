@extends('layouts.plantillaadmin')

@section('title')
Producto
@endsection

@section('css')
<link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@endsection

@section('container-admin')
    <div class="">
    <div class="text-center"><h5>Nuevo Producto</h5></div>

    <form action="/catalogo" class="" method="POST" enctype="multipart/form-data" autocomplete="off">
        @csrf
        <div class="card shadow-sm col-11 mx-auto">
            <div class="card-body bg-light">
            <div class="row">
                <div class="col-5 mx-auto text-start">
                    <!-- Grupo Codigo -->
                    <label for="codigo" class="formulariolabel text-start">Codigo</label>
                    <input type="text" id="codigo" name="codigo" class="form-control form-control-sm" tabindex="1" autocomplete="off" maxlength="10" value="{{$codigo->codigo}}" readonly>

                    <!-- Grupo Nombre -->
                    <label for="nombre" class="formulariolabel text-start">Nombre</label>
                    <input type="text" id="nombre" name="nombre" class="form-control form-control-sm" tabindex="2" autocomplete="off" maxlength="100">

                    <!-- Grupo Detalles -->
                    <label for="detalle" class="formulariolabel text-start">Detalles</label>
                    <textarea class="form-control form-control-sm" name="detalle" id="detalle" cols="30" rows="6" tabindex="3" autocomplete="off"></textarea>

                    <!-- Grupo Stock -->
                    <label for="stock" class="formulariolabel text-start">Stock</label>
                    <input type="text" id="stock" name="stock" class="form-control form-control-sm" tabindex="4" autocomplete="off"">

                    <!-- Grupo Precio -->
                    <label for="precio" class="formulariolabel text-start">Precio</label>
                    <input type="text" id="precio" name="precio" class="form-control form-control-sm" tabindex="5" autocomplete="off">

                    <!-- Grupo Unidad de Medida -->
                    <label for="unidadmedida" class="formulariolabel text-start">Unidad de medida</label>
                    <select name="unidadmedida" id="unidadmedida" class="form-control form-control-sm" aria-label="Default select example" tabindex="6"> 
                        <option value="UNIDAD">UNIDAD</option>
                        <option value="GRAMO">GRAMO</option>
                        <option value="KILO">KILO</option>
                        <option value="CIENTO">CIENTO</option>
                        <option value="MILLAR">MILLAR</option>
                        <option value="LITRO">LITRO</option>
                    </select>
                </div>

                <div class="col-5 mx-auto text-start">
                    <!-- Grupo Tipo Producto -->
                    <label for="tipoproducto" class="formulariolabel text-start">Categoria</label>
                    <select name="tipoproducto" class="form-control form-control-sm" aria-label="Default select example" tabindex="7"> 
                        @foreach ($tipoproductos as $tipoproducto)
                            <option value="{{$tipoproducto->id}}">{{$tipoproducto->descripcionTipoProducto}}</option>
                        @endforeach
                    </select>

                    <!-- Grupo esta Visible -->
                    <label for="visible" class="formulariolabel text-start">Visible</label>
                    <select name="visible" class="form-control form-control-sm" aria-label="Default select example" tabindex="8"> 
                        <option value="1">SI</option>
                        <option value="0">NO</option>
                    </select>

                    <!-- Grupo Producto -->
                    <label for="imagenproducto" class="formulariolabel text-start">Imagen Producto</label>
                    <input type="file" id="imagenproducto" name="imagenproducto" class="form-control form-control-sm" tabindex="9" autocomplete="off" accept="image/*" onchange="mostrarImagen()">

                    <!-- Imagen del Producto -->
                    <div class="card shadow-sm text-center">
                        <img id="imagen" class="img-catalogo-formulario" src="/imagenes/no_imagen.png" alt="imagen producto">
                    </div>
                </div>
                </div>
                <div class="row">
                    <div class="d-grid gap-1 col-5 mx-auto mt-3">
                        <button class="btn btn-primary btn-sm" type="submit" tabindex="10">Guardar</button>
                        <a href="{{ route('listaproductos.index')}}" class="btn btn-secondary btn-sm" type="button" tabindex="11">Cancelar</a>
                    </div>
                </div>
            </div>
        </div>
    </form>
    </div>
@endsection

@section('js')
    <script src="/js/formulario.js"></script>
@endsection 