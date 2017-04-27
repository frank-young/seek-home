@extends('admin::layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">新建内容</div>
                <div class="panel-body">
                    <upload :token="'{{ csrf_token() }}'" :path="'{{$customer->img_path}}'"></upload>
                    <form action="{{ url('admin/customer/update') }}" method="POST">
                        {!! csrf_field() !!}
                        <input name="_method" type="hidden" value="PATCH">
                        <input type="hidden" name="img_path" v-model="imagePath">
                        <input type="hidden" name="id" value="{{$customer->id}}">
                        <input type="text" name="title" class="form-control" required="required" placeholder="请输入标题" value="{{$customer->title}}">
                        <br>
                        <input type="text" name="link" class="form-control" placeholder="链接">
                        <br>
                        <textarea name="description" rows="3" class="form-control" placeholder="描述"></textarea>
                        <br>
                        <button class="btn btn-info">确认</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
