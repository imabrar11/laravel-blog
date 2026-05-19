<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostModel;

class PostController extends Controller
{
    public function index()
    {
        $title = 'Blog Post';

        $posts = PostModel::all();

        return view('post.index', compact('title', 'posts'));
    }

    public function detail($id)
    {

        try {
            $post = PostModel::findOrFail($id);
            $title = $post->title;
            return view('post.detail', compact('post', 'title'));
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $ex) {
            return response()->view('errors.404', [], 404);
        }
    }

    // private function getPost()
    // {
    //     return json_decode(json_encode([
    //         ['id' => 1, 'title' => 'Post 1', 'description' => 'description 1', 'category' => 'Sports'],
    //         ['id' => 2, 'title' => 'Post 2', 'description' => 'description 2', 'category' => 'Politics']
    //     ]));
    // }
}
