<?php

namespace App\Providers;

use App\Models\Image;
use App\Models\Post;
use App\Models\Setting;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\App;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $lang = App::getLocale();

        view()->composer('adminPanel.*', function ($view) {

            $settings = Setting::pluck('value', 'key');

            $view->with('settings', $settings);
        });

        view()->composer('front.*', function ($view) use ($lang) {

            $settings = Setting::pluck('value', 'key');
            $postsNav = Post::where('seen', 1)->get();
            $postsFooter = Post::where('seen', 1)->paginate(4);
            $navbarLogo = Image::where('category_id', 2)->where('type_id', 1)->first();
            $footerLogo = Image::where('category_id', 2)->where('type_id', 2)->first();

            $view->with('settings', $settings);
            $view->with('postsNav', $postsNav);
            $view->with('postsFooter', $postsFooter);
            $view->with('lang', $lang);
            $view->with('navbarLogo', $navbarLogo);
            $view->with('footerLogo', $footerLogo);
        });
    }
}
