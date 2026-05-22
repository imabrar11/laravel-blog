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

    public function detail($slug)
    {

        try {

            $post = PostModel::where('slug', $slug)->first();
            if (!$post) {

                throw new \Illuminate\Database\Eloquent\ModelNotFoundException;
            }
            $title = $post->title;
            $category = $post->category;
            $relatedPosts = PostModel::where('category_id', $category->id)
                ->where('id', '!=', $post->id)
                ->take(5)
                ->get();
            return view('post.detail', compact('post', 'title', 'relatedPosts'));
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $ex) {

            return response()->view('errors.404', ['title' => '404 Not Found'], 404);
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
