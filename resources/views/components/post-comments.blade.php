
@props(['comment', 'post_id'])

<section class="col-span-8 col-start-5 mt-5 col">
    <article class="flex bg-gray-100 border border-gray-200 p-6 rounded-xl space-x-10">
        <div class="flex-shrink-0">
            <img src="{{ asset('storage/' . $comment->author->thumbnail) }}" alt="" width="60" height="60" class="rounded-xl" >
        </div>
        <div>
            <header class="mb-4">
           <a href="{{route('getauthorusername', $comment->author->username)}}"> <h3 class = "fond-bold"> {{$comment->author->username  ?? 'unknown'}}</h3>
            @can('userupdatepost', $comment)
            <div class="nav-item dropdown">
                <a href="#" style="color:rgba(0, 0, 255, 0.505)"class="fa fa-cog" data-toggle="dropdown"></a>
                <div class="dropdown-menu rounded-0 m-0">
                    <div class="container">
            <form method="POST" action="{{route('destroycomment', $comment->id)}}">
                @csrf
                @method('DELETE')

            <div>
            <button style="color:rgb(226, 43, 43)" type="submit" >Delete </button>
            </form>
            <br>
            <a  style="color:blueviolet"href="{{route('showcommentedit', $comment->id)}}">Edit</a>
            </div>
                </div>
                </div>
            @endcan


        </a>
                <p class = "text-xs">
                    posted
                    <time>{{$comment->created_at->diffForHumans()}}</time>
                </p>

            </header>
            <p><a href="">{{$comment->commentable_user}}</a> {{$comment->body}}</p>

        </div>
        </div>
    </div>
    </article>

    </div>
    <section class="col-span-8 col-start-4 mt-4 col-12">
            @include('webpage.comment.replies_comments', ['comments' => $comment->replies])
        </section>
</section>


