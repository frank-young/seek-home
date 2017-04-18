<?php namespace Nanacms\Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Config;
use Nanacms\Admin\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class ArticleController extends Controller
{
    /**
     * Show the application welcome screen to the user.
     *
     * @return Response
     */
    public function index()
    {
        $articles = Article::all();
        return view('admin::article.index', compact('articles'));
    }

    public function create()
    {
        return view('admin::article.create');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:255',
            'description' => 'required',
            'body' => 'required',
        ]);

        $article = Article::create($request->all());
        if ($article->save()) {
            return redirect('article');
        } else {
            return redirect()->back()->withInput()->withErrors('保存失败！');
        }
    }
}
