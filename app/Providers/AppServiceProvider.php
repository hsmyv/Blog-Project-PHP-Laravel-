<?php

namespace App\Providers;
use App\Models\News;
use App\Models\User;
use App\Observers\NewsObserver;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Gate;
use Illuminate\Auth\Access\Response;
//use Illuminate\Contracts\Auth\Access\Gate\define;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    { 
       
      Model::unguard();

    //View::composer(['cedvel', 'create'], function($view){
    //  $view->with('news', News::all());
    //    });
   //  News::observe(NewsObserver::class);


      Gate::define('admin', function(User $user){
       return $user->username == "Hasan";

      });

    }

   
    
}
