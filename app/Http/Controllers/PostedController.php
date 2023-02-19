<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\File;
use App\Models\Post;

class PostedController extends Controller
{
    public function show()
    {
        $posts = Post::all();

        return view('posted', compact('posts'));
    }
}
