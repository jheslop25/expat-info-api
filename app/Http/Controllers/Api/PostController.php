<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('comments')->orderBy('created_at', 'DESC')->get();

        return response([
            'posts' => $posts,
        ])->setStatusCode(200);
    }

    public function show($id)
    {
        $post = Post::find($id);
        if (!$post) {
            return response([
                'error' => 'Post not found'
            ])->setStatusCode(200);
        }

        $post->load('comments');

        return response([
            'post' => $post,
        ])->setStatusCode(200);
    }
}
