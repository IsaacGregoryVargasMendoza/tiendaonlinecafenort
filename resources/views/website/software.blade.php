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

    <style>
        .image-container {
            width: 100%;
            height: 310px;
            overflow: hidden;
            display: flex;
            justify-content: center;
            background-color: #071d3612;
        }

        .image-container img {
            /* width: 100%; */
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .image-container:hover img {
            transform: scale(1.5);
        }
    </style>

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
    </div>

    <!-- Software Item -->
    <div class="container-fluid py-5 mt-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
            <div class="col-lg-5">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">Sistema de gestión de inventario TI </h5>
                        <h1 class="mb-0">SGITI</h1>
                    </div>
                    <div class="row gx-3">
                        <div class="wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-4"><i class="fa fa-reply text-primary me-3"></i>Mantenga un control y seguimiento de los activos de TI en su empresa con nuestro sistema de gestión de inventario de TI.</h5>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mt-2 wow zoomIn" data-wow-delay="0.6s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Solicita tu demo!</h5>
                            <h5 class="text-primary mb-0">+51 974 673 306 / +51 900 659 401</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="image-container wow zoomIn" data-wow-delay="0.9s">
                        <img src="imagenes/software/sgiti.jpg" alt="Descripción de la imagen">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Software Item -->

    <!-- Software Item -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="image-container wow zoomIn" data-wow-delay="0.9s">
                        <img src="imagenes/software/senia-juice.jpg" alt="Descripción de la imagen">
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">Juguería móvil</h5>
                        <h1 class="mb-0">Seña Juice</h1>
                    </div>
                    <div class="row gx-3">
                        <div class="wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-4"><i class="fa fa-reply text-primary me-3"></i>Agilice la toma de pedidos, a través del autoservicio, brindándole a sus clientes una experiencia móvil.</h5>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mt-2 wow zoomIn" data-wow-delay="0.6s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Solicita tu demo!</h5>
                            <h5 class="text-primary mb-0">+51 974 673 306 / +51 900 659 401</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Software Item -->

    <!-- Software Item -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-5">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">Sistema de gestión de servicios TI </h5>
                        <h1 class="mb-0">SGSTI</h1>
                    </div>
                    <div class="row gx-3">
                        <div class="wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-4"><i class="fa fa-reply text-primary me-3"></i>Optimice la gestión de sus servicios de soporte técnico y seguimiento de con nuestra solución web.</h5>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mt-2 wow zoomIn" data-wow-delay="0.6s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Solicita tu demo!</h5>
                            <h5 class="text-primary mb-0">+51 974 673 306 / +51 900 659 401</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="image-container wow zoomIn" data-wow-delay="0.9s">
                        <img src="imagenes/software/sgsti.jpg" alt="Descripción de la imagen">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Software Item -->


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