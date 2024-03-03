<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Genre;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Hash;

class DashboardPostController extends Controller
{

    public function index()
    {
        // $posts = Post::select('title', 'genre' ,'excerpt', 'body', 'image')->get();
        return view('dashboard.posts.index', [
            'posts' => Post::where('author_id', auth()->user()->id)->get()
        ]);
    }

    public function show(Post $post)
    {
        return view('dashboard.posts.show', [
            'post' => $post
        ]);
    }

    public function create()
    {
        return view('dashboard.posts.create', [
            'genres' => Genre::all()
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:posts',
            'genre_id' => 'required',
            'body' => 'required',
            'image' => 'required|image|file|max:40960|min:20|'
        ]);

        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('cerpen-images');
        }

        $validatedData['author_id'] = auth()->user()->id;
        $validatedData['excerpt' ] = Str::limit(strip_tags($request->body), 200);

        Post::create($validatedData);

        return redirect('/dashboard/posts')->with('success', 'New Cheerpen has been added!');
    }

    public function edit(Post $post)
    {
        return view('dashboard.posts.edit', [
            'post' => $post,
            'genres' => Genre::all()
        ]);
    }

    public function update(Request $request, Post $post)
    {
        $rules =[
            'title' => 'required|max:255',
            'genre_id' => 'required',
            'body' => 'required',
            'image' => 'required|image|file|max:40960|min:20|'
        ];

        if($request->slug != $post->slug){
            $rules['slug'] = 'required|unique:posts';
        }

        $validatedData = $request->validate($rules);

        if($request->file('image')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('cerpen-images');
        }

        $validatedData['author_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 300);

        Post::where('id', $post->id)
            ->update($validatedData);

        return redirect('/dashboard/posts')->with('success', 'Cheerpen has been updated!');
    }
    

    public function destroy(Post $post)
    {
        if($post->image){
            Storage::delete($post->image);
        }
        Post::destroy($post->id);
        return redirect('/dashboard/posts')->with('success', 'Cerpen berhasil dihapus!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Post::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }

 
}
