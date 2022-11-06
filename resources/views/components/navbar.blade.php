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
                <div class="navbar-nav ml-auto py-0 pr-1 border-right">
                    <a href="{{route('main')}}" class="nav-item nav-link ">{{__('Home')}}</a>
                    <a href="{{route('about')}}" class="nav-item nav-link ">{{__('About')}}</a>
                    <a href="{{route('services')}}" class="nav-item nav-link">{{__("Services")}}</a>
                    <a href="{{route('projects')}}" class="nav-item nav-link">{{__("Projects")}}</a>
                    <a href="{{route('blog')}}" class="nav-item nav-link">{{__("Blog")}}</a>
                    <a href="{{route('testimonial')}}" class="nav-item nav-link">{{__("Testimonial")}}</a>
                    <a href="{{route('contact')}}" class="nav-item nav-link">{{__('Contact')}}</a>
                    </div>
                @else
                    <h6>{{__("Please, log in to learn more about us")}}</h6>
                @endauth

                        @auth

                        <img src="{{ asset('storage/' . auth()->user()->thumbnail) }}" alt="" width="80" height="70"  style="border-radius: 50%">
                            <a class="nav-item nav-link active">{{__("Welcome")}}, {{auth()->user()->username}}! </a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle fa fa-2x fa-user-alt text-primary mr-2" data-toggle="dropdown"></a>
                                <div class="dropdown-menu rounded-0 m-0">

                                    @can('admin')
                                    <a href="{{route('showpost')}}" class="dropdown-item">Dashboard</a>
                                    <a href="{{route('showpostcreate')}}"class="dropdown-item" >Create</a>
                                    <a href="{{route('showeditprofile')}}" class="dropdown-item">Edit Profile</a>
                                    <form method="POST" action="{{route('logout')}}">
                                        @csrf
                                        <button href="{{route('logout')}}" class="dropdown-item" >Logout</button>
                                        </form>
                                    @else
                                    <a href="{{route('showeditprofile')}}" class="dropdown-item">Edit Profile</a>
                                    <form method="POST" action="{{route('logout')}}">
                                        @csrf
                                        <button href="{{route('logout')}}" class="dropdown-item" >Logout</button>
                                        </form>
                                    @endcan
                                </div>
                            </div>

                            @inject('app', 'Illuminate\Contracts\Foundation\Application')
                            @inject('urlGenerator', 'Illuminate\Routing\UrlGenerator')
                            <div class="nav-item dropdown">
                                <a href="#" class="fa fa-2x fa-language" data-toggle="dropdown"></a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a  href="{{ $urlGenerator->toLanguage('en') }}" class="dropdown-item"> En</a>
                                    <a href="{{ $urlGenerator->toLanguage('az') }}" class="dropdown-item">Az</a>
                                </div>
                            </div>

                         </div>
                        @else

                            @inject('app', 'Illuminate\Contracts\Foundation\Application')
                            @inject('urlGenerator', 'Illuminate\Routing\UrlGenerator')
                            <a href="{{route('showlogin') }}" class="nav-item nav-link ">{{__('Login')}}</a>
                            <a href="{{route('showregister')}}" class="nav-item nav-link active">{{__('Register')}}</a>
                            <i class="fa fa-2x fa-user-alt text-primary mr-2"></i>
                            <div class="nav-item dropdown">
                                <a href="#" class="fa fa-2x fa-language" data-toggle="dropdown"></a>
                                <div class="dropdown-menu rounded-1 m-0">
                                    <a  href="{{ $urlGenerator->toLanguage('en') }}" class="nav-item nav-link active" >En</a>
                                    <a  href="{{ $urlGenerator->toLanguage('az') }}" class="nav-item nav-link active" >Az</a>
                                </div>
                            </div>
                        @endauth

                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>
