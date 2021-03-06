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
        $articles = Article::offset(0)->limit(6)->get(['id','title','description','img_path']);
        $example = Article::offset(6)->limit(12)->get(['id','title','description','img_path']);

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

    public function about()
    {
        return view('about');
    }

    public function example()
    {
        $articles = Article::all(['id','title','description','img_path']);
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
