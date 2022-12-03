@extends('layouts.plantillabase')

@section('title')
Tienda Cafenort
@endsection

@section('container')
<?php
require base_path('/vendor/autoload.php');
MercadoPago\SDK::setAccessToken(config('services.mercadopago.token'));

$preference = new MercadoPago\Preference();

$productos = json_decode($_POST['productos2']);
$lista = [];
$total = 0;

foreach($productos as $producto){
  $item = new MercadoPago\Item();
  $item->title = $producto->nombreProducto;
  $item->quantity = $producto->cantidad;
  $item->unit_price = $producto->precioProducto;
  $lista[] = $item;
  $total = $total + ($producto->cantidad * $producto->precioProducto);
}

$listaProductos = json_encode($productos);

$preference->back_urls = array(
  "success" => "http://127.0.0.1:8000",
  "failure" => "http://127.0.0.1:8000",
  "pending" => "http://127.0.0.1:8000"
);
//$preference->auto_return = "approved";

$preference->items = $lista;
$preference->save();
?>

<div class="mt-5">
  <div class="">
    <h5>Detalles</h5>
  </div>
  <div class="">
    <label class="detalles">Identificador: </label><label class="" id="dniCliente"><?php echo $_POST["dniClienteCarrito"];?></label><br>
    <label class="detalles">Denominacion: </label><label class="" id="nombreCliente"><?php echo $_POST["nombreClienteCarrito"];?></label><br>
    <label class="detalles">Direccion: </label><label class="" id="direccionCliente"><?php echo $_POST["direccionClienteCarrito"];?></label><br>
    <label class="detalles">Direccion de Envio: </label><label class=""><?php echo $_POST["direccionEnvioCarrito"];?></label><br>
    <label class="detalles">Fecha Compra: </label><label id="fechaVenta" class=""><?php echo $_POST["fechaVentaCarrito"];?></label><br>
    <label class="detalles">Subtotal: </label><label class=""><?php echo $total*0.82;?></label><br>
    <label class="detalles">IGV: </label><label class=""><?php echo $total*0.18;?></label><br>
    <label class="detalles">Total: </label><label class=""><?php echo $total;?></label><br>
    <input type="hidden" name="productos" id="productos" value="{{$listaProductos}}">
  </div>
</div>

<div id="pagar" class="cho-container">
</div>
@endsection

@section('js')
<script src="https://sdk.mercadopago.com/js/v2"></script>
<script>
  const mp = new MercadoPago("{{config('services.mercadopago.key')}}", {
    locale: 'es-PE'
  });

  mp.checkout({
    preference: {
      id: '{{ $preference->id }}'
    },
    render: {
      container: '.cho-container',
      label: 'Pagar',
    }
  });

const btnPagar = document.getElementById("pagar");
btnPagar.addEventListener('click', async function (e){
    var jsonEnviar = await JSON.parse(JSON.stringify(document.getElementById("productos").value))
    var jsonEnviarFinal = {
        "identificadorCliente": "",
        "denominacionCliente": "",
        "direccionCliente": "",
        "fechaVenta": "",
        "totalVenta": 0,
        "lista": []
    }
    jsonEnviarFinal.identificadorCliente = document.getElementById('dniCliente').innerHTML
    jsonEnviarFinal.denominacionCliente = document.getElementById('nombreCliente').innerHTML
    jsonEnviarFinal.direccionCliente = document.getElementById('direccionCliente').innerHTML
    jsonEnviarFinal.fechaVenta = document.getElementById('fechaVenta').innerHTML
    jsonEnviarFinal.totalVenta = Number('<?php echo $total;?>')
    jsonEnviarFinal.lista = jsonEnviar
    try {
        await fetch("http://localhost:8000/api/venta",{method:'POST',body: JSON.stringify({jsonEnviarFinal}), headers: { 'Content-Type': 'application/json' }})
    } catch (error) {

    }
})
</script>
@endsection