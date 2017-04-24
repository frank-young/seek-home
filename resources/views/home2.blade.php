@extends('layouts.app')

@section('content')
<div class="jumbotron">
  <div class="container">
    <div class="col-md-4">
      <h1>
        西可品牌管理
      </h1>
      <p>
        <!-- 西可（天津）倾力打造国家级特色小镇聚合平台 -->
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
    <!-- <div class="col-md-6">
        <img class="banner" src="{{ asset('images/banner.png') }}" alt="">
    </div> -->
  </div>
  <div class="blur blur-hook"></div>
</div>
<div class="container content-wrap">
  <div class="row">
    <div class="col-md-6">
      <div class="text-box">
        <h3>聚集精英   顶尖团队</h3>
        <p>西可品牌设计聚集了中国颇具实力与创新力的有为之士，是由众多知名院校毕业的拥有资深行业经验的视觉设计和品牌咨询精英组成的优秀团队。</p>
      </div>
    </div>
    <div class="col-md-6">
      <div class="img-box">
        <img class="blur-hook" src="{{ asset('images/img_01_c.jpeg') }}" alt="">
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6 col-md-push-6">
      <div class="text-box">
        <h3>起源香港  知名品牌</h3>
        <p>西可品牌为香港西可品牌管理有限公司天津分公司，整合国际国内资源，目前在香港以投融资、金融业务为主；在内地开展品牌策略设计、创新创业咖啡、创投平台运营三方面业务。</p>
      </div>
    </div>
    <div class="col-md-6 col-md-pull-6">
      <div class="img-box">
        <img class="blur-hook" src="{{ asset('images/img_02_c.jpeg') }}" alt="">
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <div class="text-box">
        <h3>服务广泛 精益求精</h3>
        <p>服务客户有：清华大学、北京大学、北京大学天津校友会、天津大学、南开大学、
天津商业大学、市委宣传部、武清开发区、北辰开发区、滨海建投集团、天津互联网协会、招商银行、华夏银行、华夏未来幼儿园、华明集团、中冶天工、中粮集团、丰禾鼎太等。
对于不同客户，制定不同方案，项目无大小，认真对待每项设计，是西可的职责。</p>
      </div>
    </div>
    <div class="col-md-6">
      <div class="img-box">
        <img class="blur-hook" src="{{ asset('images/img_03_c.jpeg') }}" alt="">
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6 col-md-push-6">
      <div class="text-box">
        <h3>携手清华  共创辉煌</h3>
        <p>清华工美由清华大学控股；在旅游规划设计、环境景观设计、建筑设计、室内设计、陈设艺术、工业设计、绘画和雕塑创作等领域，先后承接和完成了一大批国家重要项目，并广泛开展国际合作。
西可设计为清华美院实习基地，并为清华工美提供专业的品牌和环境导示服务。</p>
      </div>
    </div>
    <div class="col-md-6 col-md-pull-6">
      <div class="img-box">
        <img class="blur-hook" src="{{ asset('images/img_04_c.jpeg') }}" alt="">
      </div>
    </div>
  </div>
</div>
<div class="jumbotron mt-80">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <h2 >因为信任，所以专业</h2>
      </div>
      <div class="col-md-4 text-center mt-xs-40">
          <a class="btn btn-line btn-lg" role="button" data-toggle="modal" data-target="#contactModal">联系我们</a>
      </div>
    </div>
  </div>
</div>

<div class="container mt-80">
  <div class="row">
    <div class="col-md-12">
      <h2 class="text-center"></h2>
    </div>
    <div class="col-md-8 col-md-offset-2 img-center">
      <div class="pro-img-box">
        <img src="{{ asset('images/pro_01.jpg') }}" alt="">
      </div>
      <div class="pro-img-box">
        <img src="{{ asset('images/pro_02.jpg') }}" alt="">
      </div>
      <div class="pro-img-box">
        <img src="{{ asset('images/pro_03.jpg') }}" alt="">
      </div>
      <div class="pro-img-box">
        <img src="{{ asset('images/pro_04.jpg') }}" alt="">
      </div>
      <div class="pro-img-box">
        <img src="{{ asset('images/pro_05.jpg') }}" alt="">
      </div>
      <div class="pro-img-box">
        <img src="{{ asset('images/pro_06.jpg') }}" alt="">
      </div>
    </div>
  </div>
</div>
<div class="jumbotron mt-80">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <h2>生活总是在追求和探索</h2>
      </div>
      <div class="col-md-4 text-center mt-xs-40">
          <a class="btn btn-line btn-lg" role="button" data-toggle="modal" data-target="#contactModal">联系我们</a>
      </div>
    </div>
  </div>
</div>
<div class="container mt-80">
  <div class="row">
    <div class="col-md-12 mb-80">
      <h2 class="text-center">案例展示</h2>
    </div>
    <example-list :data="{{$articles}}"></example-list>
  </div>
</div>

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
