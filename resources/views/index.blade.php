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
  <link rel="stylesheet" href="css/index.css">

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
            <a class="nav-link active" aria-current="page" href="#">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#caracteristicas">Caracteristicas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#acercaDe">Acerca de</a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="#preguntasFrecuentes">Preguntas Frecuentes</a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link" href="#equipo">Equipo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contactanos">Contactanos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="catalogo">Catalogo</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- HEADES o CABEZERA-->
  <header class="main-header">
    <div class="background-overlay text-white py-5">
      <div class="container">
        <div class="row ">
          <div class="col-md-6 text-center justify-content-center align-self-center">
            <h1 class="display-2">Soluciones para tu Negocio?</h1>
            <p>Empresa de desarrollo de paginas web, aplicaciones moviles, aplicaciones de escritorio y mas... Brindamos
              soluciones para ti y tu negocio.</p>
            <a href="#" class="btn btn-outline-secondary btn-lg text-white">Leer más</a>
          </div>
          <div class="col-md-6">
            <img src="imagenes/laptop02.png" alt="Imagen de Productos" class="img-fluid" width="450">
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- NEWSLETTER-->
  <!-- <section class="bg-dark text-white py-5">
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
  </section> -->

  <!--  CARACTERISTICAS o FEATURE-->
  <section class="py-5" id="caracteristicas">
    <div class="container">
      <h2 class="text-center pb-3">Caracteristicas</h2>
      <div class="row">
        <div class="col-md-3 caracteristica">
          <div class="card text-center border-secondary">
            <div class="card body">
              <h3>Innovacion</h3>
              <p>Empresa que dia a dia busca la forma de mejorar soluciones creativas a los problemas.</p>
              <br>
            </div>
          </div>
        </div>
        <div class="col-md-3 caracteristica">
          <div class="card text-center text-white">
            <div class="card body bg-secondary">
              <h3>Responsabilidad</h3>
              <p>Cumplimos con los plazos de entrega asegurando la culminacion de su solucion en el tiempo establecido.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-3 caracteristica">
          <div class="card text-center border-secondary">
            <div class="card body">
              <h3>Experiencia</h3>
              <p>Contamos con los mejores profesionales a cargo, con una amplia experiencia brindando las mejores
                soluciones.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 caracteristica">
          <div class="card text-center text-white">
            <div class="card body bg-secondary">
              <h3>Calidad de atencion</h3>
              <p>Nuestros clientes son los mas importantes y estamos a su servicio brindandole el mejor servicio que
                podria encontrar.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- About Acerca de ...-->
  <section class="bg-light text-center" id="acercaDe">
    <div class="container">
      <div class="row">
        <div class="mt-5 mb-5">
          <h3 class="pb-3">¿Por que elegir a Devesoft?</h3>
          <p>Porque somos una empresa con amplia experiencia dedicada a satifascer la necesidad de nuestros clientes
            brindandoles soluciones rapidas, seguras y sobre todo faciles de usar.</p>
          <p>Porque contamos con profesionales con experiencia en el desarrollo de soluciones tecnologicas.</p>
          <p>Porque somos la empresa lider en desarrollo de soluciones en el mercado.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Preguntas frecuentes-->
  <!-- <section class="container text-center " id="preguntasFrecuentes">
    <div class="row">
      <div class="mt-5">
        <h3>Preguntas Frecuentes</h3>
        <div class="accordion" id="accordionFlushExample">
          <div class="accordion-item">
            <h2 class="d-grid" id="flush-headingOne ">
              <button class="btn btn-light btn-lg btn-block" type="button" data-bs-toggle="collapse"
                data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                Question one?
              </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
              data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the
                <code>.accordion-flush</code> class. This is the first item's accordion body.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="d-grid" id="flush-headingTwo">
              <button class="btn btn-light btn-lg btn-block" type="button" data-bs-toggle="collapse"
                data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                Question Two?
              </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
              data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the
                <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being
                filled with some actual content.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="d-grid" id="flush-headingThree">
              <button class="btn btn-light btn-lg btn-block" type="button" data-bs-toggle="collapse"
                data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                Question Three?
              </button>
            </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
              data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the
                <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting
                happening here in terms of content, but just filling up the space to make it look, at least at first
                glance, a bit more representative of how this would look in a real-world application.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->

  <!-- EQUIPO o TEAM-->
  <section class="team text-center" id="equipo">
    <div class="container p-5">
      <h1 class="text-white">Equipo</h1>
      <p class="text-white">Nuestro equipo de trabajo esta comprometido en brindarte el mejor servicio.</p>
      <div class="row">
        <div class="col-lg-4 mt-2">
          <div class="card">
            <div class="car-body">
              <!-- <img src="imagenes/gustavo.png" alt="" class="img-fluid img-thumbnail w-100"> -->
              <img src="imagenes/gustavo.png" alt="" class="m-0 p-1">
              <h3>Gustavo Otiniano</h3>
              <p>Director en proyectos, especialista en seguridad y pruebas de testeo.</p>
              <br>
              <div class="d-flex flex-row justify-content-center">
                <div class="p-4">
                  <a href="https://www.facebook.com/gustavosegundoo" target="_blanck"><i
                      class="fab fa-facebook"></i></a>
                </div>
                <div class="p-4">
                  <a href="https://www.instagram.com/orsegundo/" target="_blanck"><i
                      class="fab fa-instagram text-danger"></i></a>
                </div>
                <div class="p-4">
                  <a href="https://wa.me/984458868" target="_blanck"><i class="fab fa-whatsapp text-success"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mt-2">
          <div class="card">
            <div class="car-body">
              <!-- <img src="imagenes/persona.png" alt="" class="img-fluid img-thumbnail w-100"> -->
              <img src="imagenes/manuel.png" alt="" class="m-0 p-1">
              <h3>Manuel Asto</h3>
              <p>Desarrollador Front End, especialista en GUI, diseño y maquetado de aplicaciones.</p>
              <br>
              <div class="d-flex flex-row justify-content-center">
                <div class="p-4">
                  <a href="https://www.facebook.com/manuel.astolazaro/" target="_blanck"><i
                      class="fab fa-facebook"></i></a>
                </div>
                <div class="p-4">
                  <a href="https://www.instagram.com/manuelastolazaro/" target="_blanck"><i
                      class="fab fa-instagram text-danger"></i></a>
                </div>
                <div class="p-4">
                  <a href="https://wa.me/900659401" target="_blanck"><i class="fab fa-whatsapp text-success"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mt-2">
          <div class="card">
            <div class="car-body">
              <!-- <div class="container bg-primary m-0 p-0"> -->
              <img src="imagenes/isaac.png" alt="" class="m-0 p-1">
              <!-- </div> -->
              <h3>Isaac Vargas</h3>
              <p>Desarrollador Back-End especialista en modelado de sistemas, analisis del problema y planteamiento de
                soluciones.</p>
              <div class="d-flex flex-row justify-content-center">
                <div class="p-4">
                  <a href="https://www.facebook.com/profile.php?id=100007114727904" target="_blanck"><i
                      class="fab fa-facebook"></i></a>
                </div>
                <div class="p-4">
                  <a href="https://www.instagram.com/isaacvargasmendoza/" target="_blanck"><i
                      class="fab fa-instagram text-danger"></i></a>
                </div>
                <div class="p-4">
                  <a href="https://wa.me/974673306" target="_blanck"><i class="fab fa-whatsapp text-success"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Carrusel -->
  <section class="text-center pt-3">
    <div class="text-center">
      <h1 class="text-black">Nuestros clientes</h1>
      <div class="contenedor-carrusel">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="imagenes/clientes/bembos.png" class="d-inline" alt="...">
              <img src="imagenes/clientes/china-wok.png" class="d-inline" alt="...">
              <img src="imagenes/clientes/don-belisario.png" class="d-inline" alt="...">
            </div>
            <div class="carousel-item">
              <img src="imagenes/clientes/electrokit.png" class="d-inline" alt="...">
              <img src="imagenes/clientes/gkm-technology.png" class="d-inline" alt="...">
              <img src="imagenes/clientes/gloria.png" class="d-inline" alt="...">
            </div>
            <div class="carousel-item">
              <img src="imagenes/clientes/popeyes.png" class="d-inline" alt="...">
              <img src="imagenes/clientes/security-dg.png" class="d-inline" alt="...">
              <img src="imagenes/clientes/serpost.png" class="d-inline" alt="...">
            </div>
            <div class="carousel-item">
              <img src="imagenes/clientes/high-service.png" class="d-inline" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>

      <!-- Elementos ocultos -->
      <div class="contenedor-carrusel-2">
        <div id="carousel2" class="carousel slide carousel-fade" data-bs-ride="carousel">
          <div class="carousel-inner-2">
            <div class="carousel-item active">
              <img src="imagenes/clientes/bembos.png" class="d-inline" alt="...">
            </div>
            <div class="carousel-item">
              <img src="imagenes/clientes/china-wok.png" class="d-inline" alt="...">
            </div>
            <div class="carousel-item">
              <img src="imagenes/clientes/don-belisario.png" class="d-inline" alt="...">
            </div>
            <div class="carousel-item">
              <img src="imagenes/clientes/electrokit.png" class="d-inline" alt="...">
            </div>
            <div class="carousel-item">
              <img src="imagenes/clientes/gkm-technology.png" class="d-inline" alt="...">
            </div>
            <div class="carousel-item">
              <img src="imagenes/clientes/gloria.png" class="d-inline" alt="...">
            </div>
            <div class="carousel-item">
              <img src="imagenes/clientes/popeyes.png" class="d-inline" alt="...">
            </div>
            <div class="carousel-item">
              <img src="imagenes/clientes/security-dg.png" class="d-inline" alt="...">
            </div>
            <div class="carousel-item">
              <img src="imagenes/clientes/serpost.png" class="d-inline" alt="...">
            </div>
            <div class="carousel-item">
              <img src="imagenes/clientes/high-service.png" class="d-inline" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carousel2" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carousel2" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
  </section>

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
              <textarea name="" id="" cols="30" rows="10" class="form-control"
                placeholder="Escribe cual es tu mensaje"></textarea>
            </div>
            <div class="d-grid">
              <button class="btn btn-primary btn-lg btn-block">Enviar Mensaje</button>
            </div>
          </form>
        </div>
        <div class="col-lg-3 align-self-center">
          <img src="imagenes/logo-negro.png" class="img-fluid" alt="Logo de empresa">
        </div>
      </div>
    </div>
  </section>

  <!--  FOOTER-->
  <footer>

    <div class="footer-body">
      <div>
        <h4><strong>INFORMACIÓN DE CONTACTO</strong></h4>
        <ul class="list-unstyled">
          <hr id="hr_border2">
          <li></li>
          <li><i class="fa fa-phone-square"></i> +51 984 458 868</li>
          <li><i class="fa fa-phone-square"></i> +51 974 673 306</li>
          <li><i class="fa fa-phone-square"></i> +51 900 659 401</li>
          <li><i class="fa fa-envelope"></i> Email:
            <a href="mailto:ventas@devesoft.tech" style="text-decoration: none;">
              <span class="text-header" style="cursor: pointer; color: white;">
                &nbsp;ventas@devesoft.tech
              </span>
            </a>
          </li>
        </ul>
      </div>
      <div>
        <h4><strong>INFORMACIÓN DE LA EMPRESA</strong> </h4>
        <hr id="hr_border2">
        <ul class="list-unstyled">
          <li><strong>Razón Social:</strong> DeveSoft E.I.R.L.</li>
          <li><strong>CUENTA BCP:</strong> </li>
          <li class="text-header" style="color: white;">
            <ul>
              <li><strong>Nº de cta: </strong> <u>57090042010079</u></li>
              <li><strong>CCI:</strong> <u>00257019004201007904</u></li>
            </ul>
          </li>
          <li><strong>CUENTA INTERBANK :</strong> </li>
          <li class="text-header" style="color: white;">
            <ul>
              <li><strong>Nº de cta: </strong> <u>8983342515098</u></li>
              <li><strong>CCI:</strong> <u>00389801334251509843</u></li>
            </ul>
          </li>
        </ul>
      </div>
      <div>
        <h4><strong>REDES SOCIALES</strong> </h4>
        <hr id="hr_border2">
        <h4 class="menu">También puedes seguirnos por: </h4>
        <ul class="list-inline">
          <li>
            <a class="text-white" href="https://www.facebook.com/DeveSoft.03/" target="_blank"><i
                class="fa fa-facebook fa-lg"></i>acebook 
            </a>
            /
            <a class="text-white" target="_blank" href="https://app.titan.email/mail/">
              <i class="fa fa-envelope fa-lg"></i> Accesso a Correo
            </a>
          </li>
        </ul>
      </div>
    </div>


    <div class="p-3 text-center text-white">
      <p>Copyright &copy; 2023</p>
    </div>
  </footer>
</body>
</html>