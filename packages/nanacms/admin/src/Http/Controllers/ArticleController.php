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
            return redirect('admin/article');
        } else {
            return redirect()->back()->withInput()->withErrors('保存失败！');
        }
    }

    public function edit($id) {
      $article = Article::find($id);

      return view('admin::article.edit', compact('article'));
    }

    public function update(Request $request)
    {
    	$this->validate($request, [
	        'title' => 'required|max:255',
	        'description' => 'required',
	        'body' => 'required'
	    ]);
    	$article = Article::where('id', $request->get('id'))->first();
      $article->title = $request->get('title');
      $article->img_path = $request->get('img_path');
	    $article->img_path_arr = $request->get('img_path_arr');
	    $article->description = $request->get('description');
	    $article->body = $request->get('body');

		if($article->save()) {
			return redirect('admin/article');
		} else {
	        return redirect()->back()->withInput()->withErrors('保存失败！');
	    }

    }

	public function destroy($id)
	{
	    Article::find($id)->delete();
	    return Response::json(['errno'=>0, 'msg'=>'删除成功']);
	}

}
