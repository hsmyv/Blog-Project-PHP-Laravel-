<?php

namespace App\Http\Controllers;
use App\Models\News;
use App\Models\User;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
    $adlar = ['Hesen','Sahmar','Eli','Pirveli'];
        #return view('Welcome', ['ad' => 'Sahmar', 'yas'=>'22']);
        return view('Welcome',compact('adlar'));
    }
    public function index1(){
        $news = News::all();
        return response($news, 200);
    }
    public function show(News $news){
       $news = News::find($id);
        return $news;
    }
    public function store(Request $request){
        $news = new News();
        $news->name = $request->name;
        $news->active = $request->active;
        $news->urgent = $request->urgent;

        $news->save();

        return response($news, 201);
     }

     public function register(Request $request){
    

    $validated = $request->validate([
        'name' => 'required',
        'email' => 'required',
        'password' => 'required'
    ]);
        $user = new User();
       $user->name  = $request -> name;
       $user->email = $request->email;
       $user->password = bcrypt($request->password);

       $user->save();
        $token = $user->createToken('token_name')->plainTextToken;
        $response = ['token'=> $token, 'user'=> $user];
        return response($response, 201);
     }
}
