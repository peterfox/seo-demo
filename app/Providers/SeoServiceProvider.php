<?php

namespace App\Providers;

use App\Post;
use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;

class SeoServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        /** @var Router $router */
        $router = app()->make('router');

        $posts = Post::all();

        $posts->each(function (Post $post) use ($router) {
            $router->get($post->slug, 'App\Http\Controllers\PostController@showPost')
                ->defaults('post', $post)
                ->name($post->slug);
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
