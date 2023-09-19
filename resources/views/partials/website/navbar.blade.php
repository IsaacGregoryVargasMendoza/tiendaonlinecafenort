    <!-- Navbar & Carousel Start -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark px-5 py-3 py-lg-0">
        <a href="/" class="navbar-brand p-0">
            <h1 class="m-0"><!-- <i class="fa fa-user-tie me-2"></i> -->DeveSoft</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="{{ route('website.index') }}" class="nav-item nav-link {{ isActive('website.index') }}">Home</a>
                <a href="{{ route('catalogo.index') }}" class="nav-item nav-link {{ isActive('catalogo.index') }}">Catálogo</a>
                <a href="{{ route('website.software') }}" class="nav-item nav-link {{ isActive('website.software') }}">Software</a>
                <!-- <a href="#" class="nav-item nav-link">Nosotros</a>
                <a href="#" class="nav-item nav-link">Servicios</a> -->
                <!-- <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Blog</a>
                        <div class="dropdown-menu m-0">
                            <a href="blog.html" class="dropdown-item">Blog Grid</a>
                            <a href="detail.html" class="dropdown-item">Blog Detail</a>
                        </div>
                    </div> -->
                <!-- <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu m-0">
                            <a href="price.html" class="dropdown-item">Pricing Plan</a>
                            <a href="feature.html" class="dropdown-item">Our features</a>
                            <a href="team.html" class="dropdown-item">Team Members</a>
                            <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                            <a href="quote.html" class="dropdown-item">Cotización Gratis</a>
                        </div>
                    </div> -->
                <!-- <a href="#" class="nav-item nav-link">Contáctanos</a> -->
            </div>
            <butaton type="button" class="btn text-primary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></butaton>
            <a href="{{ route('login') }}" class="btn btn-primary py-2 px-4 ms-3">Log In</a>
        </div>
    </nav>
    <!-- Navbar & Carousel End -->