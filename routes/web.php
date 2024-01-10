<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\PostController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\sessionControllers;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\newsletterController;
use App\Http\Controllers\AdminPostController;

Route::POST("newsletter", newsletterController::class);

Route::get('/', [PostController::class, 'index']);
Route::get('/posts/{post:slug}', [PostController::class, 'showPost']);
Route::get('/register', [registerController::class, 'view'])->middleware("guest");
Route::post("/register", [registerController::class, 'store'])->middleware("guest");

Route::post("/logout", [sessionControllers::class, 'destroy'])->middleware("auth");

Route::get("/login", [sessionControllers::class, 'create'])->middleware("guest");
Route::post("/login", [sessionControllers::class, 'store'])->middleware("guest");

Route::post("/posts/{post:slug}/comment", [CommentController::class, 'store'])->middleware("auth");

// Only Admin
Route::middleware("can:admin")->group(function(){
    Route::resource("/admin/posts",AdminPostController::class);
});

// Route::get("/admin/posts", [AdminPostController::class, 'index']);
// Route::get("/admin/posts/create", [AdminPostController::class, 'create']);
// Route::post("/admin/posts/create", [AdminPostController::class, 'store']);
// Route::get("/admin/posts/{post}/edit",[AdminPostController::class,'edit']);
// Route::patch("/admin/posts/{post}",[AdminPostController::class,'update']);
// Route::delete("/admin/posts/{post}",[AdminPostController::class,'destroy']);
