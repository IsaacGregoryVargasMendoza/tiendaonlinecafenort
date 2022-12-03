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
    <div class="card shadow-sm col-12 mx-auto">
    <div class="card-body">
    <div class="text-center"><h4>Lista de Clientes</h4></div>
    <div class="text-end mb-1">
        <a class="btn btn-primary btn-sm"  data-bs-toggle="modal" data-bs-target="#modalRegistroCliente">NUEVO</a>
    </div>
    <table id="datatable" class="table table-striped mt-4">
        <thead class="table-dark">
            <th scope="col">ID</th>
            <th class="text-start" scope="col">Dni/Ruc<br>Denominacion</th>
            <th class="text-start" scope="col">Direccion</th>
            <th class="text-center" scope="col">Celular</th>
            <th class="text-start" scope="col">Correo</th>
            <th class="text-center" scope="col">Accion</th>
        </thead>
        <tbody>
            @foreach($clientes as $cliente)
            <tr>
                <td>{{$cliente->id}}</td>
                <td class="text-start">{{$cliente->dniCliente}}<br>{{$cliente->nombreCliente}}</td>
                <td class="text-start">{{$cliente->direccionCliente}}</td>
                <td class="text-center">{{$cliente->celularCliente}}</td>
                <td class="text-start">{{$cliente->correoCliente}}</td>
                <td class="text-center">
                    <form action="{{route('clientes.destroy',$cliente->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <!-- <a data-bs-toggle="modal" data-bs-target="#modalEditarCliente{{$cliente->id}}" class="btn text-dark btn-sm"><i class="fa fa-solid fa-pen"></i></a> -->
                        <div class="d-grid gap-2 d-md-block">
                            <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#modalEditarCliente{{$cliente->id}}">Editar</button>
                            <button type="submit" class="btn btn-danger btn-sm">Borrar</button>
                        </div>
                    </form>
                </td>
                <!-- Ventana modal para Edicion de Clientes -->
                <div class="modal fade" id="modalEditarCliente{{$cliente->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="">
                                <div class="text-center bg-success text-white pt-3 pb-1"><h4 id="exampleModalLabel">Editar Cliente</h5></div>
                            </div>
                            <form action="/clientes/{{$cliente->id}}" class="" method="POST" enctype="multipart/form-data" autocomplete="off">
                                @csrf
                                @method('PUT')
                                <div class="modal-body col-10 mx-auto text-start">
                                    <!-- Grupo Nombre -->
                                    <label for="dniCliente{{$cliente->id}}" class="formulariolabel">DNI/RUC</label>
                                    <input type="text" id="dniCliente{{$cliente->id}}" name="dniCliente{{$cliente->id}}" class="form-control" tabindex="1" autocomplete="off" maxlength="11" value="{{$cliente->dniCliente}}">
                                    
                                    <div class="text-end">
                                        <button type="button" class="btn btn-outline-success btn-sm" onclick="buscarCliente()">Buscar</button>
                                    </div>

                                    <label for="nombreCliente{{$cliente->id}}" class="formulariolabel">Denominacion</label>
                                    <input type="text" id="nombreCliente{{$cliente->id}}" name="nombreCliente{{$cliente->id}}" class="form-control" tabindex="1" autocomplete="off" maxlength="150" value="{{$cliente->nombreCliente}}">
                                    
                                    <label for="direccionCliente{{$cliente->id}}" class="formulariolabel">Direccion</label>
                                    <input type="text" id="direccionCliente{{$cliente->id}}" name="direccionCliente{{$cliente->id}}" class="form-control" tabindex="2" autocomplete="off" maxlength="150" value="{{$cliente->direccionCliente}}">

                                    <label for="celularCliente{{$cliente->id}}" class="formulariolabel">Celular</label>
                                    <input type="number" id="celularCliente{{$cliente->id}}" name="celularCliente{{$cliente->id}}" class="form-control" tabindex="3" autocomplete="off" maxlength="12" value="{{$cliente->celularCliente}}">

                                    <label for="correoCliente{{$cliente->id}}" class="formulariolabel">Correo</label>
                                    <input type="text" id="correoCliente{{$cliente->id}}" name="correoCliente{{$cliente->id}}" class="form-control" tabindex="4" autocomplete="off" maxlength="150" value="{{$cliente->correoCliente}}">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" tabindex="5">Cancelar</button>
                                    <button type="submit" class="btn btn-success" tabindex="6">Guardar</button>
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

    <!-- Ventana modal para registro de Clientes -->
    <div class="modal fade" id="modalRegistroCliente" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="">
                    <div class="text-center bg-success text-white pt-3 pb-1"><h4 id="exampleModalLabel">Nuevo Cliente</h5></div>
                </div>
                <form action="/clientes" class="" method="POST" enctype="multipart/form-data" autocomplete="off">
                    @csrf
                    <div class="modal-body col-10 mx-auto text-start">
                        <!-- Grupo Nombre -->
                        <label for="dniCliente" class="formulariolabel">DNI/RUC</label>
                        <input type="text" id="dniCliente" name="dniCliente" class="form-control" tabindex="1" autocomplete="off" maxlength="11" value="">
                        
                        <div class="text-end">
                            <button type="button" class="btn btn-outline-success btn-sm" onclick="buscarCliente()">Buscar</button>
                        </div>

                        <label for="nombreCliente" class="formulariolabel">Denominacion</label>
                        <input type="text" id="nombreCliente" name="nombreCliente" class="form-control" tabindex="2" autocomplete="off" maxlength="150" value="">
                        
                        <label for="direccionCliente" class="formulariolabel">Direccion</label>
                        <input type="text" id="direccionCliente" name="direccionCliente" class="form-control" tabindex="3" autocomplete="off" maxlength="150" value="">

                        <label for="celularCliente" class="formulariolabel">Celular</label>
                        <input type="text" id="celularCliente" name="celularCliente" class="form-control" tabindex="4" autocomplete="off" maxlength="12" value="">

                        <label for="correoCliente" class="formulariolabel">Correo</label>
                        <input type="email" id="correoCliente" name="correoCliente" class="form-control" tabindex="5" autocomplete="off" maxlength="150" value="">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal" tabindex="6">Cancelar</button>
                        <button type="submit" class="btn btn-success btn-sm" tabindex="7">Guardar</button>
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
<script src="/js/validar.js"></script>
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