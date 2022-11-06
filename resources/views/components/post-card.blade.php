
@props(['post'])

<article>
    <div class="blog-wrapper ">
        <div class="blog-card">
            <div class="card-img">
                <h2>{{ $post->title}} </h2>
                <div class="card-details"><span><h6>published at {{$post->created_at->diffForHumans()}}</h6> </span></div>
                <h6> By <a href="{{route("getauthorusername", $post->author->username)}}" >{{$post->author->username}}<a> in <a href="{{route("getcategoryslug", $post->category->slug)}}">{{$post->category->name}}</a> </h6>
                <img  width="200" height="200" src="{{ asset('storage/' . $post->thumbnail) }}" alt="">
            </div>
            <div class="text-sm mt-4 space-y-4">
                <h5>{!!$post->excerpt!!}</h5>
            </div>
            <h4><a href="{{route("getpostslug", $post->slug)}}">Read More</a></h4>
        </div>
    </div>
    </article>
