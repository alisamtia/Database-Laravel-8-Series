<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index', [
            'posts' => Post::latest()
                ->filter(request(['search', 'category', 'author']))
                ->paginate(6)->withQueryString(),
        ]);
    }
    public function showPost(Post $post)
    {
        return view('posts.show', [
            'post' => $post
        ]);
    }
    public function create(){
        return view("posts.create",[
            'categories'=>Category::all()
        ]);
    }
}