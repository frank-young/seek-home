@extends('admin::layouts.app')

@section('content')
@include('UEditor::head')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">新建内容</div>
                <div class="panel-body">
                    <upload :token="'{{ csrf_token() }}'"></upload>
                    <upload-batch :token="'{{ csrf_token() }}'"></upload-batch>
                    <form action="{{ url('admin/article') }}" method="POST">
                        {!! csrf_field() !!}
                        <input type="hidden" name="img_path" v-model="imagePath">
                        <input type="hidden" name="img_path_arr" v-model="imagePathArr">
                        <input type="text" name="title" class="form-control" required="required" placeholder="请输入标题">
                        <br>
                        <textarea name="description" rows="3" class="form-control" placeholder="请输入内容"></textarea>
                        <br>
                        <script id="container" name="body" type="text/plain"></script>
                        <script type="text/javascript">
                            var ue = UE.getEditor('container');
                        </script>
                        <button class="btn btn-info">确认</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
