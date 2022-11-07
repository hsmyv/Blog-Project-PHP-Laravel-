<x-main>
    <article>
        <div class="blog-wrapper">
            <div class="blog-card">
                <div class="card-img">
                    <h2>{{ $comment->post->title}}  </h2>
                    <div class="card-details"><span>published at {{$comment->post->created_at->diffForHumans()}}</span></div>
                    <h5> By <a href="{{route("getauthorusername", $comment->post->author->username)}}" >{{$comment->post->author->username}}<a> in <a href="{{route("getcategoryslug", $comment->post->category->slug)}}">{{$comment->post->category->name}}</a> </h5>
                    @can('userupdatepost', $comment->post)
                    <div class="nav-item dropdown">
                        <a href="#" class="fa fa-cog" data-toggle="dropdown"></a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <div class="container column">
                                <a href="{{route('showeditpost', $comment->post->slug)}}">Edit</a>
                                <form method="POST" action="{{route('destroypost', $comment->post->id)}}">
                                    @csrf
                                    @method('DELETE')
                                    <button style="color:red">Delete</button>
                                </form>
                                @endcan
                                </h4>
                                </div>
                        </div>
                    </div>
                    <img width="500" class="width"src ="{{ asset('storage/' .$comment->post->thumbnail) }}">
                    <div align="justify" class="space-y-4 lg:text-lg leading-loose"><p>{{$comment->post->body}}</p></div>
                    <h4><a href="{{route('blog')}}">Back</a>
                </div>

            </div>
        </div>

        </article>
<form class="border border-gray-200 p-6 rounded-xl" method="POST" action="{{route('commentedit', $comment->id )}}" >
    @csrf
    @method("PATCH")

    <header class = "flex items-center">
        <img src="{{ asset('storage/' . auth()->user()->thumbnail) }}" alt="" width="40" height="40" class="rounded-full">

        <h5 class = "ml-4">What are you think about?</h5>
    </header>


    <div class="mt-6">
        <textarea name="body" class="form-control bg-light border-0 py-3 px-2 w-full text-sm focus:outline-none focus:ring" rows="5" placeholder="Quick, thing of something"
        required>{{old('body', $comment->body)}}
        </textarea>

        @error('body')
        <span class="text-xs text-red-500">{{$message}}</span>
        @enderror

    </div>

    <div class="flex justify-end mt-10 border-t border-gray-200 pt-6">
        <button type="submit" class="bg-blue-500 text-white uppercase font-semibold text-xs py-2 px-10 rounded-2xl hover:bg-blue-600" >Edit </button>
    <a class="bg-blue-500 text-white uppercase font-semibold text-xs py-2 px-3 rounded-2xl hover:bg-blue-600" href="{{route("getpostslug", $comment->post->slug)}}">Back</a>
    </div>
</form>

@if($comment->post->comments->count())
        @foreach($comment->post->comments as $comment)

        <x-post-comments :comment="$comment"/>
        @endforeach

@else
<p class="text-center">No comments yet.</p>
@endif


</x-main>
