
@props(['comment'])

<article class="flex bg-gray-50 space-x-4">
    <div class="xles-shrink-0">
        <img src="https://i.pravatar.cc/60" alt="" width="60" heihgt="60" class="img-fluid rounded mx-auto my-4" >
    </div>
    <div>
        <header class="mb-4">
        <h3 class = "fond-bold"> {{$comment->author->username  ?? 'unknown'}}</h3> 
            <p class = "text-xs">
                posted 
                <time>{{$comment->created_at->diffForHumans()}}</time>
            </p>
        </header>
        <p>{{ $comment->body}}</p>
    </div>
</article>

