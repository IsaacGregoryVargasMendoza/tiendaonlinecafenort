@extends('layouts.plantillabase')

@section('title')
Tienda Cafenort
@endsection

@section('container')
    @csrf
    @method('DELETE')
    <div class="card shadow-sm col-11 mx-auto">
    <div class="card-body">
    <div class="text-center"><h2 >Lista de Productos</h2></div>
    <div class="text-end">
        <a href="producto/create" class="btn btn-primary">NUEVO</a>
        <a href="categoria" class="btn btn-secondary">TIPO DE PRODUCTOS</a>
    </div>
    <table class="table table-striped mt-4">
        <thead class="table-dark">
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th class="text-center" scope="col">Tipo Producto</th>
            <th class="text-end" scope="col">Stock</th>
            <th class="text-center" scope="col">U. Medida</th>
            <th class="text-end" scope="col">Precio</th>
            <th class="text-center" scope="col">Acciones</th>
        </thead>
        <tbody>
            @foreach($productos as $producto)
            <tr>
                <td>{{$producto->id}}</td>
                <td>{{$producto->nombreProducto}}</td>
                <td class="text-center">{{$producto->tipoproducto->descripcionTipoProducto}}</td>
                <td class="text-end">{{$producto->stockProducto}}</td>
                <td class="text-center">{{$producto->unidadMedida}}</td>
                <td class="text-end">S/.{{number_format($producto->precioProducto,2,'.',',')}}</td>
                <td class="text-center">
                    <form action="" method="POST">
                        @csrf
                        @method('DELETE')
                        <a href="{{route ('listaproductos.edit',$producto->id)}}" class="btn btn-info">Editar</a>
                        <button type="submit" class="btn btn-danger">Borrar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
    </div>
@endsection