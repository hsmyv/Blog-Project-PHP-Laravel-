<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HaqqindaController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\MuellimController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\NewsController;
Route::get('/', function () {
    return view('welcome');
});


    Route::get('/news',[NewsController::class, 'index'])->name('news.index');
    Route::get('/news/list',[NewsController::class, 'list_news'])->name('news-list');
    Route::get('/news/create',[NewsController::class, 'create'])->name('news.create');
    




    Route::get("/",[MainController::class, 'index'])->name('home');

    Route::get('/haqqinda', 'App\Http\Controllers\HaqqindaController@index');
    Route::get('/haqqinda/{ad}', [HaqqindaController:: class, 'insan']);
    Route::get('/elaqe', 'App\Http\Controllers\ElaqeController@index');
    Route::post('/elaqe/post', 'App\Http\Controllers\ElaqeController@elaqepost')->name('formelaqe');
    
    Route::group(['middleware'=>'emailTesdiq'],function(){
        Route::get('/muellim', [MuellimController:: class, 'index'])->name('muellim');
        Route::post('/muellim/addteacher', [MuellimController:: class, 'elave'])->name('muellimelave');
        Route::get('/muellim/sil/{id}', [MuellimController:: class, 'delete'])->name('muellimdel');
        Route::get('/muellim/duzelt/{id}', [MuellimController:: class, 'duzelt'])->name('muellimduzelt');
        Route::post('/muellim/yenile{id}', [MuellimController:: class, 'yenile'])->name('muellimyenile');
    });
    Route::get('/tesdiq',function(){
            return view('tesdiq');
        })->name('tesdiq');

Route::group(['middleware'=>'notLogin'],function(){
    Route::get("/",[MainController::class, 'index'])->name('home');

    });
Route::group(['middleware'=>'isLogin'],function(){
    Route::get('/login', [AuthController::class, 'index'])->name('login_index');
    Route::post('/login/sumbit', [AuthController::class, 'login_sumbit'])->name('login-sumbit');
    
});


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

