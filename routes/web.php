<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TubesController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CetakController;
use App\Models\Genre;
use App\Models\User;
use App\Models\Post;


Route::get('/', function () {
    return view('/page/dashboard', [
        'posts' => Post::latest()
    ]);
})->name('dashboard');

Route::get('/', [TubesController::class, 'index']);

Route::get('/page/dashboard', [TubesController::class, 'index']);

Route::get('/page/aboutus', [TubesController::class, 'show_aboutus']);

Route::get('/page/genre', [TubesController::class, 'show_genre']);

Route::get('/page/detail', [TubesController::class, 'show_detail']);

Route::get('/detail/{post:slug}', 
[TubesController::class, 'detail'])->name('detail'); //route untuk tampil

Route::get('/genres/{genre:slug}', function(Genre $genre){
    return view('/page/genre', [
        'title'=> $genre->name,
        'posts' => $genre->posts->load('genre', 'author'),
        'genre' => $genre->name
    ]);
});

Route::get('/genres', function(){
    return view('/page/genres', [
        'title'=> 'All Genre Categories',
        'genres' => Genre::all(),
    ]);
});

Route::get('/author/{author:username}', function(User $author)
{
    return view('/page/author', 
    [
        'title'=> 'Cerpen Dari Author',
        'author' => $author,
        'posts' => $author->posts->load('genre', 'author'),
    ]);
});

// Halaman Dashboard
Route::get('/dashboard', function () {
    return view('dashboard.index');
})->name('dashboardku')->middleware('auth');


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->name('register')->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

// Route::resource('/dashboard/genres', AdminController::class)->middleware('admin');

// akun user
Route::get('/dashboard/users', [Admincontroller::class, 'show_akun'])->middleware('admin');

Route::get('/dashboard/create_akun', [AdminController::class, 'create_akun'])->middleware('admin');
Route::post('/dashboard/store_akun', [AdminController::class, 'store_akun'])->middleware('admin');

Route::get('/dashboard/akun/{id}/edit', [AdminController::class, 'edit_akun'])->name('akun.edit')->middleware('admin');
Route::put('/dashboard/akun/{id}', [AdminController::class, 'update_akun'])->name('akun.update')->middleware('admin');
Route::delete('/dashboard/akun/{id}', [AdminController::class, 'delete_akun'])->name('akun.delete')->middleware('admin');

// genre
Route::get('/dashboard/genres', [Admincontroller::class, 'show_genre'])->middleware('admin');

Route::get('/dashboard/create_genre', [AdminController::class, 'create_genre'])->middleware('admin');
Route::post('/dashboard/store_genre', [AdminController::class, 'store_genre'])->middleware('admin');

Route::get('/dashboard/genre/{id}/edit', [AdminController::class, 'edit_genre'])->name('genre.edit')->middleware('admin');
Route::put('/dashboard/genre/{id}', [AdminController::class, 'update_genre'])->name('genre.update')->middleware('admin');
Route::delete('/dashboard/genre/{id}', [AdminController::class, 'delete_genre'])->name('genre.delete')->middleware('admin');

// postmin
Route::get('/dashboard/postmin', [Admincontroller::class, 'show_postingan'])->middleware('admin');
Route::delete('/dashboard/post/{id}', [Admincontroller::class, 'delete_post'])->name('post.delete')->middleware('admin');

//comments

Route::get('/dashboard/comments', [Admincontroller::class, 'show_comment'])->middleware('admin');

Route::delete('/dashboard/comment/{id}', [AdminController::class, 'delete_comment'])->name('comment.delete')->middleware('admin');

Route::post('comments', [CommentController::class, 'store'] );

Route::get('cetak/{id}', [CetakController::class, 'cetak'])->name('cetak');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
