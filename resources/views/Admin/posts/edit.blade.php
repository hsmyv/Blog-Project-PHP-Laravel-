<x-main>

    <h1> Edit: </h1>


                    <form method="POST" action="{{route('patchpost', $post->id)}}" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="container col-md">
                    <div class="form-row">

                        <x-form.input name="title" :value="old('title', $post->title)"/>
                        <x-form.input name="slug"  :value="old('slug', $post->slug)"/>
                        <x-form.textarea name="excerpt"> {{old('excerpt', $post->excerpt)}} </x-form.textarea>
                        <x-form.textarea name="body"> {{old('body', $post->body)}} </x-form.textarea>
                    <div>
                        <x-form.input name="thumbnail" type="file" :value="old('thumbanil', $post->thumbanil)"/>
                        <img width="300" src="{{ asset('storage/' . $post->thumbnail) }}" alt="">
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
                       <div>
                       <x-form.button>Update</x-form.button>
                       <br>
                    <x-form.field1>
                       <button class="text-uppercase py-2 px-4" ><a href="{{route('showpost')}}">Cancel</a></button>
                    </x-form.field1>
                    </div>

               </div>


                </form>


</x-main>
