<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use App\Services\Newsletter;

class newsletterController extends Controller
{
    function __invoke(Newsletter $newsletter)
    {
        request()->validate([
            "email" => "required|email"
        ]);

        try {
            $newsletter->subscribe(request('email'));
        } catch (Exception $e) {
            return back()->with("error", "This email could not be used for Newsletter");
        }
        return back()->with("success", "You are subscribed to newsletter");
    }
}