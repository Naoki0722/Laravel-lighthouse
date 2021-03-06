<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function edit(Int $id)
    {
        $post = Post::where('id', $id)->first();

        return view('post.edit', compact('post'));
    }
}
