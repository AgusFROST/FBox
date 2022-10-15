<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class FeedController extends Controller
{
    /**
     * @return response()
     */

    public static function index()
    {
        $posts = Post::latest()->get();

        return response()
            ->view('rss', [
                'posts' => $posts,
            ])
            ->header('Content-Type', 'text/xml');
    }
}
