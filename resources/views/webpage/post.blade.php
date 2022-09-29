    <x-main>
    <!-- Posts -->
        <div class="text-center"> <h1>Movie</h1></div>
        <br>
<div class="container-fluid py-5 pt-5">
    <article>
        <div class="blog-wrapper">
            <div class="blog-card">
                <div class="card-img">
                    <h2>{{ $post->title}}  </h2>
                    <div class="card-details"><span>published at {{$post->created_at->diffForHumans()}}</span></div>
                    <h5> By <a href="{{route("getauthorusername", $post->author->username)}}" >{{$post->author->username}}<a> in <a href="{{route("getcategoryslug", $post->category->slug)}}">{{$post->category->name}}</a> </h5>
                    <img width="500" class="width"src ="{{ asset('storage/' .$post->thumbnail) }}">
                    <div align="justify" class="space-y-4 lg:text-lg leading-loose"><p>{{$post->body}}</p></div>
                </div>

                <h4><a href="{{route('blog')}}">Back</a></h4>
            </div>
        </div>

        </article>

        @auth
        <section class = "col-span-8 col-start-5 mt-10 space-y-6">

    <form class="border border-gray-200 p-6 rounded-xl" method="POST" action="{{route('postcomment', $post->slug)}}" >
        @csrf
        <header class = "flex items-center">
            <img src="https://i.pravatar.cc/60?u={{auth()->user()->id}}" alt="" width="40" height="40" class="rounded-full">

            <h5 class = "ml-4">What are you think about?</h5>
        </header>


        <div class="mt-6">
            <textarea name="body" class="form-control bg-light border-0 py-3 px-2 w-full text-sm focus:outline-none focus:ring" rows="5" placeholder="Quick, thing of something"
            required>
            </textarea>

            @error('body')
            <span class="text-xs text-red-500">{{$message}}</span>
            @enderror

        </div>
        <div class="flex justify-end mt-10 border-t border-gray-200 pt-6">
            <button type="submit" class="bg-blue-500 text-white uppercase font-semibold text-xs py-2 px-10 rounded-2xl hover:bg-blue-600" >Post </button>
        </div>
    </form>
@else
<p class="font-semibold">
    <a target="blank" href="{{route('showregister')}}" class="hover:underline">Register</a> or
    <a href="{{route('showlogin')}}" class="hover:underline">login</a> to leave a comment</p>
@endauth
        @foreach($post->comments as $comment)
        <x-post-comments :comment="$comment"/>
        @endforeach
</div>
    </section>

    </x-main>
