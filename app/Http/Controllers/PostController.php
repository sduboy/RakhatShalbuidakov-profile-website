<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class PostController extends Controller
{
    public function index() {
        $posts = Post::all();

        return view('blog.post')->with(['posts' => $posts]);
    }
}
