<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Post;
use App\Models\Slide;
use Illuminate\Support\Facades\App;


class HomeController extends Controller
{
    public function index()
    {
        $slides = Slide::with(array('images' => function ($query){
            $query->where('category_id', 3);
        }))->get();

        $projects = Post::with(array('images' => function ($query){
            $query->where('category_id', 4);
        }))->get();

        $images = Image::where('category_id', 5)->get();

        return view('front.index.index', compact('slides', 'projects', 'images'));
    }

    public function hakkimizda()
    {
        $images = Image::where('category_id', 1)->get();

        return view('front.about.index', compact('images'));
    }

    public function iletisim()
    {
        return view('front.contact.index');
    }

    public function projelerimiz()
    {
        $projects = Post::with(array('images' => function ($query){
                $query->where('category_id', 4);
            }))->get();

        return view('front.post.index', compact('projects'));
    }

    public function projeDetay($id)
    {
        $post = Post::where('id', $id)
            ->with(array('images' => function ($query){
                $query->where('category_id', 4);
            }))->first();

        return view('front.post.show', compact('post'));
    }

    public function locale($locale = null)
    {
        if ($locale === null) {
            $locale = config('app.locale');
        }

        session()->put("locale", $locale);
        session()->save();

        App::setLocale(session()->get('locale'));

        return redirect('/');
    }

    public function tamamlanan_projelerimiz()
    {
        $projects = Post::where('completed', 1)
            ->with(array('images' => function ($query){
                $query->where('category_id', 4);
            }))->get();

        return view('front.post.completed_projects', compact('projects'));
    }

    public function devam_eden_projelerimiz()
    {
        $projects = Post::where('completed', 0)
            ->with(array('images' => function ($query){
                $query->where('category_id', 4);
            }))->get();

        return view('front.post.ongoing_projects', compact('projects'));
    }
}
