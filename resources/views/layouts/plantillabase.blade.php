<?php
require 'php/config.php';
?>
@yield('php')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @yield('title','Tienda Cafenort')
    </title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="/css/estilos.css" rel="stylesheet">
    <link href="/css/plantilla.css" rel="stylesheet">
    
    <link rel="icon" type="image/png" href="/imagenes/naranja.png">
    @yield('css')
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
                    <a href="/" class="nav-link">Principal</a>
                </li>

                <li class="nav-item">
                    <a id="botonCatalogo" href=" {{ route('catalogo.index')}}" class="nav-link">Catalogo</a>
                    <!-- <button id="botonCatalogoSinRecarga" onclick="verCatalogo()" class="nav-link">Catalogo</button> -->
                </li>
                <!-- <li class="nav-item">
                    <form action="/api/verCarrito" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="productoscarrito" id="productoscarrito">
                        <button type="submit" class="nav-link">Cargar Carrito</button>
                    </form>
                </li> -->

                <li class="nav-item">
                    <button onclick="irCarrito()" class="nav-link">Carrito</button>
                    <!-- <a href="{{ url('/carrito')}}" class="nav-link">Carrito</a> -->
                </li>

                <!-- <li class="nav-item">
                    <a href="{{ route('listaproductos.index')}}" class="nav-link">Listado</a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('catalogo.create')}}" class="nav-link">Nuevo Producto</a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('clientes.index')}}" class="nav-link">Nuevo Cliente</a>
                </li> -->
            </ul>
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                    <div class="nav-link dropdown">
                        <button class="dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            @if (Route::has('login'))
                                @auth
                                    {{ Auth::user()->name }} ({{ Auth::user()->email }})
                                @else
                                    Iniciar Sesion
                                @endauth
                            @endif
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            @if (Route::has('login'))
                                @auth
                                    <li class="block px-4 py-2 text-xs">Administrar Cuenta</li>
                                    <li><a class="dropdown-item" href="{{ route('profile.show') }}">Perfil</a></li>
                                    <li>
                                    <form method="POST" action="{{ route('logout') }}" x-data>
                                        @csrf
                                        <button type="submit" class="dropdown-item">Cerrar Sesion</button>
                                    </form>
                                    </li>
                                @else
                                    <li class="block px-4 py-2 text-xs">Administrar Cuenta</li>
                                    <li><a class="dropdown-item" href="{{ route('login') }}">Iniciar Sesion</a></li>
                                @endauth
                            @endif
                        </ul>
                    </div>      
                </li>
            </ul>
            <!-- <a href="carrito.php" class="btn btn-primary">Carrito</a> -->
        </div>
        </div>
    </div>
    </header>
    
    
    <main>
        @yield('inicio')
    </main>
    <main>
        <div class="container">
            @yield('container')
        </div>
    </main>
    <footer class="bg-dark text-white">
        <div class="container-fluid">
            @yield('footer')
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/9a61bee9db.js" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/brands.js" crossorigin="anonymous"></script>
    <script src="/js/formulario.js"></script>
    <script src="https://sdk.mercadopago.com/js/v2"></script>
    @yield('js')
</body>
</html>