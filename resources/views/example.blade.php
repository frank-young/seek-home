@extends('layouts.app')

@section('content')
<split-box-header
  :title="'公司案例'"
>
</split-box-header>

<example-list :data="{{$articles}}"></example-list>

<split-box-footer
  :title="'Life is seeking，生活总是在追求和探索'"
  :text="'联系我们：022-58095866'"
>
</split-box-footer>

@endsection
