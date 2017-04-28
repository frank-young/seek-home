@extends('layouts.app')

@section('content')
<!-- <div class="jumbotron">
  <div class="container">
    <div class="col-md-4">
      <h1>
        西可品牌管理
      </h1>
      <p>
        seek 探索，追寻<br>
        Life is seeking 生活总是在追求和探索

      </p>
      <div class="btn-group mr-20">
        <a class="btn btn-warning btn-lg" role="button" data-toggle="modal" data-target="#contactModal">联系我们</a>
      </div>
      <div class="btn-group">
        <a class="btn btn-line btn-lg">详情</a>
      </div>
    </div>
  </div>
  <div class="blur blur-hook"></div>
</div> -->

<carousel
  :data="{{$data['carousels']}}">
</carousel>

<sub-title
  :title="'案例展示'"
>
</sub-title>
<example-list :data="{{$data['articles']}}"></example-list>

<btn-more
  :more="'/example'"
>
</btn-more>

<sub-title
  :title="'合作客户'"
>
</sub-title>

<image-grid
  :data="{{$data['customers']}}"
>
</image-grid>

<split-box-footer
  :title="'Life is seeking，生活总是在追求和探索'"
  :text="'联系我们：022-58095866'"
>
</split-box-footer>


@endsection
