<!DOCTYPE html>
<html lang="en">

<head>
  <!--   <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DeveSoft</title>
  <link rel="shortcut icon" href="imagenes/logotipo.ico" type="image/png" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/estilos.css">
  <link rel="stylesheet" href="css/plantilla.css">
  <link href="css/style.css" rel="stylesheet">

  <script src="https://kit.fontawesome.com/9a61bee9db.js" crossorigin="anonymous"></script> -->

  <meta charset="utf-8">
  <title>DeveSoft</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="DeveSoft" name="keywords">
  <meta content="DeveSoft empresa de técnologia." name="description">

  <!-- Favicon -->
  <link href="{{ asset('website/img/favicon.ico') }}" rel="icon">

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">

  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Libraries Stylesheet -->
  <link href="{{ asset('website/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ asset('website/lib/animate/animate.min.css') }}" rel="stylesheet">

  <!-- Customized Bootstrap Stylesheet -->
  <link href="{{ asset('website/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Template Stylesheet -->
  <link href="{{ asset('website/css/style.css') }}" rel="stylesheet">

</head>

<body>


  @include('partials.website.topbar')

  <div class="container-fluid position-relative p-0">
    @include('partials.website.navbar')
  </div>

  <div class="container mt-5">
    <div id="contenedorpadre" class="contenedor-catalogo">

      <div id="catalogoproducto" class="row mt-5 row-cols-2 row-cols-sm-2 row-cols-md-3 row-cols-md-4 row-cols-lg-4 g-3">
        @foreach($productos as $producto)
        @php
        $imagen = $producto->imagenProducto;
        if(!file_exists($imagen)){
        $imagen = "imagenes/no_imagen.png";
        }
        @endphp

        @method('DELETE')
        <div class="col producto mt-5" id="{{$producto->id}}">
          <div class="card shadow-sm mt-5">
            <img class="img-catalogo" src="{{$imagen}}" alt="">
            <div class="card-body">
              <h5 class="card-title text-uppercase" style="font-size: 14px;">{{$producto->nombreProducto}}</h5>
              <hr>
              <p class="card-text text-uppercase" style="font-size: 12px;">
                Precio: S/.{{number_format($producto->precioProducto,2,'.',',')}}
                <br>Unidad de Medida: {{$producto->unidadMedida}}
                <br>Stock: {{$producto->stockProducto}}
              </p>

              <!-- <div class="d-flex justify-content-center align-item-center">
                <div class="btn-group">
                  <a href="{{route ('catalogo.show',$producto->id)}}" class="btn btn-dark btn-sm" style="background-color: #091E3E;"><i class="fa fa-eye m-1"></i>Ver detalles</a>
                </div>
              </div> -->
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>


  @include('partials.website.footer')

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