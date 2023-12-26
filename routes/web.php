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

Route::POST("newsletter", newsletterController::class);

Route::get('/', [PostController::class, 'index']);
Route::get('/posts/{post:slug}', [PostController::class, 'showPost']);
Route::get('/register', [registerController::class, 'view'])->middleware("guest");
Route::post("/register", [registerController::class, 'store'])->middleware("guest");

Route::post("/logout", [sessionControllers::class, 'destroy'])->middleware("auth");

Route::get("/login", [sessionControllers::class, 'create'])->middleware("guest");
Route::post("/login", [sessionControllers::class, 'store'])->middleware("guest");

Route::post("/posts/{post:slug}/comment", [CommentController::class, 'store'])->middleware("auth");

Route::get("/admin/posts/create", [PostController::class, 'create'])->middleware("admin");