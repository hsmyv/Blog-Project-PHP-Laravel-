
@props(['post'])

<article>
    <div class="blog-wrapper ">
        <div class="blog-card">
            <div class="card-img">
                <h2>{{ $post->title}} </h2>
                <div class="card-details"><span><h6>published at {{$post->created_at->diffForHumans()}}</h6> </span></div>
                <h6> By <a href="/blog/authors/{{$post->author->username}}" >{{$post->author->username}}<a> in <a href="/blog/categories/{{$post->category->slug}}">{{$post->category->name}}</a> </h6>  
                <h5>{{$post->excerpt}}</h5> 
                <img width="200" src="{{ asset('storage/' . $post->thumbnail) }}" alt="">
            </div>
            <div class="card-text"></div>
            <h4><a href="/blog/posts/{{ $post->slug }}">Read More</a></h4>
        </div>
    </div>
    </article>
