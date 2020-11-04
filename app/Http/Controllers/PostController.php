<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController
{
    public function show($slug)
    {
        $post = Post::where('slug',$slug)->first();

        return view('blog.post', compact('post'));

    }
}
