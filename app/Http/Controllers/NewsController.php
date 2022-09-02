<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(){
    
        return view('cedvel');
        
    }
    public function create(){
        
         return view('create');
         
     }

    



    public function list_news(){
        
        $news = News::orderBy('id', 'desc');

        if(request()->get('status')!==null){
            $news = $news->where('active', request()->get('status'));
        }

        $news = $news->get();

        return view('news-list', compact('news')); // bura bax
    }
}
