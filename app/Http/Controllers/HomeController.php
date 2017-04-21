<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Nanacms\Admin\Models\Article;

class HomeController extends Controller
{
    public function index()
    {
        // $articles = Article::all();
        // return view('home');
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function example()
    {
        return view('example');
    }

    public function contact()
    {
        return view('contact');
    }
}
