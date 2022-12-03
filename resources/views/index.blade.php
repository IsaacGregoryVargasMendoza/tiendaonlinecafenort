@extends('layouts.plantillabase')

@section('title')
Producto
@endsection

@section('inicio')
<header class="main-header py-3">
          <div class="background-overlay text-white py-5">
              <div class="container py-5">
                  <div class="row py-5">
                    <div class="col-md-6 text-center justify-content-center align-self-center">
                        <h1 class="display-2">¿Buscas recursos para tu juguer&iacute;a?</h1>
                        <p class="lead">Nosotros te los proveemos. Somos la empresa l&iacute;der en distribuci&oacute;n de productos para juguer&iacute;as, incluimos materia prima, productos auxiliares, envases, materiales para limpieza entre otros.</p>
                        <a href="{{ route('catalogo.index')}}" class="btn btn-outline-secondary btn-lg text-white">Ver Catalogo</a>
                    </div>
                    <div class="col-md-6">
                        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-bs-interval="10000">
                                <img src="/imagenes/durazno.jpeg" class="img-fluid" alt="...">
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                <img src="/imagenes/carga.jpeg" class="img-fluid" alt="...">
                                </div>
                                <div class="carousel-item">
                                <img src="/imagenes/mercaderia.jpeg" class="img-fluid" alt="...">
                                </div>
                                <div class="carousel-item">
                                <img src="/imagenes/rocoto.jpeg" class="img-fluid" alt="...">
                                </div>
                                <div class="carousel-item">
                                <img src="/imagenes/perejil.jpeg" class="img-fluid" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                  </div>
              </div>
          </div>
      </header>
      <section class="bg-dark text-white py-5">
          <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <input type="text" class="form-control form-control-lg" placeholder="Ingresa tu nombre">
                </div>
                <div class="col-md-4">
                    <input type="email" class="form-control form-control-lg" placeholder="Ingresa tu email">
                </div>
                <div class="col-md-4 d-grid">
                    <button class="btn btn-primary btn-lg">
                        Suscribete
                    </button>
                </div>
            </div>
          </div>
      </section>
      <!--  CARACTERISTICAS o FEATURE-->
      <section class="py-5" id="caracteristicas">
        <div class="container-fluid">
            <h2 class="text-center pb-3">Caracteristicas</h2>
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="15000">
                        <div class="row flex-row flex-nowrap">
                            <div class="col-md-3 col-3">
                                <div class="card text-center border-secondary">
                                    <div class="card body" style="height: 180px;">
                                        <h3>Respeto</h3>
                                        <p>Comprende la libertad de pensamiento de los trabajadores y clientes.</p>
                                        <br>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-3">
                                <div class="card text-center text-white">
                                    <div class="card body bg-secondary" style="height: 180px;">
                                        <h3>Excelencia</h3>
                                        <p>La empresa logra que los clientes tengan una percepción superior a sus expectativas.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-3">
                                <div class="card text-center border-secondary">
                                    <div class="card body" style="height: 180px;">
                                        <h3>Eficiencia</h3>
                                        <p>Optimiza sus recursos para alcanzar sus objetivos.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-3">
                                <div class="card text-center text-white">
                                    <div class="card body bg-secondary" style="height: 180px;">
                                        <h3>Responsabilidad</h3>
                                        <p>La empresa cumple con las funciones establecidas, comprometiéndose con el servicio de calidad.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="5000">
                        <div class="row flex-row flex-nowrap">
                            <div class="col-md-3 col-3">
                                <div class="card text-center text-white">
                                    <div class="card body bg-secondary" style="height: 180px;">
                                        <h3>Compromiso</h3>
                                        <p>Esta comprometido con el bienestar de los colaboradores y clientes para lograr un desarrollo en la empresa.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div> 
    </section>

    <!-- Donde nos Ubicamos ...-->
    <section class="bg-light">
        <div class="container py-4">
            <h2 class="text-center pb-3">Ubicacion</h2>
            <div class="row py-1">
                <div class="col-md-5 text-center justify-content-center align-self-center">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.7079291737314!2d-79.03961298584164!3d-8.131188483650224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91ad3d6c15b173df%3A0x7e356b29964e9f85!2sAv.%20Los%20Angeles%20400%2C%20V%C3%ADctor%20Larco%20Herrera%2013009!5e0!3m2!1ses-419!2spe!4v1665619707801!5m2!1ses-419!2spe" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-md-7 text-center justify-content-center align-self-center">
                    <p class="lead">Estamos muy cerca de ti. Para proveerte lo mas rapido posible. Av los angeles 400, urbanizacion California, referencia en la misma cuadra de WONG de california y frente a la Positiva.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Acerca de ...-->
    <section class="text-center" id="acercaDe">
        <div class="container">
            <div class="row">
                <div class="m-5">
                    <h3 class="pb-3">¿Por que elegir a Cafenort?</h3>
                    <p class="lead">Porque nos dedicamos a satifascer la necesidad de nuestros clientes brindandoles soluciones rapidas y seguras.</p>
                    <p class="lead">Porque contamos con personal con amplia experiencia en el rubro de juguerias que conocen lo que deseas.</p>
                    <p class="lead">Porque somos la empresa pionera en proveer recursos de calidad a juguerias de trujillo.</p>
                    <p class="lead">Somos el servicio de logistica del grupo San Agustin.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Preguntas frecuentes-->
    <!-- <section class="container text-center" id="preguntasFrecuentes">
        <div class="row">
            <div class="">
                <h3>Preguntas Frecuentes</h3>
                <div class="accordion" id="accordionFlushExample">
                    <div class="accordion-item">
                      <h2 class="d-grid" id="flush-headingOne ">
                        <button class="btn btn-light btn-lg btn-block" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                          Question one?
                        </button>
                      </h2>
                      <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="d-grid" id="flush-headingTwo">
                        <button class="btn btn-light btn-lg btn-block" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                          Question Two?
                        </button>
                      </h2>
                      <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="d-grid" id="flush-headingThree">
                        <button class="btn btn-light btn-lg btn-block" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                          Question Three?
                        </button>
                      </h2>
                      <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- CONTACTO-->
    <section class="bg-light py-5" id="contactanos">
        <div class="container">
          <div class="row">
            <div class="col-lg-9">
              <h3>Contactanos</h3>
              <p>Con gusto nuestro equipo de trabajo atenderas tus dudas, recibiran tus comentarios.</p>
              <form action="">
                <div class="input-group mb-3">
                  <i class="fas fa-user-alt input-group-text"></i>
                  <input type="text" class="form-control" placeholder="Nombre">
                </div>
                <div class="input-group mb-3">
                  <i class="fas fa-at input-group-text"></i>
                  <input type="email" class="form-control" placeholder="Email">
                </div>
                <div class="input-group mb-3">
                  <i class="fas fa-pencil-alt input-group-text"></i>
                  <textarea name="" id="" cols="30" rows="10" class="form-control" placeholder="Escribe cual es tu mensaje"></textarea>
                </div>
                <div class="d-grid">
                  <button class="btn btn-primary btn-lg btn-block">Enviar Mensaje</button>
                </div>
              </form>
            </div>
            <div class="col-lg-3 align-self-center">
              <img src="/imagenes/logo.png" class="img-fluid" alt="Logo de empresa">
            </div>
          </div>
        </div>
    </section>
