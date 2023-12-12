<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Post;
use App\Models\Setting;
use App\Models\Slide;
use Illuminate\Http\Request;

class AdminPanelController extends Controller
{
    public function login()
    {
        if (\auth()->user())
            return redirect('/panel');

        return view('adminPanel.login.login');
    }

    public function signin(Request $request)
    {
        $data = $request->only('email', 'password');

        if (!auth()->attempt($data)) {
            return back();
        }

        return redirect('/panel');
    }

    public function logout()
    {
        auth()->logout();

        return redirect('/login');
    }

    public function index()
    {
        return view('adminPanel.index.index');
    }

    public function hakkimizda()
    {
        $images = Image::where('category_id', '=', 1)->get();

        return view('adminPanel.about.index', compact('images'));
    }

    public function update_hakkimizda(Request $request)
    {
        $args = $request->only('hakkimizda_title_tr', 'hakkimizda_desc_tr', 'hakkimizda_title_en', 'hakkimizda_desc_en', 'images');

        foreach ($args as $key => $value)
            Setting::where('key', $key)->update(['value' => $value]);

        if ($request->hasfile('images')) {

            foreach ($request->file('images') as $image) {
                $name = time() . rand(1, 100) . '.' . $image->extension();
                $image->move(public_path('images'), $name);

                $data = new Image();
                $data->category_id = 1;
                $data->desc = 'hakkimizda';
                $data->image = $name;
                $data->save();
            }
        }

        return back();
    }

    public function update_settings(Request $request)
    {
        $args = $request->only('site_title_tr', 'site_title_en', 'telefon', 'mail', 'fax', 'acik_adres', 'twitter', 'youtube', 'linkedin', 'facebook', 'instagram', 'iframe', 'keywords', 'hakkimizda_tr', 'hakkimizda_en', 'title_1_tr', 'title_2_tr', 'title_3_tr', 'title_4_tr', 'title_1_en', 'title_2_en', 'title_3_en', 'title_4_en', 'desc_1_tr', 'desc_2_tr', 'desc_3_tr', 'desc_4_tr', 'desc_1_en', 'desc_2_en', 'desc_3_en', 'desc_4_en');

        foreach ($args as $key => $value)
            Setting::where('key', $key)->update(['value' => $value]);

        return back();
    }

    public function logo()
    {
        $images = Image::where('category_id', 2)->get();

        return view('adminPanel.logo.index', compact('images'));
    }

    public function logo_upload(Request $request, $id)
    {
        $args = $request->only('image');

        if ($request->hasfile('image')) {
            $image = time() . rand(1, 100) . '.' . $args['image']->extension();
            $args['image']->move(public_path('images'), $image);

            Image::updateOrCreate([
                'category_id'   => 2,
                'type_id'   => $id,
            ],[
                'category_id'   => 2,
                'type_id'       => $id,
                'desc'          => 'logo',
                'image'         => $image,
            ]);
        }

        return back();
    }

    public function delete_image($id)
    {
        $data = Image::find($id);
        $data->delete();

        return back();
    }

    public function slide()
    {
        $slides = Slide::with(array('images' => function ($query){
            $query->where('category_id', 3);
        }))->get();

        return view('adminPanel.slide.index', compact('slides'));
    }

    public function upload_slide(Request $request)
    {
        $args = $request->only('title_tr', 'title_en', 'desc_tr', 'desc_en');

        $slide = new Slide();
        $slide->title_tr = $args['title_tr'];
        $slide->title_en = $args['title_en'];
        $slide->desc_tr = $args['desc_tr'];
        $slide->desc_en = $args['desc_en'];
        $slide->save();

        if ($request->hasfile('images')) {
            foreach ($request->file('images') as $image) {
                $name = time() . rand(1, 100) . '.' . $image->extension();
                $image->move(public_path('images'), $name);

                $data = new Image();
                $data->category_id = 3;
                $data->type_id = $slide['id'];
                $data->desc = 'slide';
                $data->image = $name;
                $data->save();
            }
        }

        return back();
    }

    public function delete_slide($id)
    {
        $slide = Slide::find($id);
        $slide->delete();

        $data = Image::where('category_id', 3)
            ->where('type_id', $id)
            ->first();
        $data->delete();

        return back();
    }

    public function projeler()
    {
        $posts = Post::get();

        return view('adminPanel.post.index', compact('posts'));
    }

    public function showProje($id)
    {
        $post = Post::where('id', $id)->first();
        $images = Image::where('type_id', $id)->where('category_id', 4)->get();

        return view('adminPanel.post.show', compact('post', 'images'));
    }

    public function delete_proje($id)
    {
        $data = Post::find($id);
        $data->delete();

        return redirect('/panel/projeler');
    }

    public function showPost($id)
    {
        $data = Post::where('id', $id)->first();

        $data->seen = 1;
        $data->save();

    }

    public function unshowPost($id)
    {
        $data = Post::where('id', $id)->first();

        $data->seen = 0;
        $data->save();

    }

    public function completed($id)
    {
        $data = Post::where('id', $id)->first();

        $data->completed = 1;
        $data->save();

    }

    public function unCompleted($id)
    {
        $data = Post::where('id', $id)->first();

        $data->completed = 0;
        $data->save();

    }

    public function proje_olustur()
    {
        return view('adminPanel.post.create');
    }

    public function proje_store(Request $request)
    {
        $args = $request->only('title_tr', 'title_en', 'body_tr', 'body_en', 'images');

        $post = new Post();
        $post->title_tr = $args['title_tr'];
        $post->title_en = $args['title_en'];
        $post->body_tr = $args['body_tr'];
        $post->body_en = $args['body_en'];
        $post->seen = 1;
        $post->save();

        if ($request->hasfile('images')) {

            foreach ($request->file('images') as $image) {
                $name = time() . rand(1, 100) . '.' . $image->extension();
                $image->move(public_path('images'), $name);

                $data = new Image();
                $data->category_id = 4;
                $data->type_id = $post->id;
                $data->desc = 'post';
                $data->image = $name;
                $data->save();
            }
        }

        return redirect('/panel/projeler');
    }

    public function proje_update(Request $request, $id)
    {
        $args = $request->only('title_tr', 'title_en', 'body_tr', 'body_en', 'images');

        $post = Post::where('id', $id)->first();
        $post->title_tr = $args['title_tr'];
        $post->title_en = $args['title_en'];
        $post->body_tr = $args['body_tr'];
        //$post->body_en = $args['body_en'];
        $post->seen = 1;
        $post->save();

        if ($request->hasfile('images')) {

            foreach ($request->file('images') as $image) {
                $name = time() . rand(1, 100) . '.' . $image->extension();
                $image->move(public_path('images'), $name);

                $data = new Image();
                $data->category_id = 4;
                $data->type_id = $post->id;
                $data->desc = 'post';
                $data->image = $name;
                $data->save();
            }
        }

        return redirect('/panel/projeler/'. $id);
    }

    public function homeAbout()
    {
        $images = Image::where('category_id', 5)->get();

        return view('adminPanel.homeAbout.homeAbout', compact('images'));
    }

    public function homeAbout_upload(Request $request)
    {
        $args = $request->only('image');

        if ($request->hasfile('image')) {
            $image = time() . rand(1, 100) . '.' . $args['image']->extension();
            $args['image']->move(public_path('images'), $image);

            Image::updateOrCreate([
                'category_id'   => 5,
                'type_id'   => 5,
            ],[
                'category_id'   => 5,
                'type_id'       => 5,
                'desc'          => 'biz kimiz',
                'image'         => $image,
            ]);
        }

        return back();
    }
}
