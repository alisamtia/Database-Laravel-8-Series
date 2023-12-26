<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sessionControllers extends Controller
{
    public function destroy()
    {
        auth()->logout();
        return redirect("/")->with("success", "Logged Out Successfully!");
    }
    public function create()
    {
        return view("sessions.create");
    }
    public function store()
    {
        $attributes = request()->validate([
            'email' => "required|email",
            'password' => "required",
        ]);

        if (!auth()->attempt($attributes)) {
            return back()->withErrors(['email' => "Your provided credentials are invalid"]);
        }

        session()->regenerate();
        return redirect("/")->with("success", "You are logged in successfully");
    }
}
