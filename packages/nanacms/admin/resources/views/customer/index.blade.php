@extends('admin::layouts.app')

@section('content')
    <customer-index :data="{{ $customers }}"></customer-index>
@endsection
