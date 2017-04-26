@extends('admin::layouts.app')

@section('content')
    <carousel-index :data="{{ $carousels }}"></carousel-index>
@endsection
