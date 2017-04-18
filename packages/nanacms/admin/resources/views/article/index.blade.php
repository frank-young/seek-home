@extends('admin::layouts.app')

@section('content')
    <article-index :data="{{ $articles }}"></article-index>
@endsection
