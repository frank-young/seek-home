@extends('layouts.app')

@section('content')
<split-box-header
  :title="'联系我们'"
>
</split-box-header>

<div class="contact-wrap container">
  <div class="row p-t-b-100 min-h">
    <div class="col-md-8 col-md-offset-2">
      <h2 class="text-center">seek，探索，追寻</h2>
      <h2 class="text-center">Life is seeking，生活总是在追求和探索</h2>
      <h2 class="text-center">立即拨打服务热线</h2>
      <h2 class="text-center phone">022-58095866</h2>

    </div>
  </div>
</div>

<split-box-footer
  :title="'Life is seeking，生活总是在追求和探索'"
  :text="'联系我们：022-58095866'"
>
</split-box-footer>

@endsection
