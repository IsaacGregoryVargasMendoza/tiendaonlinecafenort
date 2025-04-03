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
                <!-- <a href="https://tienda.devesoft.tech" target="_blank" class="nav-item nav-link">Tienda</a> -->
                <a href="{{ route('website.software') }}" class="nav-item nav-link {{ isActive('website.software') }}">Software</a>
            </div>
            <a target="_blank" href="{{ asset('BROCHURE_DEVESOFT.pdf') }}" class="btn btn-primary py-2 px-4 ms-3">BROCHURE</a>
        </div>
    </nav>
    <!-- Navbar & Carousel End -->