@extends('admin::layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">新建内容</div>
                <div class="panel-body">
                    <form action="{{ url('article') }}" method="POST">
                        {!! csrf_field() !!}
                        <input type="text" name="title" class="form-control" required="required" placeholder="请输入标题">
                        <br>
                        <textarea name="description" rows="3" class="form-control" placeholder="请输入内容"></textarea>
                        <br>
                        <textarea name="body" rows="3" class="form-control" placeholder="请输入内容"></textarea>
                        <br>
                        <button class="btn btn-info">确认</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
