<?php
namespace Nanacms\Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use App\Http\Requests;
use Nanacms\Admin\Models\Image;
use App\Http\Controllers\Session;
use Illuminate\Support\Facades\Response;

class ImageController extends Controller
{
    public function upload(Request $request){
        $message="0";
        $validator=Validator::make($request->all(),[
            'file'=>'required|image'
        ] );
        if($validator->fails()){
            return Response::json([
                'errno'=>4000,
                'message'=>$validator->errors()
            ]);
        } else {
            $file=$request->file('file');//获取文件
            $fileName=md5(time().rand(0,10000)).'.'.$file->getClientOriginalExtension();//随机名称+获取图片的类型
            $savePath = 'public/uploads/article/'.$fileName;//存储到指定文件，例如image/.filename public/.filename
            $databasePath = 'uploads/article/'.$fileName;//存储到指定文件，例如image/.filename public/.filename
            Storage::put($savePath,File::get($file));//通过Storage put方法存储   File::get获取到的是文件内容
            if(Storage::exists($savePath)){
                $image = new Image;
                $image->path = $databasePath;
        				if ($image->save()) {
      			        $data = ['errno'=>0, 'msg'=>'上传成功！', 'path' => $databasePath, 'image_id' => $image->id];
      					return Response::json($data);
      			    }
            }
        }
    }
}
