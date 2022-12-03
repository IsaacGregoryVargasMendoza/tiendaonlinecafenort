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
            <div class="text-center"><h4>Lista de Ventas</h4></div>
                <table id="datatable" class="table table-striped mt-4">
                    <thead class="table-success">
                        <th scope="col">ID</th>
                        <th scope="col">Fecha Venta</th>
                        <th scope="col">Cliente</th>
                        <th class="text-center" scope="col">Serie</th>
                        <th class="text-center" scope="col">Subtotal</th>
                        <th class="text-center" scope="col">IGV</th>
                        <th class="text-end" scope="col">Total</th>
                        <th class="text-end" scope="col">Acciones</th>
                    </thead>
                    <tbody>
                        @foreach($ventas as $venta)
                        <tr>
                            <td>{{$venta->id}}</td>
                            <td class="text-start">{{$venta->fechaVenta}}</td>
                            <td class="text-start">{{$venta->denominacionCliente}}</td>
                            <td class="text-center">{{$venta->serieVenta}} - {{$venta->numeroSerieVenta}}</td>
                            <td class="text-end">S/.{{number_format($venta->totalVenta*0.18,2,'.',',')}}</td>
                            <td class="text-end">S/.{{number_format($venta->totalVenta*0.82,2,'.',',')}}</td>
                            <td class="text-end">S/.{{number_format($venta->totalVenta,2,'.',',')}}</td>
                            <td class="text-center">
                                <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#modalVer{{$venta->id}}" onclick="prueba(<?php echo $venta->id;?>)">Ver</button>
                            </td>
                        </tr>
                        <!-- Ventana modal para Edicion de Categorias -->
                        <div class="modal fade" id="modalVer{{$venta->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="">
                                        <div class="text-center bg-info pt-3 pb-1"><h4 id="exampleModalLabel">Detalle Venta</h4></div>
                                    </div>
                                    <div id="contenido-modal{{$venta->id}}">
                                    </div>
                                </div>
                            </div>
                        </div>
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

    async function prueba(id){
        document.getElementById("contenido-modal"+id).innerHTML = `<th></th>`
        const response = await fetch("http://localhost:8000/api/listadetalleventa/"+id,{method:'GET', headers: { 'Content-Type': 'application/json' }})
        console.log(await response.json())

        document.getElementById("contenido-modal"+id).innerHTML = `<table id="datatable" class="table table-striped mt-4">
            <thead class="table-hover">
                <th scope="col">Codigo</th>
                <th scope="col">Producto</th>
                <th class="text-center" scope="col">U. Med</th>
                <th class="text-end" scope="col">P. Uni</th>
                <th class="text-end" scope="col">Cantidad</th>
                <th class="text-end" scope="col">Total</th>
            </thead>
            <tbody id="tbody">
            </tbody>
        </table>`
    }
</script>
@endsection