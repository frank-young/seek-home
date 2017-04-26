<?php namespace Nanacms\Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Config;
use Nanacms\Admin\Models\Carousel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class CarouselController extends Controller
{
    /**
     * Show the application welcome screen to the user.
     *
     * @return Response
     */
    public function index()
    {
        $carousels = Carousel::all();
        return view('admin::carousel.index', compact('carousels'));
    }

    public function create()
    {
        return view('admin::carousel.create');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:255',
            'description' => 'required',
            'body' => 'required',
        ]);

        $carousel = Carousel::create($request->all());
        if ($carousel->save()) {
            return redirect('admin/carousel');
        } else {
            return redirect()->back()->withInput()->withErrors('保存失败！');
        }
    }

    public function edit($id) {
      $carousel = Carousel::find($id);

      return view('admin::carousel.edit', compact('carousel'));
    }

    public function update(Request $request)
    {
    	$this->validate($request, [
	        'title' => 'required|max:255',
	        'description' => 'required',
	        'body' => 'required'
	    ]);
    	$carousel = Carousel::where('id', $request->get('id'))->first();
      $carousel->title = $request->get('title');
	    $carousel->img_path = $request->get('img_path');
	    $carousel->description = $request->get('description');
	    $carousel->body = $request->get('body');

		if($carousel->save()) {
			return redirect('admin/carousel');
		} else {
	        return redirect()->back()->withInput()->withErrors('保存失败！');
	    }

    }

	public function destroy($id)
	{
	    Carousel::find($id)->delete();
	    return Response::json(['errno'=>0, 'msg'=>'删除成功']);
	}

}
