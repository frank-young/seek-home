<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Nanacms\Admin\Models\Article;
use Nanacms\Admin\Models\Carousel;
use Nanacms\Admin\Models\Customer;

class HomeController extends Controller
{
    public function index()
    {
        $articles = Article::offset(0)->limit(6)->get();
        $example = Article::offset(6)->limit(12)->get();

        $carousels = Carousel::limit(6)->get();
        $customers = Customer::all();
        $data = [
          "articles" => $articles,
          "carousels" => $carousels,
          "customers" => $customers,
          "example" => $example
        ];

        return view('home', compact('data'));
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
