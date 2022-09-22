<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HaqqindaController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\MuellimController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\userController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\PostCommentsController;
use App\Http\Controllers\AdminPostController;
use App\Models\News;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;




   // Route::get('/news',[NewsController::class, 'index'])->name('news.index');
   // Route::get('/news/list',[NewsController::class, 'list_news'])->name('news-list');
   // Route::get('/news/create',[NewsController::class, 'create'])->name('news.create');
    
   

   // Route::get("/",[MainController::class, 'index'])->name('home');

  //  Route::get('/haqqinda', 'App\Http\Controllers\HaqqindaController@index');
   // Route::get('/haqqinda/{ad}', [HaqqindaController:: class, 'insan']);
   // Route::get('/elaqe', 'App\Http\Controllers\ElaqeController@index');
   // Route::post('/elaqe/post', 'App\Http\Controllers\ElaqeController@elaqepost')->name('formelaqe');
    


  //  Route::group(['middleware'=>'emailTesdiq'],function(){
    //    Route::get('/muellim', [MuellimController:: class, 'index'])->name('muellim');
    //    Route::post('/muellim/addteacher', [MuellimController:: class, 'elave'])->name('muellimelave');
     //   Route::get('/muellim/sil/{id}', [MuellimController:: class, 'delete'])->name('muellimdel');
    //    Route::get('/muellim/duzelt/{id}', [MuellimController:: class, 'duzelt'])->name('muellimduzelt');
  //      Route::post('/muellim/yenile{id}', [MuellimController:: class, 'yenile'])->name('muellimyenile');
   // });
    //Route::get('/tesdiq',function(){
    //       return view('tesdiq');
     //   })->name('tesdiq');

    //Route::group(['middleware'=>'notLogin'],function(){
  //      Route::get("/",[MainController::class, 'index1'])->name('home');
   // });
    
    // Route::group(['middleware'=>'isLogin'],function(){
    //    Route::get('/login', [AuthController::class, 'index'])->name('login_index');
     //   Route::post('/login/sumbit', [AuthController::class, 'login_sumbit'])->name('login-sumbit');
    
  // });


    //Route::get('/kesler', [MainController::class, 'kesler']);  // keslerin silinmesi ucun route yaradiriq
   

/*Route::get('/telebe/{ad?}/{yas?}',function($ad=null,$yas=null){
    return 'Telebe adi:'.$ad. '<br> yas:'.$yas;
})->where(['yas'=>'[0-9]+','ad' =>'[a-zA-z]+']);


Route::group(['prefix'=>'/telebe'], function(){
    Route::get('{ad?}',function($ad=null){
        return 'Tebele adi:'.$ad;
    })->where(['ad' =>'[a-zA-z]+']);
    Route::get('{ad?}/{yas?}', function($ad=null,$yas=null){
    return $yas; 
    })->where(['yas'=>'[0-9]+','ad' =>'[a-zA-z]+']);
});

Route::get('/telebe', function(){
    return view ('telebe');

})->name('telebe');*/

    // Route::get('/1', function(){
     //   $news = News::with('tags')->get();  // taglarin elde edilmesi ucun 
    //    return $news;
    // });
///////////////////////// media yuklemek, silmek , komputere hemin sekli yuklemek //////////////////////
    Route::get('/mediayukle/media{id}', [MainController::class, 'mediadownload'])->name('download');
    Route::get('/mediayukle/delete{id}', [MainController::class, 'destroy'])->name('destroy');
    Route::get('/mediayukle', [MainController::class, 'index2'])->name('index2');
    Route::post('/mediayukle', [MainController::class, 'store'])->name('store');
    ///////////////////////////////////////////////////////////////////////////////////////

    
    Route::post('/mail', [MainController::class, 'mail'])->name('mail');  // mail gondermek funksiyasi 
    Route::post('/letter', [MainController::class, 'letter'])->name('letter');  // mail gondermek funksiyasi 
    
    //Route::get('/giris', [AuthController::class, 'index1'])->name('index-log');   // login sistemi
    //Route::post('/giris', [AuthController::class, 'login'])->name('login');

   
    Route::get('/main', [userController::class, 'main'])->name('main');
    Route::get('/about', [userController::class, 'about'])->name('about');
    Route::get('/services', [userController::class, 'services']);
    Route::get('/projects', [userController::class, 'projects']);
    Route::get('/blog', [userController::class, 'blog']);
    Route::get('/contact', [userController::class, 'contact']);
    Route::get('/testimonial', [userController::class, 'testimonial']);
   
  

    Route::get('/', function () {
        return view('webpage.maininformation');
    });

    //show register/Create Form
    Route::get('/register',[userController::class, 'create']) ->middleware('guest');
    //Create New User
    Route::post('/users', [userController::class,'store'])->middleware('guest');


    //Create LogOut
    Route::post('/logout', [userController::class, 'logout'])->middleware('auth');;

    //show Login
    Route::get('/login', [userController::class, 'login'])->middleware('guest');;
    Route::post('/login', [userController::class, 'authenticate'])->middleware('guest');;


   
Route::post('/blog/posts/{post:slug}/comments', [PostCommentsController::class, 'store']);
    

    Route::get('/blog', [PostsController::class, 'index']);


    Route::get('/blog/posts/{post:slug}',[PostsController::class, 'show']); 

    
    Route::get('/blog/categories/{category:slug}', function (Category $category){
        return view ('webpage.blog' , [
            'posts' => $category->posts
        ]);
    });
    Route::get('/blog/authors/{author:username}', function (User $author){
            return view ('webpage.blog' , [
                'posts' => $author->posts
        ]);
    });

    
  Route::middleware('can:admin')->group(function(){
    // resource adminpostcontrollerin icindeki get post ve s. birbasa burdan oxuyur..
    Route::resource('/admin/posts', AdminPostController::class); // except funksiyasin da islede bilerdin
       // Route::get('/admin/posts/create', [AdminPostController::class, 'create']);
       // Route::post('/admin/posts', [AdminPostController::class, 'store']);
       // Route::get('/admin/posts', [AdminPostController::class, 'index']);
       // Route::get('/admin/posts/{post}/edit', [AdminPostController::class, 'edit']);
       // Route::patch('/admin/posts/{post}', [AdminPostController::class, 'update']);
       // Route::delete('/admin/posts/{post}', [AdminPostController::class, 'destroy']);
  });
   
   