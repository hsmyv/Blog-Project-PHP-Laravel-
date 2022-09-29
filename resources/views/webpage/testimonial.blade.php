
<x-main>
@auth

    <!-- Page Header Start -->
    <div class="page-header container-fluid bg-primary d-flex flex-column align-items-center justify-content-center">
        <h1 class="display-3 text-uppercase mb-3">Testimonial</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a class="text-white" href="">Home</a></h6>
            <h6 class="m-0 px-3">/</h6>
            <h6 class="text-uppercase m-0">Testimonial</h6>
        </div>
    </div>
    <!-- Page Header Start -->


    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <h1 class="display-4 text-uppercase text-center mb-5">Our Client's Say</h1>
            <div class="owl-carousel testimonial-carousel">
                <div class="testimonial-item position-relative text-center rounded p-4">
                    <img class="img-fluid rounded mx-auto my-4" src="img/testimonial-1.jpg" alt="">
                    <h5 class="text-uppercase">Client Name</h5>
                    <p class="text-uppercase">Profession</p>
                    <p class="text-secondary">Tempor lorem dolor sea et ipsum, lorem justo kasd dolore vero eos. Lorem duo ipsum sea amet et clita dolor</p>
                </div>
                <div class="testimonial-item position-relative text-center rounded p-4">
                    <img class="img-fluid rounded mx-auto my-4" src="img/testimonial-2.jpg" alt="">
                    <h5 class="text-uppercase">Client Name</h5>
                    <p class="text-uppercase">Profession</p>
                    <p class="text-secondary">Tempor lorem dolor sea et ipsum, lorem justo kasd dolore vero eos. Lorem duo ipsum sea amet et clita dolor</p>
                </div>
                <div class="testimonial-item position-relative text-center rounded p-4">
                    <img class="img-fluid rounded mx-auto my-4" src="img/testimonial-3.jpg" alt="">
                    <h5 class="text-uppercase">Client Name</h5>
                    <p class="text-uppercase">Profession</p>
                    <p class="text-secondary">Tempor lorem dolor sea et ipsum, lorem justo kasd dolore vero eos. Lorem duo ipsum sea amet et clita dolor</p>
                </div>
                <div class="testimonial-item position-relative text-center rounded p-4">
                    <img class="img-fluid rounded mx-auto my-4" src="img/testimonial-4.jpg" alt="">
                    <h5 class="text-uppercase">Client Name</h5>
                    <p class="text-uppercase">Profession</p>
                    <p class="text-secondary">Tempor lorem dolor sea et ipsum, lorem justo kasd dolore vero eos. Lorem duo ipsum sea amet et clita dolor</p>
                </div>
            </div>
        </div>
    </div>
    

    @auth
    <section class = "col-span-8 col-start-5 mt-10 space-y-6">
        
    <form method="POST" action="/testimonial/comments" >
        @csrf
        <header class = "flex items-center">
            <img src="https://i.pravatar.cc/60" alt="" width="40" height="40" class="rounded-full">

            <h2 class = "ml-4">What are you think about?</h2>
        </header>


        <div class="mt-6">
            <textarea name="body" class="w-full text-sm focus:outline-none focus:ring" rows="5" placeholder="Quick, thing of something"></textarea>
        </div>
        <div class="flex justify-end">
            <button type="submit" class="bg-blue-500 text-white uppercase font-semibold text-xs py-2 px-10 rounded-2xl hover:bg-blue-600" >Post </button>
        </div>
    </form>
    @else
    <p class="font-semibold">
        <a href="/register" class="hover:underline">Register</a> or 
        <a href="/login" class="hover:underline">login</a> to leave a comment</p>
      
    </section>
     @endauth
     
    <!-- Testimonial End -->
@else
<meta http-equiv="refresh" content="0.1; '/" />
@endauth
</x-main>