<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\User;

class registerController extends Controller
{
    public function view()
    {
        return view('register.index');
    }
    public function store()
    {
        $attributes = request()->validate([
            'name' => 'required|min:3|max:255',
            'username' => 'required|min:3|max:255|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|max:255'
        ]);

        $user = User::create($attributes);

        auth()->login($user);

        return redirect("/")->with('success', "Your Account has been created");
    }
}
