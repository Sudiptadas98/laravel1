<?php


namespace App\Providers;

use App\Example;
use App\Collaborator;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // $this->app->bind('App\Example', function() {
        //     $collaborator = new Collaborator();
        //     $foo = 'foobar';

        //     return new Example($collaborator, $foo);
        // });
        // $this->app->bind('example', function() {
        //     return new Example();
        // });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
