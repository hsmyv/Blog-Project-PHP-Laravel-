<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <h1> Edit: </h1>
                <form method="POST" action="/admin/posts/{{$post->id}}" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="form-row">

                        <x-form.input name="title" :value="old('title', $post->title)"/>
                        <x-form.input name="slug"  :value="old('slug', $post->slug)"/>
                        <x-form.textarea name="excerpt"> {{old('excerpt', $post->excerpt)}} </x-form.textarea>
                        <x-form.textarea name="body"> {{old('body', $post->body)}} </x-form.textarea>
                    <div>
                        <x-form.input name="thumbnail" type="file" :value="old('thumbanil', $post->thumbanil)"/>
                        <img width="100" src="{{ asset('storage/' . $post->thumbnail) }}" alt="">
                    </div>

                       <x-form.field1>
                        <x-form.label name="category"/>
                        <select name="category_id" id="category_id">
                            @foreach(\App\Models\Category::all() as $category)
                            <option value="{{$category->id}}"
                                {{old('category_id', $post->category_id) == $category->id ? 'selected' : ''}}
                                >{{ucwords($category->name)}} </option>
                            @endforeach
                        </select>
                            <x-form.error name="category"/>
                       </x-form.field1>
                    </div>
                  
                <x-form.button>Update</x-form.button> 
                <a href="/admin/posts">Back</a>
                  
                </form>
          
</body>
</html>