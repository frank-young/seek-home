@extends('admin::layouts.app')

@section('content')
@include('UEditor::head')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">新建内容</div>
                <div class="panel-body">
                    <upload :token="'{{ csrf_token() }}'" :path="'{{$article->img_path}}'"></upload>
                    <upload-batch :token="'{{ csrf_token() }}'"></upload-batch>
                    <form action="{{ url('admin/article/update') }}" method="POST">
                        {!! csrf_field() !!}
                        <input name="_method" type="hidden" value="PATCH">
                        <input type="hidden" name="img_path" v-model="imagePath">
                        <input type="hidden" name="img_path_arr" v-model="imagePathArr">
                        <input type="hidden" name="id" value="{{$article->id}}">
                        <input type="text" name="title" class="form-control" required="required" placeholder="请输入标题" value="{{$article->title}}">
                        <br>
                        <textarea name="description" rows="3" class="form-control" placeholder="请输入简介">{{$article->description}}</textarea>
                        <br>
                        <script id="container" name="body" type="text/plain">
                              {{$article->body}}
                          </script>

                          <!-- 实例化编辑器 -->
                          <script type="text/javascript">
                              var ue = UE.getEditor('container');
                          </script>
                        <br>
                        <button class="btn btn-info">确认</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
