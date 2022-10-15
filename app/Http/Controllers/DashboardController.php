<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.dashboard', [
            'title' => 'My Dashboard',
            'post' => Post::where('user_id', auth()->user()->id)->get()
        ]);
    }
}
