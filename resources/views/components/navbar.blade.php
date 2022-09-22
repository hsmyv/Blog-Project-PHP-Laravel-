<div>
    <div class="container-fluid bg-white position-relative">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0">
            <a href="/" class="navbar-brand text-secondary">
                <h1 class="display-4 text-uppercase">HSTUDIO</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarCollapse">
                @auth
                <div class="navbar-nav ml-auto py-0 pr-3 border-right">
                    <a href="/main" class="nav-item nav-link ">Home</a>
                    <a href="/about" class="nav-item nav-link ">About</a>
                    <a href="/services" class="nav-item nav-link">Services</a>
                    <a href="/projects" class="nav-item nav-link">Projects</a>
                    <a href="/blog" class="nav-item nav-link">Blog</a>
                    <a href="/testimonial" class="nav-item nav-link">Testimonial</a>
                    <a href="/contact" class="nav-item nav-link">Contact</a>  

                    </div>
                @else
                    <h6>Please, log in to learn more about us </h6>
                @endauth
                </div>
                
                <div class="d-none d-lg-flex align-items-center pl-10">
                    <div style= "display:flex; justify-content:flex-end; width:100%;">
                        
                        @auth
                         <div class= "row">
                        <form method="POST" action="/logout"">
                            @csrf
                            <button class="btn btn-primary text mr-1" type="submit">Log Out</button> 
                        </form>
                            <a class="nav-item nav-link active">Welcome, {{auth()->user()->username}}! </a>
                            <div class="nav-item dropdown">
                                
                                <a href="#" class="nav-link dropdown-toggle fa fa-2x fa-user-alt text-primary mr-2" data-toggle="dropdown"></a>
                                <div class="dropdown-menu rounded-0 m-0"> 
                                    @can('admin')
                                    <a href="/admin/posts" class="dropdown-item">Dashboard</a> 
                                    <a href="/admin/posts/create"class="dropdown-item" >Create</a> 
                                    <a href="/"class="dropdown-item" >Logout</a> 
                                    @else
                                    <a href="/"class="dropdown-item" >Logout</a> 
                                    @endcan
                                </div>
                            </div>
                
                     </div>
                        @else
                            <a href="login" class="nav-item nav-link ">Login</a>
                            <a href="register" class="nav-item nav-link active">Register</a>
                            <i class="fa fa-2x fa-user-alt text-primary mr-2"></i>
                        @endauth
                       
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>