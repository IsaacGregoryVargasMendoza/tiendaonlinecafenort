<!DOCTYPE html>
<html lang="es">

<head>
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
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End -->

    @include('partials.website.topbar')

    <div class="container-fluid position-relative p-0">
        @include('partials.website.navbar')

        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('website/img/carousel-1.jpg') }}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Creatividad e Innovación
                            </h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Soluciones Digitales Creativas e
                                Innovadoras</h1>
                            <a href="#" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Cotización Gratis</a>
                            <a href="" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contáctanos</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('website/img/carousel-2.jpg') }}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Venta e Instalación de Camaras de
                                Seguridad</h1>
                            <a href="#" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Cotización Gratis</a>
                            <a href="" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contáctanos</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('website/img/carousel-2.jpg') }}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Venta y Mantenimiento de Equipos de
                                Cómputo</h1>
                            <a href="#" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Cotización Gratis</a>
                            <a href="" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contáctanos</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('website/img/carousel-2.jpg') }}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Desarrollo de Aplicaciones Web /
                                Móvil</h1>
                            <a href="#" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Cotización Gratis</a>
                            <a href="" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contáctanos</a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Siguiente</span>
            </button>
        </div>
    </div>



    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Digite lo que desea buscar">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->


    @yield('content')

    @include('partials.website.footer')


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('website/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('website/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('website/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('website/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('website/lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('website/js/main.js') }}"></script>
</body>

</html>