
<x-main>
@auth
     <!-- Page Header Start -->
     <div class="page-header container-fluid bg-primary d-flex flex-column align-items-center justify-content-center">
        <h1 class="display-3 text-uppercase mb-3">Blog</h1>
        <div class="d-inline-flex text-white">
            <h6 class="text-uppercase m-0"><a class="text-white" href="">Home</a></h6>
            <h6 class="m-0 px-3">/</h6>
            <h6 class="text-uppercase m-0">Blog</h6>
        </div>
    </div>
    <!-- Page Header END -->

    <div class="text-uppercase relative flex lg:inline-flex items-center bg-blue-100 rounded-xl px-3 py-2">
        <form method="GET" action="#">
        <h3>Search movies: <input name="search" type="text" placeholder="{{__("Search..")}}" value="{{request('search')}}"></h3>
        </form>

        <div class="relative flex lg:inline-flex items-center bg-blue-100 rounded-xl px-3 py-2">
                <div x-data="{show: false}" @click.away="show = false">
                    <button @click="show =! show" class="py-2 pl-3 pr-9 text-sm font-semibold w-32 text-left">{{isset($currentCategory) ? ucwords($currentCategory->name) : 'Categories'}}</button>
                <div x-show="show" class="py-2 absolute bg-gray-100 mt-2 rounded-xl w-full z-50 overflow-auto max-h-52" style="display: none">
                    <a href="{{route("blog")}}"
                        class="block text-left px-3 text-sm leading-6 hover:bg-blue-500 focus:bg-blue-500 hover:text-white focus:text-white"
                        >All </a>
                    @foreach ($categories as $category )
                    <a href="{{route("getcategoryslug", $category->slug)}}"
                        class="block text-left px-3 text-sm leading-6 hover:bg-blue-500 focus:bg-blue-500 hover:text-white focus:text-white
                        {{isset($currentCategory) && $currentCategory->is($category) ? 'bg-blue-500 text-white' : ''}}">{{ucwords($category->name)}} </a>
                    @endforeach
                </div>
                </div>
        </div>

      </div>




      <div> <h1 class="text-uppercase m-5 text-center">{{__("Movies")}}</h1>

      </div>
    @if ($posts->count() )
            @foreach ($posts as $post)
            <x-post-card :post="$post"/>
            <br>
            @endforeach
            {{$posts->links()}}
    @else
        <p class="text-center">No posts yet.</p>
    @endif

@else

<meta http-equiv="refresh" content="0.1; '/' />
@endauth
</x-main>
