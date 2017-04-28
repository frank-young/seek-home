@extends('layouts.app')

@section('content')
<split-box-header
  :title="'{{$article->title}}'"
>
</split-box-header>

<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="example-detail-wrap">
        <h1>{!! $article->title !!}</h1>
        <image-tab :data="{{$article}}"></image-tab>
        <div class="example-detail-text">
          {!! $article->body !!}
        </div>
      </div>

    </div>
  </div>
</div>

<split-box-footer
  :title="'Life is seeking，生活总是在追求和探索'"
  :text="'联系我们：022-58095866'"
>
</split-box-footer>

@endsection
