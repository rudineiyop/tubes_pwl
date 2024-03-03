<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        if (Auth::check()) {
            $validator = Validator::make($request->all(), [
                'comment_body' => 'required|string'
            ]);

            if ($validator->fails()) {
                return redirect()->back()->with('message', 'Comment area is mandatory');
            }

            $post = Post::where('slug', $request->post_slug)->first();
            if ($post) {
                Comment::create([
                    'post_id' => $post->id,
                    'author_id' => Auth::user()->id,
                    'comment_body' => $request->comment_body
                ]);
                return redirect()->back()->with('message', 'Comment berhasil ditambahkan!!');
            } else {
                return redirect()->back()->with('message', 'No Such Post Found');
            }
        } else {
            return redirect('login')->with('message', 'Login first to comment');
        }
    }

    // Tambahkan method lain sesuai kebutuhan

}
