<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Nanacms\Admin\Models\Article;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $articles = Article::all();
        // return view('home');
        return view('home', compact('articles'));
    }
}
