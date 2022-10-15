<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class RSSFeedControllerr extends Controller
{
    /**
     * @return response()
     */

    public function index()
    {
        $posts = Post::latest()->gets();

        return response()->view('rss', [
            'posts' => $posts
        ])->header('Content-Type', 'text/xml');
    }
}
