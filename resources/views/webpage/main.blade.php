<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>HSTUDIO</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <script defer src="https://unpkg.com/alpinejs@3.10.3/dist/cdn.min.js"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</head>

<body>
    <!-- Navbar Start -->
    <x-navbar/>
    <!-- Navbar End -->

    @if (session()->has('success'))
    <div x-data = "{show:true}"
        x-init= "setTimeout(()=> false, 4000)"
        x-show= "show"
        class = "fixed bg-blue-500 text-blue py-2 px-4 rounded-xl bottom-3 right-3 text-sm"
        >
      <p>{{session('success')}} </p>
     </div>
   
     @endif

    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 px-0" style="margin-bottom: 90px;">
        <div class="row mx-0 align-items-center">
            <div class="col-lg-6 px-md-5 text-center text-lg-left">
                <h1 class="display-2 text-uppercase mb-3">Best Digital Marketing Agency</h1>
                <p class="text-dark mb-4">Sea ipsum kasd eirmod kasd magna, est sea et diam ipsum est amet sed sit.
                    Ipsum dolor no justo dolor et, lorem ut dolor erat dolore sed ipsum at ipsum nonumy amet. Clita
                    lorem dolore sed stet et est justo dolore.</p>
                    @auth
                    <a href="about" class="btn btn-dark text-uppercase mt-1 py-3 px-5">Learn</a>
                    @else
                    <a href="login" class="btn btn-dark text-uppercase mt-1 py-3 px-5">Login</a>
                    @endauth
            </div>
            <div class="col-lg-6 px-0 text-right">
                <img class="img-fluid mt-5 mt-lg-0" src="img/header.png" alt="">
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- About Start -->

    <!-- About End -->
    

    <!-- Services Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <h1 class="display-4 text-uppercase text-center mb-5">Our Creative Services</h1>
            <div class="row">
                <div class="col-lg-3 mb-2">
                    <div class="service-item rounded p-5 mb-4">
                        <i class="fa fa-3x fa-laptop-code text-primary mb-4"></i>
                        <h4 class="text-uppercase mb-4">Web <span class="d-block text-body">Design</span></h4>
                        <p class="m-0">Vero amet vero eos kasd justo ipsum diam sed elitr</p>
                    </div>
                </div>
                <div class="col-lg-3 mb-2">
                    <div class="service-item rounded p-5 mb-4">
                        <i class="fa fa-3x fa-code text-primary mb-4"></i>
                        <h4 class="text-uppercase mb-4">Web <span class="d-block text-body">Development</span></h4>
                        <p class="m-0">Vero amet vero eos kasd justo ipsum diam sed elitr</p>
                    </div>
                </div>
                <div class="col-lg-3 mb-2">
                    <div class="service-item rounded p-5 mb-4">
                        <i class="fa fa-3x fa-envelope-open-text text-primary mb-4"></i>
                        <h4 class="text-uppercase mb-4">Digital <span class="d-block text-body">Marketing</span></h4>
                        <p class="m-0">Vero amet vero eos kasd justo ipsum diam sed elitr</p>
                    </div>
                </div>
                <div class="col-lg-3 mb-2">
                    <div class="service-item rounded p-5 mb-4">
                        <i class="fa fa-3x fa-edit text-primary mb-4"></i>
                        <h4 class="text-uppercase mb-4">Content <span class="d-block text-body">Writing</span></h4>
                        <p class="m-0">Vero amet vero eos kasd justo ipsum diam sed elitr</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->


    <!-- Portfolio Start -->
   
    <!-- Portfolio End -->


    <!-- Pricing Plan Start -->
   
    <!-- Pricing Plan End -->


    <!-- Team Start -->
    
    <!-- Team End -->


    <!-- Testimonial Start -->
   
    <!-- Testimonial End -->


    <!-- Contact Start -->
    
    <!-- Contact End -->


    <!-- Footer Start -->
    <x-footer/>
    <!-- Footer End -->
    
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/isotope/isotope.pkgd.min.js"></script>
<script src="lib/lightbox/js/lightbox.min.js"></script>

<!-- Contact Javascript File -->
<script src="mail/jqBootstrapValidation.min.js"></script>
<script src="mail/contact.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
</body>

</html>