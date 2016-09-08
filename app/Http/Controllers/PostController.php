<?php

namespace App\Http\Controllers;

use DB;
use App\Tag;
use App\Post;
use App\Activity;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Middleware\Session;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Input;
use app\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Contracts\Auth\Authenticatable;

class PostController extends Controller
{
    public function index()
    {
        $posts = DB::table('posts')->get();

        return view('post.index', ['posts' => $posts]);
    }

    public function create()
    {
        $tags = DB::table('tags')->get();

        return view('post.create', ['tags' => $tags]);
    }

    public function store(Request $request)
    {
        $current_user = $request->user();
        $validator = Validator::make($request->all(), $this->rules());

        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }

        $post = new Post;
        $post->user_id = $current_user->id;
        $post->title = $request->title;
        $post->body = $request->body;
        $post->summary = trim($request->summary);
        $post->published = isset($request->published) ? true : false;
        $post->slug = str_slug($post->title, '_');

        $post->save();
        $post->tags()->sync($request->tags);

        return redirect()->action('PostController@create')->with('message', 'Articulo creado');
    }

    public function blog()
    {
        $posts = Post::where('published', '=', TRUE)
            ->orderBy('created_at', 'desc')
            ->take(10)
            ->get();

        $activities = Activity::take(10)
            ->orderBy('date', 'asc')
            ->get();

        return view('post.news', [
            'posts' => $posts,
            'activities' => $activities
        ]);
    }

    public function edit(Post $post)
    {
        $post_tags = $post->tags->toArray();

        return view('post.edit', [
            'post' => $post,
            'tags' => DB::table('tags')->get(),
            'tags_id' => $this->get_tags_id($post_tags)
        ]);
    }

    public function update(Request $request, Post $post)
    {
        $current_user = $request->user();
        $validator = Validator::make($request->all(), $this->rules());

        if ($validator->fails()) {
            return redirect('posts/' . $post->slug)->withInput()->withErrors($validator);
        }

        $post->title = $request->title;
        $post->body = $request->body;
        $post->summary = trim($request->summary);
        $post->published = isset($request->published) ? true : false;;
        $post->slug = str_slug($post->title, '_');

        $post->tags()->detach();
        $post->tags()->sync($request->tags);
        $post->save();

        return redirect()->action('PostController@index')->with('message', 'Actualizado');
    }

    public function delete(Post $post)
    {
        $post->delete();

        return redirect()->action('PostController@index')->with('message', 'Eliminado');
    }

    public function details(String $slug)
    {
        $post = Post::where('slug', '=', $slug)->first();

        return view('post.post', ['post' => $post]);
    }

    private function get_tags_id($tags)
    {
        $data = array_map(function($tag) {
            return $tag['id'];
        }, $tags);

        return $data;
    }

    private function rules()
    {
        return [
            'title' => 'required',
            'body' => 'required',
            'summary' => 'required|max:255',
            'tags' => 'required',
        ];
    }
}