@props(['comments'])
<x-panel>
<article class="flex bg-gray-50 space-x-4">
    <div class="xles-shrink-0">
        <img src="https://i.pravatar.cc/60" alt="" width="60" heihgt="60" class="img-fluid rounded mx-auto my-4" >
    </div>
    <div>
        <header class="mb-4">
        <h3 class = "fond-bold"> {{$comments->author->username}}</h3>
            <p class = "text-xs">
                posted 
                <time>2 months ago</time>
            </p>
        </header>
        <p> I liked your projects in this website. I have ordered some sites for my business from you studio. This studio's sites are fascinaty I've ever seen. }}</p>
    </div>
</article>
</x-panel>