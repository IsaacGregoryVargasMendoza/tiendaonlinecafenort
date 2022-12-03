@extends('layouts.plantillaadmin')

@section('title')
Tienda Cafenort
@endsection

@section('css')
<link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@endsection

@section('container-admin')
    @csrf
    @method('DELETE')
    <div class="col-12 mx-auto">
        <div class="card-body">
            <div class="text-center"><h4>Lista de Productos</h4></div>
                <div class="text-end mb-2">
                    <a href="{{ route('catalogo.create')}}" class="btn btn-primary btn-sm">NUEVO</a>
                    <a href="categorias" class="btn btn-secondary btn-sm">CATEGORIAS</a>
                </div>
                <table id="datatable" class="table table-striped mt-4">
                    <thead class="table-dark">
                        <th scope="col">ID</th>
                        <th scope="col">Codigo</th>
                        <th scope="col">Nombre</th>
                        <th class="text-center" scope="col">Categoria</th>
                        <th class="text-end" scope="col">Stock</th>
                        <th class="text-center" scope="col">U. Medida</th>
                        <th class="text-end" scope="col">Precio</th>
                        <th class="text-center" scope="col">Acciones</th>
                    </thead>
                    <tbody>
                        @foreach($productos as $producto)
                        <tr>
                            <td>{{$producto->id}}</td>
                            <td class="text-uppercase">{{$producto->codigoProducto}}</td>
                            <td class="text-uppercase">{{$producto->nombreProducto}}</td>
                            <td class="text-center">{{$producto->tipoproducto->descripcionTipoProducto}}</td>
                            <td class="text-end">{{$producto->stockProducto}}</td>
                            <td class="text-center text-uppercase">{{$producto->unidadMedida}}</td>
                            <td class="text-end">S/.{{number_format($producto->precioProducto,2,'.',',')}}</td>
                            <td class="text-center">
                                <form action="{{route('listaproductos.destroy',$producto->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{route ('listaproductos.edit',$producto->id)}}" class="btn btn-info btn-sm">Editar</a>
                                    <button type="submit" class="btn btn-danger btn-sm">Borrar</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
<script src=""></script>
<script>
    $(document).ready(function () {
        $('#datatable').DataTable({
            "language": {
                "url": "https://cdn.datatables.net/plug-ins/1.12.1/i18n/es-ES.json"
            }
        });
    });
</script>
@endsection
