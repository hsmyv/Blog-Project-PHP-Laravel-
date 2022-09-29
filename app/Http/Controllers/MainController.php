<?php

namespace App\Http\Controllers;
use App\Models\News;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;
class MainController extends Controller
{

    public function index1(){
        return view ("telebe");
    }

    //keslerin islemesi ucun kesler funksiyasin yaradiriq
    public function kesler(){
        $news  = Cache::remember('news', 60*60*24*24 , function(){
            return News::all();
        });

        return view ('kesler', compact('news'));
    }

    // bu funksiya bir neferin melumati limitli sayda ala bilmesi ucun yaradilmisdir
    public function melumatialmaqicazesi(){
        $news = News::all();
        return response($news, 200);
    }


    ///////////////////////////////////////////////////////////////////////////////////////
    public function index2(){
        $news  = Cache::remember('news', 60*60*24*24 , function(){ // <---- bu hisse cache silmek ucundur
        return News::all();
        });

        return view('news', compact('news'));
    }


    public function store(Request $request){          // sekiliyuklemek
        $this->validate($request,[
            'name' => 'required',
            'file' => 'required | mimes:png,jpg,mp4'
        ]);
        $news = new News();
        $news->name = $request->name;
        if($request->hasFile('file')){
            $ext = $request->file->extension();
            $fileName = rand(1,100).time().'.'.$ext;
            $fileNameWithUpLoad = 'storage/uploads/'.$fileName;

            $request->file->storeAs('public/uploads',$fileName);

            $news->file = $fileNameWithUpLoad;

            $image = ['jpg', 'png', 'img'];
            if(in_array($ext, $image) ){
                $type = 'image';
            }elseif($ext == 'mp4'){
                $type = 'video';
            }

            $news -> type = $type;
        }
        $news->save();
        return redirect()->route('index2');

    }

    public function mediadownload($id){   // hemin sekli komputere yuklemek
    $news = News :: findOrFail($id);
    return response()->download($news->file);
    }

    public function destroy($id){       // hemin sekli silmek
        $news = News::findOrFail($id);
        if(File::exists($news->file)){

            File::delete($news->file);
        }

        $news->delete();
        return redirect()->route('index2');
    }

//////////////////////////////////////////////////////////////////////////







    public function index(){
    $adlar = ['Hesen','Sahmar','Eli','Pirveli'];
        #return view('Welcome', ['ad' => 'Sahmar', 'yas'=>'22']);
        return view('Welcome',compact('adlar'));
    }
    public function userlerigetir(){
        $user = User::all();
        return response($user, 200);
    }
    public function xeberlerigetir(){
        $news = News::all();
        return response($news, 200);
    }
    public function show($id){
        $user = User::find($id);
       return response ($user, 200);
    }
    public function xeberler_id($id){
        $news = News::find($id);
        return $news;
    }
    public function xeberleriyuklemek(Request $request){
        $news = new News();
        $news->name = $request->name;
        $news->active = $request->active;
        $news->urgent = $request->urgent;

        $news->save();

        //$token = $news->createToken('token_name')->plainTextToken;  //yarada bilmedik cunki asagida bir dene token yaratmisiq *problem
        //$response = ['token'=> $token, 'news'=> $news];
        return response($news, 201);
     }

     public function user(Request $request){


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



     public function newsdatayuklemek(Request $request){

        $news = new News();
        $news->name = $request->name;
        $news->active = $request->active;
        $news->urgent = $request->urgent;

        $news->save();
        return response($news, 201);
     }



}
