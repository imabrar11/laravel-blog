<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $title = 'Blog Post';

        $posts = $this->getPost();

        return view('post.index', compact('title', 'posts'));
    }

    public function detail($id)
    {
        $posts = $this->getPost();

        $post = collect($posts)->firstWhere('id', $id);

        $title = $post->title;

        return view('post.detail', compact('post', 'title'));
    }

    private function getPost()
    {
        return json_decode(json_encode([
            ['id' => 1, 'title' => 'Post 1', 'description' => 'description 1', 'category' => 'Sports'],
            ['id' => 2, 'title' => 'Post 2', 'description' => 'description 2', 'category' => 'Politics']
        ]));
    }
}
