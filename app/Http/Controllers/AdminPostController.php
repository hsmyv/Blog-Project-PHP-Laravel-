<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Models\Category;


class AdminPostController extends Controller
{
    public function create(){
        return view('admin.posts.create');
    }
    public function store($language)
    {
        $attributes = request()->validate(
            [
                'title' => 'required',
                'thumbnail' => 'required|file|mimes:img,jpeg,jpg,png',
                'excerpt' => 'required',
                'slug' => ['required', Rule::unique('posts', 'slug')], //post tableinde slug column
                'body' => 'required',
                'category_id' => ['required', Rule::exists('categories', 'id')]

            ]);

            $attributes['user_id'] = auth()->id();
            $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');

            Post::create($attributes);


            return redirect()->route('blog');

    }

    Public function index($language, Post $post)
    {
        return view ('Admin.posts.index',[
            'posts' => Post::paginate(50)

        ]);
    }

    public function edit($language, Post $post)
    {
        return view ('admin.posts.edit', [ 'post' => $post ]);
    }

    public function update($language, Post $post){

        $attributes = request()->validate(
            [
                'title' => 'required',
                'thumbnail' => 'image',
                'excerpt' => 'required',
                'slug' => ['required', Rule::unique('posts', 'slug')->ignore($post->id)],
                'body' => 'required',
                'category_id' => ['required', Rule::exists('categories', 'id')]

            ]);
        if (isset($attributes['thumbnail'])){
            $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
        }
            $post->update($attributes);
            return redirect()->route('showpost')->with('success', 'Post Updated!');
    }

    public function destroy($language, Post $post){
        $post->delete();
        return back()->with('success', 'Post Deleted!');
    }



}
