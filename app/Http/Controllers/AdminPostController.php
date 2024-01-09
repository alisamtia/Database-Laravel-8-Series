<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class AdminPostController extends Controller
{

    public function index(){
        return view("admin.posts.index",[
            'posts'=>Post::paginate(50)
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

    public function create(){
        return view("admin.posts.create",[
            'categories'=>Category::all()
        ]);
    }

}
