<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function show(Post $post)
    {
        return view('components.posts', [
        'post' => $post
        ]);
    }
    
    
}
