<x-main>
    <h1> Create Post </h1>
    <br>
    <h3> <a href="{{route('blog')}}">Back</a></h3>
    <h1> Create: </h1>
    <div class="container col-md ">
                <form method="POST" action="{{route('usercreatepost')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">

                        <x-form.input name="title" :value="old('title')"/>
                        <x-form.input name="slug" :value="old('slug')"/>
                        <x-form.textarea name="excerpt"> {{old('excerpt')}} </x-form.textarea>
                        <x-form.input name="thumbnail" type="file" :value="old('thumbnail')"/>
                        <x-form.textarea name="body"> {{old('body')}} </x-form.textarea>

                       <x-form.field1>
                        <x-form.label name="category"/>
                        <select name="category_id" id="category_id">
                            @foreach(\App\Models\Category::all() as $category)
                            <option value="{{$category->id}}"
                                {{old('category_id') == $category->id ? 'selected' : ''}}
                                >{{ucwords($category->name)}} </option>
                            @endforeach
                        </select>
                            <x-form.error name="category"/>
                       </x-form.field1>

                    </div>
                  <x-form.button>Publish</x-form.button>

                </form>
    </div>
</x-main>
