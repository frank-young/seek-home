<?php namespace Nanacms\Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Config;
use Nanacms\Admin\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class CustomerController extends Controller
{
    /**
     * Show the application welcome screen to the user.
     *
     * @return Response
     */
    public function index()
    {
        $customers = Customer::all();
        return view('admin::customer.index', compact('customers'));
    }

    public function create()
    {
        return view('admin::customer.create');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:255',
            'img_path' => 'required'
        ]);

        $customer = Customer::create($request->all());
        if ($customer->save()) {
            return redirect('admin/customer');
        } else {
            return redirect()->back()->withInput()->withErrors('保存失败！');
        }
    }

    public function edit($id) {
      $customer = Customer::find($id);

      return view('admin::customer.edit', compact('customer'));
    }

    public function update(Request $request)
    {
    	$this->validate($request, [
	        'title' => 'required|max:255',
	        'img_path' => 'required'
	    ]);
    	$customer = Customer::where('id', $request->get('id'))->first();
      $customer->title = $request->get('title');
	    $customer->img_path = $request->get('img_path');
	    $customer->description = $request->get('description');
	    $customer->link = $request->get('link');

		if($customer->save()) {
			return redirect('admin/customer');
		} else {
	        return redirect()->back()->withInput()->withErrors('保存失败！');
	    }

    }

	public function destroy($id)
	{
	    Customer::find($id)->delete();
	    return Response::json(['errno'=>0, 'msg'=>'删除成功']);
	}

}
