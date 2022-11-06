<x-main>
    <h1>Edit Profile: {{$user->name}}</h1>
    <form method="POST" action="{{route('editprofile', $user->id)}}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="container col-md">
        <div class="form-row">
            <x-form.input name="name" placeholder="name" :value="old('name', $user->name)"/>
            <x-form.input name="username" placeholder="username" :value="old('username', $user->username)"/>
            <div>
                <x-form.input name="thumbnail" type="file" :value="old('thumbanil', $user->thumbanil)"/>
                <img alt="" width="100" height="20"  class="rounded-2xl" src="{{ asset('storage/' . $user->thumbnail) }}" alt="">

            </div>
        <x-form.field1>
        <div>
            <x-form.button>Update</x-form.button>
        </x-form.field1>
            <br>
        <x-form.field1>
            <button class="text-uppercase py-2 px-4" ><a href="{{route('blog')}}">Cancel</a></button>
         </x-form.field1>
         </div>
</div>
</form>
</x-main>


