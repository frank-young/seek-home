@extends('layouts.app')

@section('content')
<div class="jumbotron">
  <div class="container">
    <h1 class="mb-0">
      公司案例
    </h1>
  </div>
  <div class="blur-other"></div>
</div>

<example-list :data="{{$articles}}"></example-list>

<div class="jumbotron mt-80 mb-0">
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
