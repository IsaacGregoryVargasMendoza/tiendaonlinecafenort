@extends('layouts.plantillabase')

@section('title')
Tienda Cafenort
@endsection

@section('container')
<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-md-4 g-3">
    <div class="col">
        <div class="card shadow-sm">
            <img src="imagenes/productos/laptop.png" alt="">

            <div class="card-body">
                <h5 class="card-title">Taper de Fresa</h5>
                <p class="card-text">$ 23.40</p>
                <div class="d-flex justify-content-between align-item-center">
                    <div class="btn-group">
                        <a href="" class="btn btn-primary">Detalles</a>
                    </div>
                    <a href="#" class="btn btn-success">Agregar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection