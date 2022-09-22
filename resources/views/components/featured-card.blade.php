@props(['post'])

<article>
    <div class="blog-card text-center ">
            <h2>{{$post->title}}</h2> 
            <div class="card-details"><span><i class="fa fa-calendar"></i>Published at {{$post->created_at->diffForHumans()}}</span><span><i class="fa fa-heart"></i>265</span></div>
            <h5> By <a href= "/blog/authors/{{$post->author->name}}" >{{$post->author->name}}<a> in <a href="/blog/categories/{{$post->category->slug}}">{{$post->category->name}}</a> </h5>
        <div class="card-img">  <img src ="https://media.istockphoto.com/vectors/movie-night-concept-with-popcorn-cinema-tickets-drink-tape-in-cartoon-vector-id1237804526">
        </div>
        <div class="card-text"><p>{{$post->body}} </p></div>
        <h4><a href="/blog/posts/{{ $post->slug }}">Read More</a></h4>
        
    </div>
</div>
</article>

