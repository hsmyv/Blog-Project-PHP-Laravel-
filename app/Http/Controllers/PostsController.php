<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;

class PostsController extends Controller
{
    public function show(Post $post)
    {
        return view('webpage.post', [
        'post' => $post
        ]);
    }
    
    public function index(){
            
        
        return view ('webpage.blog' , [
                'posts' => Post::latest()->filter(request(['search','category', 'author']))->simplePaginate(3)

            ]);
    }


}
