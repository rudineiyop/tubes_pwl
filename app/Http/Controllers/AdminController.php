<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Genre;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Cviebrock\EloquentSluggable\Services\SlugService;

class AdminController extends Controller
{
    public function index()
    {
        return view('dashboard.index', [
        ]);
    }

    public function show_genre(){
         //dd($posts);
         return view('dashboard.genres.index', [
            'genres' => Genre::all()
         ]);
    }

    public function show_postingan()
    {
        // $posts = Post::all(); untuk mengambil semua atribut
        $posts = Post::select('genre_id', 'author_id', 'title', 'body', 'image', 'id')->get();
        //dd($posts);
        return view('dashboard.postmin.index', compact('posts'));
    }
    public function show_comment()
    {
        $comments = Comment::all();
        //dd($posts);
        return view('dashboard.comments.index', compact('comments'));
    }

    public function show_akun()
    {
        $users = User::select('name', 'email', 'username', 'email_verified_at', 'password', 'id')->get();
        return view('dashboard.users.index', compact('users'));
    }

   
    public function create_akun()
    {
        return view('dashboard.users.create');
    }

    public function create_genre()
    {
        return view('dashboard.genres.create', [
            'post' => Post::all()
        ]); 
    }

    public function store_akun(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        $new_user = new User;
        $new_user->name = $request->name;
        $new_user->username = $request->username;
        $new_user->email = $request->email;
        $new_user->password = Hash::make($request->password);

        $new_user->save();

        return redirect('/dashboard/users')->with('status', 'Akun baru berhasil ditambahkan');
    }

    public function store_genre(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'slug' => 'required'
        ]);

        $new_genre = new Genre;
        $new_genre->name = $request->name;
        $new_genre->slug = $request->slug;
        $new_genre->save();

        return redirect('/dashboard/genres')->with('status', 'Genre baru berhasil ditambahkan');
    }

    public function edit_akun($id)
    {
        $user = User::find($id);
        return view('dashboard.users.edit', compact('user'));
    }

    public function edit_genre($id)
    {
        $genre = Genre::find($id);
        return view('dashboard.genres.edit', compact('genre'));
    }

    public function edit_post(Post $post)
    {
        return view('dashboard.postmin.edit', [
            'post' => $post,
            'genres' => Genre::all()
        ]);
    }

    public function update_akun(Request $request, $id)
    {
        $user = User::find($id);

        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'username' => 'required',
            'password' => 'required'
        ]);

        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        return redirect('/dashboard/users')->with('update_status', 'Akun berhasil diperbaharui');
    }

    public function update_genre(Request $request, $id)
    {
        $genre = Genre::find($id);

        $validated = $request->validate([
            'name' => 'required',
            'slug' => 'required',
        ]);

        $genre->name = $request->name;
        $genre->slug = $request->slug;

        $genre->save();

        return redirect('/dashboard/genres')->with('update_status', 'Genre berhasil diperbaharui');
    }

    public function update_post(Request $request, Post $post)
    {
        $rules =[
            'title' => 'required|max:255',
            'genre_id' => 'required',
            'body' => 'required',
            'image' => 'required|image|file|max:40960|min:500|'
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
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);

        Post::where('id', $post->id)
            ->update($validatedData);

        return redirect('/dashboard/postmin')->with('success', 'Cheerpen has been updated!');
    }


    public function delete_comment($id)
    {
        $comment = Comment::find($id);
        $comment->delete();
        return redirect('/dashboard/comments')->with('delete_status', "Comment berhasil dihapus");
    }

    public function delete_genre($id)
    {
        try {
            $genre = Genre::findOrFail($id);
    
            // Delete posts associated with the genre
            $posts = Post::where('genre_id', $id)->get();
            foreach ($posts as $post) {
                // Delete comments associated with the post
                $post->comments()->delete();
            }
    
            // Delete the genre
            $genre->delete();
    
            return redirect('/dashboard/genres')->with('delete_status', "Genre berhasil dihapus");
        } catch (\Exception $e) {
            return redirect('/dashboard/genres')->with('delete_status', "Gagal menghapus genre")->withErrors($e->getMessage());
        }
    }
    
    public function delete_post($id)
    {
        try {
            $post = Post::findOrFail($id);
    
            // Delete comments associated with the post
            $post->comments()->delete();
    
            // Delete the post
            $post->delete();
    
            return redirect('/dashboard/postmin')->with('success', 'Cerpen berhasil dihapus!');
        } catch (\Exception $e) {
            return redirect('/dashboard/postmin')->with('error', 'Gagal menghapus cerpen')->withErrors($e->getMessage());
        }
    }
    
    public function delete_user($id)
    {
        try {
            $user = User::findOrFail($id);
    
            // Delete posts associated with the user
            $posts = Post::where('author_id', $id)->get();
            foreach ($posts as $post) {
                // Delete comments associated with the post
                $post->comments()->delete();
            }
    
            // Delete the user
            $user->delete();
    
            return redirect('/dashboard/users')->with('delete_status', "Akun berhasil dihapus");
        } catch (\Exception $e) {
            return redirect('/dashboard/users')->with('delete_status', "Gagal menghapus akun")->withErrors($e->getMessage());
        }
    }
    

    public function store(Request $request)
    {
        
    }

    public function show(genre $genre)
    {
        //
    }

    public function edit(genre $genre)
    {
        //
    }

    public function update(Request $request, genre $genre)
    {
        //
    }

     public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Post::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}

