<?php namespace Nanacms\Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Config;

class SettingController extends Controller
{
    /**
     * Show the application welcome screen to the user.
     *
     * @return Response
     */
    public function index()
    {
        return view('admin::admin');
    }
}
