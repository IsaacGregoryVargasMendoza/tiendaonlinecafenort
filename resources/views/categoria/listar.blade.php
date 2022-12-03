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
    <div class="col-8 mx-auto">
    <div class="card-body">
    <div class="text-center"><h4>Lista de Categorias</h4></div>
    <div class="text-end mb-2">
        <a class="btn btn-primary btn-sm"  data-bs-toggle="modal" data-bs-target="#modalRegistroCategoria">NUEVO</a>
        <a href="listaproductos" class="btn btn-secondary btn-sm">CANCELAR</a>
    </div>
    <table id="datatable" class="table table-striped">
        <thead class="table-dark">
            <th scope="col">ID</th>
            <th class="text-center" scope="col">Nombre</th>
            <th class="text-center" scope="col">Acciones</th>
        </thead>
        <tbody>
            @foreach($tipoproductos as $tipoproducto)
            <tr>
                <td>{{$tipoproducto->id}}</td>
                <td class="text-center">{{$tipoproducto->descripcionTipoProducto}}</td>
                <td class="text-center">
                    <form action="{{route('categorias.destroy',$tipoproducto->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <!-- <button type="button" class="btn text-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditarTipoProducto{{$tipoproducto->id}}"><i class="fa fa-solid fa-pen"></i></button> -->
                        <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditarTipoProducto{{$tipoproducto->id}}">Editar</button>
                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                    </form>
                </td>
                <!-- Ventana modal para Edicion de Categorias -->
                <div class="modal fade" id="modalEditarTipoProducto{{$tipoproducto->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="">
                                <div class="text-center bg-info pt-3 pb-1"><h4 id="exampleModalLabel">Editar Categoria</h5></div>
                            </div>
                            <form action="/categorias/{{$tipoproducto->id}}" class="" method="POST" enctype="multipart/form-data" autocomplete="off">
                                @csrf
                                @method('PUT')
                                <div class="modal-body d-grid gap-1 col-10 mx-auto">
                                    <label for="descripcionTipoProducto" class="formulariolabel">Nombre</label>
                                    <input type="text" id="descripcionTipoProducto" name="descripcionTipoProducto" class="form-control text-uppercase" tabindex="1" autocomplete="off" maxlength="150" value="{{$tipoproducto->descripcionTipoProducto}}">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" tabindex="2">Cancelar</button>
                                    <button type="submit" class="btn btn-primary" tabindex="3">Guardar Cambios</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
    </div>

    <!-- Ventana modal para registro de Categorias -->
    <div class="modal fade" id="modalRegistroCategoria" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="">
                    <div class="text-center bg-info pt-3 pb-1"><h4 id="exampleModalLabel">Nueva Categoria</h5></div>
                </div>
                <form action="/categorias" class="" method="POST" enctype="multipart/form-data" autocomplete="off">
                    @csrf
                    <div class="modal-body d-grid gap-1 col-10 mx-auto">
                        <!-- Grupo Nombre -->
                        <label for="descripcion" class="formulariolabel text-start">Nombre</label>
                        <input type="text" id="descripcion" name="descripcion" class="form-control" tabindex="1" autocomplete="off" maxlength="100">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal" tabindex="2">Cancelar</button>
                        <button type="submit" class="btn btn-primary btn-sm" tabindex="3">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Ventana modal para Edicion de Categorias -->
    <div class="modal fade" id="modalEditarCategoria" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="">
                    <div class="text-center bg-info pt-3 pb-1"><h4 id="exampleModalLabel">Editar Categoria</h5></div>
                </div>
                <form action="/categorias" class="" method="POST" enctype="multipart/form-data" autocomplete="off">
                    @csrf
                    <div class="modal-body d-grid gap-1 col-10 mx-auto">
                        <!-- Grupo ID -->
                        <label for="id" class="formulariolabel">ID</label>
                        <input type="text" id="id" name="id" class="form-control" tabindex="1" autocomplete="off" maxlength="100">

                        <!-- Grupo Nombre -->
                        <label for="descripcion" class="formulariolabel">Nombre</label>
                        <input type="text" id="descripcion" name="descripcion" class="form-control" tabindex="1" autocomplete="off" maxlength="100">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" tabindex="2">Cancelar</button>
                        <button type="submit" class="btn btn-primary" tabindex="3">Guardar</button>
                    </div>
                </form>
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