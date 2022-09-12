<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DOT.NET - Digital Agency Website Template</title>
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
</head>

<body>
    <!-- Navbar Start -->
    <x-navbar/>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="page-header container-fluid bg-primary d-flex flex-column align-items-center justify-content-center">
        <h1 class="display-3 text-uppercase mb-3">Services</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a class="text-white" href="">Home</a></h6>
            <h6 class="m-0 px-3">/</h6>
            <h6 class="text-uppercase m-0">Services</h6>
        </div>
    </div>
    <!-- Page Header Start -->


    <!-- Posts -->
    <article>
        <div class="blog-wrapper">
            <div class="blog-card">
                <div class="card-img"><img src="">
                    <h1>{!! $post->title !!}</h1>   
                </div>
                <div class="card-details"><span><i class="fa fa-calendar"></i>{!! $post->published_at !!}</span><span><i class="fa fa-heart"></i>265</span></div>
                <div class="card-text"><p></p></div>
                <h4><a href="/blog">Back</a></h4>
            </div>
        
        </div>
        </article>

    <!-- Posts -->


    <!-- Footer Start -->
  <x-footer/>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-up"></i></a>


    <!-- JavaScript Libraries -->
    <x-yoxl/>
</body>

</html>

   





