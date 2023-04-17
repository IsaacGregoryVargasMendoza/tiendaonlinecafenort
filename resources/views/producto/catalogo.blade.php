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

  <script src="https://kit.fontawesome.com/9a61bee9db.js" crossorigin="anonymous"></script>
</head>

<body>
  <!-- NAVEGACION-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="width: 100%; position: fixed; z-index: 200;">
    <div class="container-fluid">
      <a class="navbar-brand ms-5" href="/"><img src="imagenes/logo.png" alt="" style="width: 100px;"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 me-5">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Inicio</a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#caracteristicas">Caracteristicas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#acercaDe">Acerca de</a>
          </li> -->
          <!-- <li class="nav-item">
            <a class="nav-link" href="#preguntasFrecuentes">Preguntas Frecuentes</a>
          </li> -->
          <!-- <li class="nav-item">
            <a class="nav-link" href="#equipo">Equipo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contactanos">Contactanos</a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link" href="catalogo">Catalogo</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <main>
        <div class="container">
        <div id="contenedorpadre">
    <div id="catalogocategorias" class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-md-4 row-cols-md-5 g-3 mt-5">
        @csrf
        <div class="col-2 pd-2 d-grid gap-2">
            <button class="btn btn-success btn-sm" id="tipoproducto0" type="button" onclick="filtrarPorTipoProducto(0)">Todos</button>
        </div>
        @foreach($tipoproductos as $tipoproducto)
        <div class="col-2 pd-2 d-grid gap-2">
            <button class="btn btn-outline-success btn-sm" id="tipoproducto{{$tipoproducto->id}}" type="button" onclick="filtrarPorTipoProducto(<?php echo $tipoproducto->id; ?>)">{{$tipoproducto->descripcionTipoProducto}}</button>
        </div>
        @endforeach
    </div>
    <div id="catalogoproducto" class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-md-4 row-cols-md-5 g-3 mt-5">
        @foreach($productos as $producto)
        @php
            $imagen = $producto->imagenProducto;
            if(!file_exists($imagen)){
                $imagen = "imagenes/no_imagen.png";
            }
        @endphp
        
        @method('DELETE')
        <div class="col producto" id="{{$producto->id}}">
            <div class="card shadow-sm">
                <img class="img-catalogo" src="{{$imagen}}" alt="">
                <div class="card-body">
                    <h5 class="card-title text-uppercase" style="font-size: 14px;">{{$producto->nombreProducto}}</h5>
                    <hr>
                    <p class="card-text text-uppercase" style="font-size: 12px;">
                    Precio: S/.{{number_format($producto->precioProducto,2,'.',',')}}
                    <br>Unidad de Medida: {{$producto->unidadMedida}}
                    <br>Stock: {{$producto->stockProducto}}
                    
                    </p>
                    <!-- <input class="form-control text-end form-control-sm" id="cantidad{{$producto->id}}" type="number" value=0><br> -->
                    <div class="d-flex justify-content-center align-item-center">
                        <div class="btn-group">
                            <a href="{{route ('catalogo.show',$producto->id)}}" class="btn btn-dark btn-sm">Ver detalles</a>
                        </div>
                        <!-- <button class="btn btn-outline-success btn-sm" type="button" onclick="agregaralcarritoclick(<?php echo $producto->id; ?>, document.getElementById('cantidad<?php echo $producto->id; ?>').value, <?php echo $producto->stockProducto; ?>)">Agregar</button> -->
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
</div>
        </div>
    </main>
  

<script src="/js/catalogo.js"></script>
<script src="/js/carrito.js"></script>
</body>
</html>
