<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function getAllPost(){
        $posts = Post::paginate(5);
        return view('front.AllPost', compact('posts'));
    }
}
