@extends('layouts.app')

@section('content')
<split-box-header
  :title="'联系我们'"
>
</split-box-header>

<div class="contact-wrap container">
  <div class="row p-t-b-100 min-h">
    <div class="col-md-8 col-md-offset-2">
      <h1 class="text-center">西可（天津）品牌设计有限公司</h1>
      <h2 class="text-center mt-80">seek，探索，追寻</h2>
      <h2 class="text-center">Life is seeking，生活总是在追求和探索</h2>
      <h2 class="text-center">立即拨打服务热线</h2>
      <h2 class="text-center phone">022-58095866</h2>
      <h2 class="text-center mt-40">联系地址</h2>
      <h2 class="text-center" style="font-size:28px;">天津自贸区（空港经济特区）西五道35号汇集广场1-4-308</h2>
      <h2 class="text-center" style="font-size:28px;">天津市和平区大沽北路2号环球金融中心50层5006</h2>

    </div>
  </div>
</div>

<split-box-footer
  :title="'Life is seeking，生活总是在追求和探索'"
  :text="'联系我们：022-58095866'"
>
</split-box-footer>

@endsection
