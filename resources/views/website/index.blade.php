@extends('layouts.website')

@section('content')
<style>
    .customers img {
        width: 100%;
        object-fit: cover;
    }

    .customers .col-12,
    .col-md-6,
    .col-lg-3 {
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>

<!-- Our Scope -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">

    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Nuestro Alcance</h5>
            <h1 class="mb-0">A Todo Nivel Nacional</h1>
        </div>
        <div class="text-center">
            <img class="img-peru-map" src="{{ asset('website/img/peru.png') }}" alt="">
        </div>
    </div>
</div>
<!-- Our Scope -->

<!-- Features Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Por qué elegirnos</h5>
            <h1 class="mb-0">Estamos aquí para hacer crecer su negocio exponencialmente</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-4">
                <div class="row g-5">
                    <div class="col-12 wow zoomIn" data-wow-delay="0.2s">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-cubes text-white"></i>
                        </div>
                        <h4>Adaptabilidad</h4>
                        <p class="mb-0">Nos adaptamos al cambio y avance de la tecnología para impulsar tu negocio.</p>
                    </div>
                    <div class="col-12 wow zoomIn" data-wow-delay="0.6s">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-award text-white"></i>
                        </div>
                        <h4>Compromiso</h4>
                        <p class="mb-0">Estamos comprometidos con tu crecimiento empresarial.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4  wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.1s" src="{{ asset('website/img/feature.jpg') }}" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="row g-5">
                    <div class="col-12 wow zoomIn" data-wow-delay="0.4s">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-users-cog text-white"></i>
                        </div>
                        <h4>Talento Profesional</h4>
                        <p class="mb-0">Nuestro equipo esta conformado por profesionales apasionados por lo que hacen.
                        </p>
                    </div>
                    <div class="col-12 wow zoomIn" data-wow-delay="0.8s">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <h4>Soporte 24/7</h4>
                        <p class="mb-0">Siempre disponibles para brindarte el mejor servicio y experiencia.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Features Start -->

<!-- Blog Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">

        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h1 class="mb-0">Algunos de Nuestros Servicios.</h1>
        </div>

        <h5 class="text-center fw-bold text-primary text-uppercase mt-5 mb-5">Compartamos</h5>

        <div class="row g-5">
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                <div class="blog-item bg-light rounded overflow-hidden">
                    <div class="blog-img position-relative overflow-hidden">
                        <img class="img-fluid" style="width:100%; height: 300px; object-fit:cover;" src="{{ asset('website/img/servicios/compartamos-1.jpeg') }}" alt="">
                        <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">Soporte On Site</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                <div class="blog-item bg-light rounded overflow-hidden">
                    <div class="blog-img position-relative overflow-hidden">
                        <img class="img-fluid" style="width:100%; height: 300px; object-fit:cover;" src="{{ asset('website/img/servicios/compartamos-2.jpeg') }}" alt="">
                        <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">Renovación Técnologica</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                <div class="blog-item bg-light rounded overflow-hidden">
                    <div class="blog-img position-relative overflow-hidden">
                        <img class="img-fluid" style="width:100%; height: 300px; object-fit:cover;" src="{{ asset('website/img/servicios/compartamos-3.jpeg') }}" alt="">
                        <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">Switch</a>
                    </div>
                </div>
            </div>
        </div>

        <h5 class="text-center fw-bold text-primary text-uppercase mt-5 mb-5">SUNAFIL</h5>

        <div class="row g-5">
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                <div class="blog-item bg-light rounded overflow-hidden">
                    <div class="blog-img position-relative overflow-hidden">
                        <img class="img-fluid" style="width:100%; height: 300px; object-fit:cover;" src="{{ asset('website/img/servicios/sunafil-1.jpeg') }}" alt="">
                        <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">CCTV</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                <div class="blog-item bg-light rounded overflow-hidden">
                    <div class="blog-img position-relative overflow-hidden">
                        <img class="img-fluid" style="width:100%; height: 300px; object-fit:cover;" src="{{ asset('website/img/servicios/sunafil-2.jpeg') }}" alt="">
                        <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">CCTV</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                <div class="blog-item bg-light rounded overflow-hidden">
                    <div class="blog-img position-relative overflow-hidden">
                        <img class="img-fluid" style="width:100%; height: 300px; object-fit:cover;" src="{{ asset('website/img/servicios/sunafil-3.jpeg') }}" alt="">
                        <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">CCTV</a>
                    </div>
                </div>
            </div>
        </div>

        <h5 class="text-center fw-bold text-primary text-uppercase mt-5 mb-5">Caja Trujillo</h5>

        <div class="row g-5">
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                <div class="blog-item bg-light rounded overflow-hidden">
                    <div class="blog-img position-relative overflow-hidden">
                        <img class="img-fluid" style="width:100%; height: 300px; object-fit:cover;" src="{{ asset('website/img/servicios/caja-trujillo-2.jpeg') }}" alt="">
                        <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">Renovación Técnologica</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                <div class="blog-item bg-light rounded overflow-hidden">
                    <div class="blog-img position-relative overflow-hidden">
                        <img class="img-fluid" style="width:100%; height: 300px; object-fit:cover;" src="{{ asset('website/img/servicios/caja-trujillo-3.jpeg') }}" alt="">
                        <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">Soporte On Site</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                <div class="blog-item bg-light rounded overflow-hidden">
                    <div class="blog-img position-relative overflow-hidden">
                        <img class="img-fluid" style="width:100%; height: 300px; object-fit:cover;" src="{{ asset('website/img/servicios/caja-trujillo-4.jpeg') }}" alt="">
                        <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">Renovación Técnologica</a>
                    </div>
                </div>
            </div>
        </div>
        
        <h5 class="text-center fw-bold text-primary text-uppercase mt-5 mb-5">Serpost</h5>

        <div class="row g-5">
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                <div class="blog-item bg-light rounded overflow-hidden">
                    <div class="blog-img position-relative overflow-hidden">
                        <img class="img-fluid" style="width:100%; height: 300px; object-fit:cover;" src="{{ asset('website/img/servicios/serpost-1.jpeg') }}" alt="">
                        <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">CCTV</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                <div class="blog-item bg-light rounded overflow-hidden">
                    <div class="blog-img position-relative overflow-hidden">
                        <img class="img-fluid" style="width:100%; height: 300px; object-fit:cover;" src="{{ asset('website/img/servicios/serpost-2.jpeg') }}" alt="">
                        <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">CCTV</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                <div class="blog-item bg-light rounded overflow-hidden">
                    <div class="blog-img position-relative overflow-hidden">
                        <img class="img-fluid" style="width:100%; height: 300px; object-fit:cover;" src="{{ asset('website/img/servicios/serpost-3.jpeg') }}" alt="">
                        <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">CCTV</a>
                    </div>
                </div>
            </div>
        </div>

        <h5 class="text-center fw-bold text-primary text-uppercase mt-5 mb-5">Poder Judicial</h5>

        <div class="row g-5">
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                <div class="blog-item bg-light rounded overflow-hidden">
                    <div class="blog-img position-relative overflow-hidden">
                        <img class="img-fluid" style="width:100%; height: 300px; object-fit:cover;" src="{{ asset('website/img/servicios/poder-judicial-1.jpeg') }}" alt="">
                        <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">Audiovisual</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                <div class="blog-item bg-light rounded overflow-hidden">
                    <div class="blog-img position-relative overflow-hidden">
                        <img class="img-fluid" style="width:100%; height: 300px; object-fit:cover;" src="{{ asset('website/img/servicios/poder-judicial-2.jpeg') }}" alt="">
                        <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">Audiovisual</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                <div class="blog-item bg-light rounded overflow-hidden">
                    <div class="blog-img position-relative overflow-hidden">
                        <img class="img-fluid" style="width:100%; height: 300px; object-fit:cover;" src="{{ asset('website/img/servicios/poder-judicial-3.jpeg') }}" alt="">
                        <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">Audiovisual</a>
                    </div>
                </div>
            </div>
        </div>

        <h5 class="text-center fw-bold text-primary text-uppercase mt-5 mb-5">Gloria</h5>

        <div class="row g-5">
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                <div class="blog-item bg-light rounded overflow-hidden">
                    <div class="blog-img position-relative overflow-hidden">
                        <img class="img-fluid" style="width:100%; height: 300px; object-fit:cover;" src="{{ asset('website/img/servicios/gloria-1.jpeg') }}" alt="">
                        <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">Cableado Estructurado</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                <div class="blog-item bg-light rounded overflow-hidden">
                    <div class="blog-img position-relative overflow-hidden">
                        <img class="img-fluid" style="width:100%; height: 300px; object-fit:cover;" src="{{ asset('website/img/servicios/gloria-2.jpeg') }}" alt="">
                        <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">Cableado Estructurado</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                <div class="blog-item bg-light rounded overflow-hidden">
                    <div class="blog-img position-relative overflow-hidden">
                        <img class="img-fluid" style="width:100%; height: 300px; object-fit:cover;" src="{{ asset('website/img/servicios/gloria-3.jpeg') }}" alt="">
                        <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">Cableado Estructurado</a>
                    </div>
                </div>
            </div>
        </div>

        <h5 class="text-center fw-bold text-primary text-uppercase mt-5 mb-5">Y Más</h5>

        <div class="row g-5">
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                <div class="blog-item bg-light rounded overflow-hidden">
                    <div class="blog-img position-relative overflow-hidden">
                        <img class="img-fluid" style="width:100%; height: 300px; object-fit:cover;" src="{{ asset('website/img/servicios/ups-1.jpeg') }}" alt="">
                        <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">Cableado Estructurado</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                <div class="blog-item bg-light rounded overflow-hidden">
                    <div class="blog-img position-relative overflow-hidden">
                        <img class="img-fluid" style="width:100%; height: 300px; object-fit:cover;" src="{{ asset('website/img/servicios/ups-2.jpeg') }}" alt="">
                        <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">Networking</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                <div class="blog-item bg-light rounded overflow-hidden">
                    <div class="blog-img position-relative overflow-hidden">
                        <img class="img-fluid" style="width:100%; height: 300px; object-fit:cover;" src="{{ asset('website/img/servicios/ups-3.jpeg') }}" alt="">
                        <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">Cableado Estructurado</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- Blog Start -->


<!-- Service Start -->
<!-- 
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Nuestros Servicios</h5>
            <h1 class="mb-0">Soluciones de TI Personalizadas para su Negocio</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="fa fa-shield-alt text-white"></i>
                    </div>
                    <h4 class="mb-3">Soporte Técnico Empresarial</h4>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="bi bi-laptop text-white"></i>
                    </div>
                    <h4 class="mb-3">Mantenimiento de Computadoras</h4>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="bi bi-camera-video-fill text-white"></i>
                    </div>
                    <h4 class="mb-3">Mantenimiento de Camaras de Seguridad</h4>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="fa fa-code text-white"></i>
                    </div>
                    <h4 class="mb-3">Desarrollo Web</h4>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="fab fa-android text-white"></i>
                    </div>
                    <h4 class="mb-3">Desarrollo de Apps</h4>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="fas fa-server text-white"></i>
                    </div>
                    <h4 class="mb-3">Servicio de Outsourcing TI</h4>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                <div class="position-relative bg-primary rounded h-100 d-flex flex-column align-items-center justify-content-center text-center p-5">
                    <h3 class="text-white mb-3">Llámanos para una cotización</h3>
                    <h4 class="text-white mb-0">+51 984 458 868</h4>
                    <h4 class="text-white mb-0">+51 974 673 306</h4>
                    <h4 class="text-white mb-0">+51 900 659 401</h4>
                </div>
            </div>
        </div>
    </div>
    </div>
 -->
<!-- Service End -->

<!-- Quote Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-7">
                <div class="section-title position-relative pb-3 mb-5">
                    <h5 class="fw-bold text-primary text-uppercase">Solicita una Cotización</h5>
                    <h1 class="mb-0">Necesita una Cotización Gratis? Siéntete libre de contactarnos</h1>
                </div>
                <div class="row gx-3">
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                        <h5 class="mb-4"><i class="fa fa-reply text-primary me-3"></i>Respuesta dentro de las 24
                            horas</h5>
                    </div>
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                        <h5 class="mb-4"><i class="fa fa-phone-alt text-primary me-3"></i>Asistencia telefónica las
                            24 horas</h5>
                    </div>
                </div>
                <!-- <p class="mb-4">Eirmod sed tempor lorem ut dolores. Aliquyam sit sadipscing kasd ipsum. Dolor ea et
                        dolore et at sea ea at dolor, justo ipsum duo rebum sea invidunt voluptua. Eos vero eos vero ea
                        et dolore eirmod et. Dolores diam duo invidunt lorem. Elitr ut dolores magna sit. Sea dolore
                        sanctus sed et. Takimata takimata sanctus sed.</p> -->
                <div class="d-flex align-items-center mt-2 wow zoomIn" data-wow-delay="0.6s">
                    <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                        <i class="fa fa-phone-alt text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="mb-2">Llamar para consultar cualquier duda</h5>
                        <h4 class="text-primary mb-0">+51 984 458 868</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="bg-primary rounded h-100 d-flex align-items-center p-5 wow zoomIn" data-wow-delay="0.9s">
                    <form>
                        <div class="row g-3">
                            <div class="col-xl-12">
                                <input type="text" class="form-control bg-light border-0" placeholder="Tu Nombre" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <input type="email" class="form-control bg-light border-0" placeholder="Tu Email" style="height: 55px;">
                            </div>
                            <div class="col-12">
                                <select class="form-select bg-light border-0" style="height: 55px;">
                                    <option selected>Selecciona un Servicio</option>
                                    <option value="1">Soporte Técnico</option>
                                    <option value="2">Mantenimiento de Equipos</option>
                                    <option value="3">Mantenimiento de Camaras de Seguridad</option>
                                    <option value="3">Desarrollo Web / Apps</option>
                                    <option value="3">Servicio de Outsourcing TI</option>
                                    <option value="3">Otros</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <textarea class="form-control bg-light border-0" rows="3" placeholder="Mensaje"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-dark w-100 py-3" type="submit">Solicitar Cotización</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Quote End -->


<!-- Team Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Nuestro Equipo</h5>
            <h1 class="mb-0">Profesionales Comprometidos en Brindarle el Mejor Servicio.</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                <div class="team-item bg-light rounded overflow-hidden">
                    <div class="team-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="{{ asset('website/img/equipo/gustavo.jpg') }}" alt="">
                        <div class="team-social">
                            <!-- <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                        class="fab fa-twitter fw-normal"></i></a> -->
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href="https://www.facebook.com/gustavosegundoo"><i class="fab fa-facebook-f fw-normal"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href="https://www.instagram.com/orsegundo/"><i class="fab fa-instagram fw-normal"></i></a>
                            <!-- <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                        class="fab fa-linkedin-in fw-normal"></i></a> -->
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href="https://wa.me/984458868"><i class="bi bi-whatsapp"></i></a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <h4 class="text-primary">Gustavo Otiniano</h4>
                        <p class="text-uppercase m-0">Director en proyectos, especialista en seguridad y pruebas de
                            testeo.</p><br><br>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                <div class="team-item bg-light rounded overflow-hidden">
                    <div class="team-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="{{ asset('website/img/equipo/manuel.png') }}" alt="">
                        <div class="team-social">
                            <!-- <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                        class="fab fa-twitter fw-normal"></i></a> -->
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href="https://www.facebook.com/manuel.astolazaro/"><i class="fab fa-facebook-f fw-normal"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href="https://www.instagram.com/manuelastolazaro/"><i class="fab fa-instagram fw-normal"></i></a>
                            <!-- <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                        class="fab fa-linkedin-in fw-normal"></i></a> -->
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href="https://wa.me/900659401"><i class="bi bi-whatsapp"></i></a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <h4 class="text-primary">Manuel Asto</h4>
                        <p class="text-uppercase m-0">Desarrollador Front End, especialista en GUI, diseño y
                            maquetado de aplicaciones.</p><br>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                <div class="team-item bg-light rounded overflow-hidden">
                    <div class="team-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="{{ asset('website/img/equipo/isaac.png') }}" alt="">
                        <div class="team-social">
                            <!-- <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                        class="fab fa-twitter fw-normal"></i></a> -->
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href="https://www.facebook.com/profile.php?id=100007114727904"><i class="fab fa-facebook-f fw-normal"></i></a>
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href="https://www.instagram.com/isaacvargasmendoza/"><i class="fab fa-instagram fw-normal"></i></a>
                            <!-- <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i
                                        class="fab fa-linkedin-in fw-normal"></i></a> -->
                            <a class="btn btn-lg btn-primary btn-lg-square rounded" href="https://wa.me/974673306"><i class="bi bi-whatsapp"></i></a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <h4 class="text-primary">Isaac Vargas</h4>
                        <p class="text-uppercase m-0">Desarrollador Back-End especialista en modelado de sistemas,
                            analisis del problema y planteamiento de soluciones.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->

<!-- Vendor Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5 mb-5">

        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Proyectos en los que Participamos</h5>
        </div>

        <div class="row customers">
            <div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-3">
                <img src="{{ asset('website/img/clientes/grupo-jyg-computer-ti.png') }}" alt="">
            </div>
            <div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-3">
                <img src="{{ asset('website/img/clientes/bembos.png') }}" alt="">
            </div>
            <div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-3">
                <img src="{{ asset('website/img/clientes/china-wok.png') }}" alt="">
            </div>
            <div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-3">
                <img src="{{ asset('website/img/clientes/don-belisario.png') }}" alt="">
            </div>
            <div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-3">
                <img src="{{ asset('website/img/clientes/electrokit.png') }}" alt="">
            </div>
            <div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-3">
                <img src="{{ asset('website/img/clientes/caja-trujillo.jpg') }}" alt="">
            </div>
            <div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-3">
                <img src="{{ asset('website/img/clientes/compartamos.png') }}" alt="">
            </div>
            <div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-3">
                <img src="{{ asset('website/img/clientes/gkm-technology.png') }}" alt="">
            </div>
            <div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-3">
                <img src="{{ asset('website/img/clientes/hp.png') }}" alt="">
            </div>
            <div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-3">
                <img src="{{ asset('website/img/clientes/gloria.png') }}" alt="">
            </div>
            <div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-3">
                <img src="{{ asset('website/img/clientes/popeyes.png') }}" alt="">
            </div>
            <div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-3">
                <img src="{{ asset('website/img/clientes/security-dg.png') }}" alt="">
            </div>
            <div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-3">
                <img src="{{ asset('website/img/clientes/serpost.png') }}" alt="">
            </div>
            <div class="col-12 col-md-6 col-lg-3 mb-5 mb-md-3">
                <img src="{{ asset('website/img/clientes/high-service.png') }}" alt="">
            </div>
        </div>
    </div>
</div>
<!-- Vendor End -->

@stop