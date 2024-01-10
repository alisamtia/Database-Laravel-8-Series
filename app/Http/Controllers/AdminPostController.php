<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Validation\Rule;
class AdminPostController extends Controller
{

    public function index(){
        return view("admin.posts.index",[
            'posts'=>Post::latest()->paginate(7)
        ]);
    }

    public function store(Request $request){

        $attr=$this->validatePost();
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

    public function edit(Post $post){
        return view("admin.posts.edit",[
            "post"=>$post,
            "categories"=>Category::all()
            ]
    );
    }

    public function update(Post $post){

        $attr=$this->validatePost($post);

        if(isset($attr['thumbnail'])){
            $attr['thumbnail']=request()->file("thumbnail")->store("thumbnails");
        }

        $post->update($attr);
        return back()->with("success","Post Updated!");
    }

    protected function validatePost(?Post $post=null){
        $post ??= new Post();

        return request()->validate([
            'title'=>'required',
            'thumbnail'=> $post->exists ? "image" : "required|image",
            'slug'=>["required",Rule::unique("posts","slug")->ignore($post)],
            'category_id'=>['required',Rule::exists("categories","id")],
            'excerpt'=>'required|min:30',
            'body'=>'required|min:100'
        ]);
    }

    public function destroy(Post $post){
        $post->delete();
        return back()->with("success","Post Deleted Successfully!");
    }
}
