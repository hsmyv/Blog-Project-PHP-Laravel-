<x-main>
@if (session()->has('success'))
<div x-data = "{show:true}"
    x-init = "setTimeout(() => false, 4000)"
    x-show = "show"
    class = "fixed bg-blue-500 text-white py-1 px-5 rounded-xl bottom-5 right-7 text-sm"
    >
  <p>{{session('success')}} </p>
 </div>

 @endif

<!-- Header Start -->
<div class="container-fluid bg-primary py-5 px-0" style="margin-bottom: 90px;">
    <div class="row mx-0 align-items-center">
        <div class="col-lg-6 px-md-5 text-center text-lg-left">
            <h1 class="display-2 text-uppercase mb-3">{{__("Best Digital Marketing Agency")}}</h1>
            <p align= "justify" class="text-dark mb-4">{{__("Any business that wants digital growth needs a strategy to outperform its competitors on search engines and social media platforms. That’s when digital marketing agencies come into the equation. These agencies help businesses grow digitally, rank better on Search Engine Ranking Pages (SERPs), and maintain their digital presence")}}</p>

                @auth
                <a href="/about" class="btn btn-dark text-uppercase mt-1 py-3 px-5">{{__("Learn")}}</a>
                @else
                <a href="/login" class="btn btn-dark text-uppercase mt-1 py-3 px-5">{{__("Login")}}</a>
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
        <h1 class="display-4 text-uppercase text-center mb-5">{{__("Our Creative Services")}}</h1>
        <div class="row">
            <div class="col-lg-3 mb-2">
                <div class="service-item rounded p-4 mb-4">
                    <i class="fa fa-3x fa-laptop-code text-primary mb-4"></i>
                    @auth
                    <h4 class="text-uppercase mb-4">{{__("Web")}}<a href='/services'><span class="d-block text-body">{{__("Design")}}</span></h4></a>
                    @else
                    <h4 class="text-uppercase mb-4">{{__("Web")}}<a href='/login'><span class="d-block text-body">{{__("Design")}}</span></h4></a>
                    @endauth
                    <p align="center" class="m-0">{{__("The creation of websites and pages to reflect a company's brand")}}</p>
                </div>
            </div>
            <div class="col-lg-3 mb-2">
                <div class="service-item rounded p-4 mb-4">
                    <i class="fa fa-3x fa-code text-primary mb-4"></i>

                    <h4 class="text-uppercase mb-4">{{__("Web")}} <span class="d-block text-body">{{__("Development")}}</span></h4>
                    <p align="center" class="m-0">{{__("Associated with creating, and maintaining websites that run online on a browser")}}</p>
                </div>
            </div>
            <div class="col-lg-3 mb-2">
                <div class="service-item rounded p-4 mb-4">
                    <i class="fa fa-3x fa-envelope-open-text text-primary mb-4"></i>
                    <h4 class="text-uppercase mb-4">{{__("Digital")}} <span class="d-block text-body">{{__("Marketing")}}</span></h4>
                    <p align="center" class="m-0">{{__("The promotion of brands to connect with potential customers using the internet")}}</p>
                </div>
            </div>
            <div class="col-lg-3 mb-2">
                <div class="service-item rounded p-4 mb-4">
                    <i class="fa fa-3x fa-edit text-primary mb-4"></i>
                    <h4 class="text-uppercase mb-4">{{__("Content")}} <span class="d-block text-body">{{__("Writing")}}</span></h4>
                    <p align="center" class="m-0">{{__("Content writing is the process of writing, editing, and publishing content in a digital format")}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services End -->
</x-main>
