<!DOCTYPE html>
<html lang="en">

<head>
   @include('css.css')
</head>

<body>
<div class="container-xxl bg-white p-0">
    <!-- Spinner Start -->
   @include('layout.spinner')
    <!-- Spinner End -->

    <!-- Navbar & Hero Start -->
   @include('contact.hero')
    <!-- Navbar & Hero End -->


    <!-- Contact Start -->
   @include('contact.contact')
    <!-- Contact End -->


    <!-- Footer Start -->
   @include('layout.footer')
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>

<!-- JavaScript Libraries -->
    @include('js.js')
</body>

</html>
