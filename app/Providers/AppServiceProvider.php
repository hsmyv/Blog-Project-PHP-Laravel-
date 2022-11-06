<?php

namespace App\Providers;

use App\Models\User;
use App\Models\Post;
use App\Observers\NewsObserver;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\UrlGenerator;
use Illuminate\Support\Facades\View;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Gate;
use Illuminate\Auth\Access\Response;
use App\Policies\PostPolicy;

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

  


      UrlGenerator::macro('toLanguage', function (string $language) {
        $currentRoute = app('router')->current();
        $newRouteParameters = array_merge(
            $currentRoute->parameters(), compact('language')
        );
        return $this->route($currentRoute->getName(), $newRouteParameters);
    });

    }



}
