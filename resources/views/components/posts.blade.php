
@foreach ($posts as $post)
<article>
<h1 > {{$post->title}}</h1>

<div class="blog-wrapper">
    <div class="blog-card">
        <div class="card-img"><img src="">
            <h1></h1>
        </div>
        <div class="card-details"><span><i class="fa fa-calendar"></i>AUG 4</span><span><i class="fa fa-heart"></i>102</span></div>
        <div class="card-text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Si verbum sequimur, primum longius verbum praepositum quam bonum.</p></div>
        <div class="read-more">Read More</div>
    </div>
    <div class="blog-card">
        <div class="card-img"><img src="">
            <h1>San Francisco</h1>
        </div>
        <div class="card-details"><span><i class="fa fa-calendar"></i>AUG 1</span><span><i class="fa fa-heart"></i>265</span></div>
        <div class="card-text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Si verbum sequimur, primum longius verbum praepositum quam bonum.</p></div>
        <div class="read-more">Read More</div>
    </div>
</div>
</article>
@endforeach