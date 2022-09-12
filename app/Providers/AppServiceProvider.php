<?php

namespace App\Providers;
use App\Models\News;
use App\Observers\NewsObserver;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Database\Eloquent\Model;
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

    View::composer(['cedvel', 'create'], function($view){
      $view->with('news', News::all());
        });
     News::observe(NewsObserver::class);
    }
    
}
