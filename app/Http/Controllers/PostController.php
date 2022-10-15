<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public static function index()
    {
        $judul = '';
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $judul = ' in ' . $category->name;
        }

        if (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $judul = ' by ' . $author->name;
        }


        return view('posts', [
            'title' => 'Website Streaming Asupan, Gore, Creepy & Lain-lain...', 'judul' => 'All Post' . $judul,
            'posts' => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(15)->withQueryString(),
            'categories' => Category::all()
        ]);
    }

    public static function show(Post $post)
    {
        return view('post', [
            'title' => $post->title,
            'post' => $post,
            'categories' => Category::all(),
            'terbaru' => Post::latest()->paginate(8)
        ]);
    }
}
