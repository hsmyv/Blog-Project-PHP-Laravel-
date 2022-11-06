<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Contracts\Support\Foundation\Application;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use App\Models\Comment;
use Illuminate\Support\Facades\Gate;


class PostsController extends Controller
{
    public function show($language, Post $post)
    {

        return view('webpage.post', [
        'post' => $post,

        ]);
    }

    public function index($language, Category $category){
        
        return view ('webpage.blog' ,  [
                'posts' => Post::latest()->filter(request(['search','category', 'author']))->simplePaginate(10),
                //'posts' => $category->posts,
                'categories' => Category::all(),
                'currentCategory' => Category::firstWhere('slug', request('category'))

            ]);
    }

    public function authorindex($language, User $author){

        return view ('webpage.blog' , [
            'posts' => $author->posts,
            'categories' => Category::all()

    ]);

    }

    public function showpostedit($language, Post $post)
    {
        return view ('webpage.user.editpost', [ 'post' => $post ]);
    }

    public function postedit($language, Post $post)
    {

        $attributes = request()->validate([
            'title' => 'required',
            'thumbnail' => 'image',
            'excerpt' => 'required',
            'slug' => ['required' , Rule::unique('posts', 'slug')->ignore($post->id)],
            'body' => 'required',
            'category_id' => ['required', Rule::exists('categories', 'id')]
        ]);

        if(isset($attributes['thumbnail'])){
            $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
        }

        $post->update($attributes);

        return redirect()->route('blog')->with('success', 'Your post has been updated successfully');
    }

    public function showpost($language){
        return view('webpage.user.createpost');
    }

    public function createpost($language, Request $request){
        $attributes = $request->validate([
            'title' => 'required',
            'slug' => ['required', Rule::unique('posts', 'slug')],
            'excerpt' => 'required',
            'thumbnail' => 'required|file|mimes:jpg,png,img,jpeg',
            'body' => 'required',
            'category_id' => ['required', Rule::exists('categories', 'id')]
        ]);

        $attributes['user_id'] = auth()->id();

        $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');

        Post::create($attributes);

        return redirect()->route('blog')->with('success', 'Your post has been published successfully');
    }


    public function deletepost($language, Post $post){
        $post->delete();
        return redirect()->route('blog')->with('success' , 'Your post has been deleted!');
    }




}
