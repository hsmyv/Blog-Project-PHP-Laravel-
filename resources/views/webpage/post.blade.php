    <x-main>
    <!-- Posts -->

    <article>
        <div class="blog-wrapper">
            <div class="blog-card">
                <div class="card-img"><img src="">
                    <div class="card-details"><span>published at {{$post->published_at}}</span></div>
                    <h1>{{ $post->title}}  </h1>
                    <h5> By <a href="/blog/authors/{{$post->author->username}}" >{{$post->author->username}}<a> in <a href="/blog/categories/{{$post->category->slug}}">{{$post->category->name}}</a> </h5>                  
                    <img width="500" class="width"src ="{{ asset('storage/' .$post->thumbnail) }}">
                </div>
                <div class="card-text"><p>{{$post->body}} </p></div>
                <h4><a href="/blog">Back</a></h4> 
            </div>
        </div>
        
        </article>

        @auth
        <section class = "col-span-8 col-start-5 mt-10 space-y-6">
       
    <form method="POST" action="/blog/posts/{{$post->slug}}/comments" >
        @csrf
        <header class = "flex items-center">
            <img src="https://i.pravatar.cc/60" alt="" width="40" height="40" class="rounded-full">

            <h2 class = "ml-4">Do you particapate?</h2>
        </header>


        <div class="mt-6">
            <textarea name="body" class="w-full text-sm focus:outline-none focus:ring" rows="5" placeholder="Quick, thing of something"
            required>
            </textarea>

            @error('body')
            <span class="text-xs text-red-500">{{$message}}</span>
            @enderror

        </div>
        <div class="flex justify-end">
            <button type="submit" class="bg-blue-500 text-white uppercase font-semibold text-xs py-2 px-10 rounded-2xl hover:bg-blue-600" >Post </button>
        </div>
    </form>
@else
<p class="font-semibold">
    <a href="/register" class="hover:underline">Register</a> or 
    <a href="/login" class="hover:underline">login</a> to leave a comment</p>
@endauth
        @foreach($post->comments as $comment)
        <x-post-comments :comment="$comment"/>
        @endforeach

    </section>

    </x-main>
