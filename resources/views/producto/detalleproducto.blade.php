






<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DeveSoft</title>
  <link rel="shortcut icon" href="imagenes/logotipo.ico" type="image/png" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/estilos.css">
  <link rel="stylesheet" href="css/plantilla.css">
  <link href="css/style.css" rel="stylesheet">

  <script src="https://kit.fontawesome.com/9a61bee9db.js" crossorigin="anonymous"></script>
</head>

<body>
  
  <main>
    @include('partials.navbar')
    <div class="container">
      <div id="contenedorpadre" class="contenedor-catalogo">
        <div class="row">
        @php
            $imagen = $producto->imagenProducto;
            if(!file_exists($imagen)){
                $imagen = "/imagenes/no_imagen.png";
            }
        @endphp
        <div class="col-md-6 order-md-1">
            <img class="img-catalogo-detalle" src="/{{$imagen}}" alt="">
        </div>
        <div class="col-md-6 order-md-2 ps-4">
          <h2 class="text-center">{{$producto->nombreProducto}}</h2>
          <h2 class="">S/.{{number_format($producto->precioProducto,2,'.',',')}}</h2>
          <textarea class="lead" name="" id="" cols="60" rows="10" style="border: none; outline: 0;" readonly>{{$producto->descripcionProducto}}</textarea>

          <div class="d-grid gap-3 col-10 mx-auto">
              <button class="btn btn-primary" type="button">Comprar ahora</button>
              <button class="btn btn-outline-primary" type="button">Agregar al carrito</button>
          </div>
        </div>
      </div>
    </div>
</main>
@include('partials.footer')

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/counterup/counterup.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="/js/catalogo.js"></script>
<script src="/js/carrito.js"></script>
<script src="js/main.js"></script>
</body>
</html>




