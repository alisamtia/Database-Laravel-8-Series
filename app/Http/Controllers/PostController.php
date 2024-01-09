<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Validation\Rule;

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
    public function store(Request $request){
        $attr=$request->validate([
            'title'=>'required',
            'slug'=>'required|unique:posts,slug',
            'category_id'=>['required',Rule::exists("categories","id")],
            'excerpt'=>'required|min:30',
            'body'=>'required|min:100'
        ]);

        $attr['user_id']=auth()->id();
        $attr['thumbnail']=request()->file("thumbnail")->store("thumbnails");

        Post::create($attr);

        return redirect("/")->with("success","Post Created Successfully!");
    }
}
