@extends('layouts.plantillabase')

@section('title')
Tienda Cafenort
@endsection

@section('container')
<div>
    <div class="row mt-3">
      <div class="d-grid gap-1 col-8">
        <h5>Detalle de Compra</h5>
      </div>
      <div>
        <form action="/api/mercado" method="POST" enctype="multipart/form-data" id="formula">
          @csrf
          <div class="row">
            <div class="col-5">
              <label for="dniClienteCarrito" class="formulariolabel">DNI O RUC</label>
              <div class="d-flex">
                <input type="number" id="dniClienteCarrito" name="dniClienteCarrito" class="form-control form-control-sm" tabindex="1" autocomplete="off" maxlength="11" value="" required>
                <button type="button" class="btn btn-outline-success btn-sm" onclick="buscarClienteCarrito()">Buscar</button>
              </div>
            </div>

            <div class="col-2">
              <label for="fechaVentaCarrito" class="formulariolabel">Fecha</label>
              <input type="date" id="fechaVentaCarrito" name="fechaVentaCarrito" class="form-control-sm" autocomplete="off" readonly="true" value="<?php echo date("Y-m-d", time()-3600);?>">
            </div>
          </div>
          <div class="row">
            <div class="col-5">
              <div>
                <label for="nombreClienteCarrito" class="formulariolabel">Nombre</label>
                <input type="text" id="nombreClienteCarrito" name="nombreClienteCarrito" class="form-control form-control-sm" tabindex="2" autocomplete="off" maxlength="150" value="" required>
              </div>
            </div>

            <div class="col-6">
              <div>
                <label for="direccionClienteCarrito" class="formulariolabel">Direccion</label>
                <input type="text" id="direccionClienteCarrito" name="direccionClienteCarrito" class="form-control form-control-sm" tabindex="3" autocomplete="off" maxlength="150" value="" required>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-5 d-flex gap-4 mt-2">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="radioEnvio" id="radioEnvio1" checked>
                <label class="form-check-label" for="radioEnvio1">
                  Envio a direccion
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="radioEnvio" id="radioEnvio2">
                <label class="form-check-label" for="radioEnvio2">
                  Recojo en tienda
                </label>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-5" id="direccionEnvio">
              <div>
                <label for="direccionEnvioCarrito" class="formulariolabel">Direccion de envio</label>
                <input type="text" id="direccionEnvioCarrito" name="direccionEnvioCarrito" class="form-control form-control-sm" tabindex="4" autocomplete="off" maxlength="150" value="" required>
              </div>
            </div>
          </div>
          <div class="text-end">
            <input type="hidden" name="productos2" id="productos2">
            <button type="submit" class="btn btn-primary btn-sm">Continuar compra</button>
            <a href="{{ url('/catalogo')}}" class="btn btn-secondary btn-sm">Cancelar</a>
          </div>
        </form>
      </div>
    </div>
    <hr>
    <div id="carritoCompras" class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-md-4 row-cols-md-5 g-3 mt-1">
        <table id="datatable" class="table table-striped mt-4">
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
        </table>
        <div class="subtotales-container">
            <div class="row bg-light p-3">
                <div class="col-8 text-start">
                    <p class="fw-bold">SUBTOTAL:</p>
                    <p class="fw-bold">IGV:</p>
                    <p class="fw-bold">TOTAL:</p>
                </div>
                <div class="col-4 text-end">
                    <p id="subtotal" class="fw-bold">0.00</p>
                    <p id="igv" class="fw-bold">0.00</p>
                    <p id="total" class="fw-bold">0.00</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script src="/js/carrito.js"></script>
@endsection