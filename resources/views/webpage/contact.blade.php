<x-main>

     <!-- Page Header Start -->
     <div class="page-header container-fluid bg-primary d-flex flex-column align-items-center justify-content-center">
        <h1 class="display-3 text-uppercase mb-3">Contact</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a class="text-white" href="">Home</a></h6>
            <h6 class="m-0 px-3">/</h6>
            <h6 class="text-uppercase m-0">Contact</h6>
        </div>
    </div>
    <!-- Page Header Start -->

<div class="container-fluid py-5 px-0">
  
    <div class="row mx-0">
        <div class="col-12 px-0" style="height: 500px;">
            <div class="position-relative h-100">
                  <h1 class="display-4 text-uppercase text-center mt-2 mb-2">Contact Us</h1>
                   
                  <!-- About Info Start -->
    <div class="container-fluid py-5">
        <div class="container pb-3">
            <div class="row">
                <div class="col-lg-4 mb-2">
                    <div class="d-flex align-items-center bg-light rounded mb-4 px-5" style="height: 150px;">
                        <i class="fa fa-3x fa-map-marker-alt text-primary mr-3"></i>
                        <div class="d-flex flex-column">
                            <h5 class="text-uppercase">Our Office</h5>
                            <p class="m-0">123 Street, New York, USA</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-2">
                    <div class="d-flex align-items-center bg-light rounded mb-4 px-5" style="height: 150px;">
                        <i class="fa fa-3x fa-envelope-open text-primary mr-3"></i>
                        <div class="d-flex flex-column">
                            <h5 class="text-uppercase">Email Us</h5>
                            <p class="m-0">info@example.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-2">
                    <div class="d-flex align-items-center bg-light rounded mb-4 px-5" style="height: 150px;">
                        <i class="fas fa-3x fa-phone-alt text-primary mr-3"></i>
                        <div class="d-flex flex-column">
                            <h5 class="text-uppercase">Call Us</h5>
                            <p class="m-0">+012 345 6789</p> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
                
    <!-- About Info End -->
   
            </div>
        </div>
    </div>


    <div class="row mx-0 justify-content-center" style="margin-top: -200px;">
        <div class="col-lg-6 col-md-8 col-sm-10 px-0">
            <div class="contact-form bg-white rounded p-5">
                <div id="success"></div>
                <form name="sentMessage" id="contactForm" novalidate="novalidate" method="POST" action="{{route('mail')}} ">
                    @csrf
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="control-group">
                                <input name = "name" type="text" class="form-control bg-light border-0 p-4" id="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="control-group">
                                <input name = "email" type="email" class="form-control bg-light border-0 p-4" id="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                    </div>
                    <div class="control-group">
                        <input name = "subject" type="text" class="form-control bg-light border-0 p-4" id="subject" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <textarea class="form-control bg-light border-0 py-3 px-4" rows="5" id="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="text-center">
                        <button class="btn btn-primary text-uppercase py-3 px-5" type="submit" id="sendMessageButton">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


</x-main>