@endsection

@section('footer')
<!-- Pie de Pagina-->
<nav class="row p-5 d-flex">
    <div class="col-lg-4 justify-content-center align-self-center">
        <a href=""><img class="devesoft" src="/imagenes/devesoftblanco.png" alt="logo"></a>
    </div>
    <!-- <div class="col-lg-2">
        <p class="h5">Links</p>
        <div class="mb-2">
            <a href="" class="text-secondary text-decoration-none">opcion1</a>
        </div>
        <div class="mb-2">
            <a href="" class="text-secondary text-decoration-none">opcion1</a>
        </div>
        <div class="mb-2">
            <a href="" class="text-secondary text-decoration-none">opcion1</a>
        </div>
        <div class="mb-2">
            <a href="" class="text-secondary text-decoration-none">opcion1</a>
        </div>
    </div> -->
    <!-- <div class="col-lg-2 align-self-center">
        <p class="h5">Nosotros</p>
    </div> -->
    <div class="col-lg-2 align-self-center">
        <p class="h5">Redes Sociales</p>
        <div class="row">
            <div class="col-3">
                <a class="text-white text-decoration-none" href="https://www.facebook.com/jugueriasanagustin.tradicional" target="_blank"><i class="fa fa-brands fa-facebook"></i></a>
            </div>
            <div class="col-3">
                <a class="text-white text-decoration-none" href="https://www.instagram.com/jugueriasanagustin.tradicional/?hl=es-la" target="_blank"><i class="fa fa-brands fa-instagram"></i></a>
            </div>
            <div class="col-3">
                <a class="text-white text-decoration-none" href="https://wa.me/941529156" target="_blank"><i class="fa fa-brands fa-whatsapp"></i></a>
            </div>
        </div>
    </div>
</nav>
@endsection