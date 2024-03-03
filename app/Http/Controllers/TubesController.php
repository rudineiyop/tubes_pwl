<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Genre;
use App\Models\Comment;
use Illuminate\Http\Request;

class TubesController extends Controller
{
    public function index()
{
    $posts = Post::latest()->filter(request(['search']))->paginate(6)->withQueryString();
    $popularPosts = Post::orderBy('post_view', 'desc')->take(7)->get();
    $latestPosts = Post::orderBy('created_at', 'desc')->take(6)->get();
    

    return view("page.dashboard", compact('posts', 'popularPosts', 'latestPosts'));
}

    public function detail(Post $post)
    {
        $post->increment('post_view');
        $recommendedPosts = Post::take(3)->get();
        return view("page.detail", compact('post', 'recommendedPosts'));
    }

    public function show_dashboard()
    {
        return view('page.dashboard');
    }

    public function show_aboutus()
    {
        return view('page.aboutus');
    }

    public function show_genre()
    {
        return view('page.genre');
    }

    public function show_detail()
    {
        return view('page.detail');
    }

    // Tambahkan method create, store, show, edit, update, destroy sesuai kebutuhan

}
