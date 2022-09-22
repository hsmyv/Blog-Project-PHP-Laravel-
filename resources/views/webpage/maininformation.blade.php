<x-main>
@if (session()->has('success'))
<div x-data = "{show:true}"
    x-init= "setTimeout(()=> false, 4000)"
    x-show= "show"
    class = "fixed bg-blue-500 text-white py-1 px-5 rounded-xl bottom-5 right-7 text-sm"
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
            <img class="img-fluid mt-5 mt-lg-0" src="" alt="">
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
                    @auth
                    <h4 class="text-uppercase mb-4">Web <a href='/services'><span class="d-block text-body">Design</span></h4></a>
                    @else
                    <h4 class="text-uppercase mb-4">Web <a href='/login'><span class="d-block text-body">Design</span></h4></a>
                    @endauth
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
</x-main>