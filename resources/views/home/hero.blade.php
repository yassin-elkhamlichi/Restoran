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
            <a href="home" class="nav-item nav-link active">Home</a>
            <a href="about" class="nav-item nav-link"> about</a>
            <a href="service" class="nav-item nav-link">Service</a>
            <a href="menu" class="nav-item nav-link">Menu</a>
           
            <a href="contact" class="nav-item nav-link">Contact</a>
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

        </div>

</nav>

<div class="container-xxl py-5 bg-dark hero-header mb-5">
    <div class="container my-5 py-5">
        <div class="row align-items-center g-5">
            <div class="col-lg-6 text-center text-lg-start">
                <h1 class="display-3 text-white animated slideInLeft">Enjoy Our<br>Delicious Meal</h1>
                <p class="text-white animated slideInLeft mb-4 pb-2">Relish the finest flavors at Restoran. Savor our expertly crafted dishes and enjoy an exceptional dining experience. Reserve your table today and embark on a culinary journey like no other.</p>
                <a href="#b" class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">Book A Table</a>
            </div>
            <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                <img class="img-fluid" src="img/hero.png" alt="">
            </div>
        </div>
    </div>
</div>
</div>
