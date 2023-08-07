<?php

namespace App\Http\Controllers;

class FrontController extends Controller
{
    public function index()
    {
        return view('front.index');
    }

    public function blog()
    {
        return view('front.blog');
    }
}
