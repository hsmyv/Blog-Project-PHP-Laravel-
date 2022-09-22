<x-main>

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

    <div class="text-uppercase relative flex lg:inline-flex items-center bg-gray-100 rounded-xl px-3 py-2">
        <form method="GET" action="#">
        <h3>Search movies: <input name="search" type="text" placeholder="Search.." value="{{request('search')}}"></h3>
        </form>
      </div>
      <div> <h1 class="text-uppercase m-5 text-center">Movies</h1>
             
      </div>
    @if ($posts->count())
            @foreach ($posts as $post)
            <x-post-card :post="$post"/>
            <br>
            @endforeach
            {{$posts->links()}}
    @else
        <p class="text-center">No posts yet.</p>
    @endif







    </x-main>