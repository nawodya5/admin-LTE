<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PostController extends Controller
{
    //

    public function index()
    {
        // Fetch posts from JSONPlaceholder API
        $response = Http::get('http://jsonplaceholder.typicode.com/posts');
        
        $posts = $response->json();
        
        return view('posts', compact('posts'));
    }
}
