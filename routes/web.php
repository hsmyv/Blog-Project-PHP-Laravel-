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
use App\Http\Controllers\ForgotPasswordController;
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


    //Route::post('/mail', [MainController::class, 'mail'])->name('mail');  // mail gondermek funksiyasi
    //Route::post('/letter', [MainController::class, 'letter'])->name('letter');  // mail gondermek funksiyasi

    //Route::get('/giris', [AuthController::class, 'index1'])->name('index-log');   // login sistemi
    //Route::post('/giris', [AuthController::class, 'login'])->name('login');


   //Route::middleware('auth')->group(function(){

   //});


   Route::redirect('/', 'en');


   Route::group([
    'prefix' => '{language}',
    'where' => ['language => (en|az)'],
   ], function(){

        Route::get('/', [userController::class, 'main'])->name('main');
        Route::get('/about', [userController::class, 'about'])->name('about');
        Route::get('/services', [userController::class, 'services'])->name('services');
        Route::get('/projects', [userController::class, 'projects'])->name('projects');
        Route::get('/blog', [PostsController::class, 'index'])->name('blog');
        Route::get('/contact', [userController::class, 'contact'])->name('contact');
        Route::get('/testimonial', [userController::class, 'testimonial'])->name('testimonial');

        //contact send mail
        Route::post('/mail', [userController::class, 'mail'])->name('mail');
        //newsletter
        Route::post('/letter', [userController::class, 'letter'])->name('letter');

        //show Login
        Route::get('/login', [userController::class, 'showlogin'])->middleware('guest')->name('showlogin');
        Route::post('/login', [userController::class, 'authenticate'])->middleware('guest')->name('login');

        //show register/Create Form
        Route::get('/register',[userController::class, 'create']) ->middleware('guest')->name('showregister');
        //Create New User
        Route::post('/users', [userController::class,'store'])->middleware('guest')->name('createuser');

        //Create LogOut
        Route::post('/logout', [userController::class, 'logout'])->middleware('auth')->name('logout');


        Route::post('/blog/posts/{post:slug}/comments', [PostCommentsController::class, 'store'])->name('postcomment');
        Route::post('/testimonial/comments', [PostCommentsController::class, 'store']); //baxarsan


        Route::get('/blog/posts/{post:slug}',[PostsController::class, 'show'])->name('getpostslug');

        Route::get('/blog/categories/{category:slug}',[PostsController::class, 'index'])->name('getcategoryslug');

        //Route::get('/blog/categories/{category:slug}', function ($language, Category $category){
        //       return view ('webpage.blog' , [
        //            'posts' => $category->posts,
         //           'currentCategory' => Category::firstWhere('slug', request('category')),
         //           'categories' => Category::all()
         //       ]);

        //})->name('getcategoryslug');

        Route::get('/blog/authors/{author:username}', function ($language, User $author){
                return view ('webpage.blog' , [
                    'posts' => $author->posts,
                    'categories' => Category::all()

                ]);

        })->name('getauthorusername');


        Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
        Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
        Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
        Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');

        Route::middleware('can:admin')->group(function(){
            // resource adminpostcontrollerin icindeki get post ve s. birbasa burdan oxuyur..
            //Route::resource('/admin/posts', AdminPostController::class); // except funksiyasin da islede bilerdin
                Route::get('/admin/posts/create', [AdminPostController::class, 'create'])->name('showpostcreate');
                Route::post('/admin/posts', [AdminPostController::class, 'store'])->name('adminpost');
                Route::get('/admin/posts', [AdminPostController::class, 'index'])->name('showpost');
                Route::get('/admin/posts/{post}/edit', [AdminPostController::class, 'edit'])->name('editpost');
                Route::patch('/admin/posts/{post}', [AdminPostController::class, 'update'])->name('patchpost');
                Route::delete('/admin/posts/{post}', [AdminPostController::class, 'destroy'])->name('deletepost');
          });
    });












    //show register/Create Form
   // Route::get('/register',[userController::class, 'create']) ->middleware('guest')->name('showregister');
    //Create New User
    //Route::post('/users', [userController::class,'store'])->middleware('guest')->name('createuser');


    //Create LogOut
    //Route::post('/logout', [userController::class, 'logout'])->middleware('auth')->name(logout);

    //show Login
    //Route::get('/login', [userController::class, 'showlogin'])->middleware('guest')->name('showlogin');
    //Route::post('/login', [userController::class, 'authenticate'])->middleware('guest')->name('login');

    //forgotpassword
    Route::get('/forgotpass', [AdminPostController::class, 'showforgotpassword']);


    //Route::post('/blog/posts/{post:slug}/comments', [PostCommentsController::class, 'store']);
    //Route::post('/testimonial/comments', [PostCommentsController::class, 'store']);
   // Route::get('/blog/posts/{post:slug}',[PostsController::class, 'show']);
   // Route::get('/blog/categories/{category:slug}', function (Category $category){
    //    return view ('webpage.blog' , [
    //        'posts' => $category->posts
    //    ]);
   // });
  //  Route::get('/blog/authors/{author:username}', function (User $author){
  //          return view ('webpage.blog' , [
   //             'posts' => $author->posts
   //     ]);
   // });


  //Route::middleware('can:admin')->group(function(){
    // resource adminpostcontrollerin icindeki get post ve s. birbasa burdan oxuyur..
  //  Route::resource('/admin/posts', AdminPostController::class); // except funksiyasin da islede bilerdin
       // Route::get('/admin/posts/create', [AdminPostController::class, 'create']);
       // Route::post('/admin/posts', [AdminPostController::class, 'store']);
       // Route::get('/admin/posts', [AdminPostController::class, 'index']);
       // Route::get('/admin/posts/{post}/edit', [AdminPostController::class, 'edit']);
       // Route::patch('/admin/posts/{post}', [AdminPostController::class, 'update']);
       // Route::delete('/admin/posts/{post}', [AdminPostController::class, 'destroy']);
  //});


