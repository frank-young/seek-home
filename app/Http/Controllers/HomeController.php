<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Nanacms\Admin\Models\Article;

class HomeController extends Controller
{
    public function index()
    {
        $articles = Article::limit(3)->get();
        return view('home', compact('articles'));
    }

    public function index2()
    {
        $articles = Article::limit(3)->get();
        return view('home2', compact('articles'));
    }

    public function about()
    {
        return view('about');
    }

    public function example()
    {
        $articles = Article::all();
        return view('example', compact('articles'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function show($id)
    {
        $article = Article::find($id);
        return view('example/show', compact('article'));
    }
}
