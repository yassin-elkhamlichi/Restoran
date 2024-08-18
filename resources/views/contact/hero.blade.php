<div class="container-xxl position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
        <a href="{{url('/')}}" class="navbar-brand p-0">
            <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>Restoran</h1>
            <!-- <img src="img/logo.png" alt="Logo"> -->
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0 pe-4">
                <a href="home" class="nav-item nav-link ">Home</a>
                <a href="about" class="nav-item nav-link"> about</a>
                <a href="service" class="nav-item nav-link">Service</a>
                <a href="menu" class="nav-item nav-link">Menu</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu m-0">

                        <a href="team" class="dropdown-item">Our Team</a>
                        <a href="testimentail" class="dropdown-item">Testimonial</a>
                    </div>
                </div>
                <a href="contact" class="nav-item nav-link active">Contact</a>
                @if(Route::has('login'))
                    @auth
                        <a href="{{ url('adminnn') }}" class="nav-item nav-link">dashboard</a>
                    @else
                        <a href="{{ url('login') }}" class="nav-item nav-link">login</a>
                        @if(Route::has('register'))
                            <a href="{{ url('register') }}" class="nav-item nav-link">Register</a>
                        @endif
                    @endauth
            </div>
            @endif

    </nav>

    <div class="container-xxl py-5 bg-dark hero-header mb-5">
        <div class="container text-center my-5 pt-5 pb-4">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Contact Us</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Contact</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
