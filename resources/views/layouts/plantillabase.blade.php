<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @yield('title')
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="/css/estilos.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="/imagenes/naranja.png">
</head>
<body>
    <header>
    <div class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
        <a href="/" class="navbar-brand">
            <strong>Tienda Cafenort</strong>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarHeader">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a href=" {{ route('catalogo.index')}}" class="nav-link">Catalogo</a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">Carrito</a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('listaproductos.index')}}" class="nav-link">Listado</a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('catalogo.create')}}" class="nav-link">Mantenimiento</a>
                </li>
            </ul>
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                    <a href="#" class="nav-link">Iniciar Sesion</a>
                </li>
            </ul>
            <a href="carrito.php" class="btn btn-primary">Carrito</a>
        </div>
        </div>
    </div>
    </header>
    
    <main>
        <div class="container mt-5">
            @yield('container')
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>