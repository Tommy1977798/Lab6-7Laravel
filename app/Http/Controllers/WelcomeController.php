<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //
    public function index()
    {
        $message = "Welcome to Laravel.Laverl make web development enjoyable!";
        return view('welcome', compact('message'));
    }
}
