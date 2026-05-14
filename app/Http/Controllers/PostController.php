<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $title = 'Blog Post';

        $posts = json_decode(json_encode([
            // ['title' => 'Post 1', 'description' => 'description 1', 'category' => 'Sports'],
            // ['title' => 'Post 2', 'description' => 'description 2', 'category' => 'Politics']
        ]));

        return view('post.index', compact('title', 'posts'));
    }

    public function detail()
    {
        $title = 'Blog Detail';
        return view('post.detail', compact('title'));
    }
}
