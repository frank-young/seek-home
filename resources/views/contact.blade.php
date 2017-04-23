@extends('layouts.app')

@section('content')
<div class="jumbotron">
  <div class="container">
    <h1 class="mb-0">
      联系我们
    </h1>
  </div>
</div>

<div class="contact-wrap container">
  <div class="row p-t-b-100 min-h">
    <div class="col-md-4 col-md-offset-4">
        <form>
          <div class="form-group">
            <label>姓名</label>
            <input type="text" class="form-control" placeholder="姓名">
          </div>
          <div class="form-group">
            <label>手机</label>
            <input type="text" class="form-control" placeholder="手机">
          </div>
          <div class="form-group">
            <label>简单介绍</label>
            <textarea type="text" class="form-control" placeholder="简单的介绍"></textarea>
          </div>
          <button type="submit" class="btn btn-block btn-lg btn-primary">发送</button>
        </form>

    </div>
  </div>
</div>

<div class="jumbotron mb-0">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h2>西可，专业的品牌服务商</h2>
      </div>
      <div class="col-md-12 text-center mt-40">
        <a class="btn btn-line btn-lg" role="button" data-toggle="modal" data-target="#contactModal">联系我们</a>
      </div>
    </div>
  </div>
</div>

@endsection
