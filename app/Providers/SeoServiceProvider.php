<?php

namespace App\Providers;

use App\Page;
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

        $pages = Page::with('browseable')->get();

        $pages->each(function (Page $page) use ($router) {
            $browseable = $page->browseable;

            $router->get($page->slug, $browseable->getAction())
                ->defaults($browseable->getParameterName(), $browseable)
                ->name($page->slug)
                ->middleware('web');
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
