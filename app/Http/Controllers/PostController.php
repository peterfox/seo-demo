<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function showPost(Post $post)
    {
        return view('post')
            ->with('post', $post);
    }
}
