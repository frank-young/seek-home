<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keyword" content="{{ config('app.keyword') }}">

    <title>{{ config('app.name') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <!-- <span class="logo-s">SEEK</span><span class="logo-b">BRAND</span> -->
                        <img src="./images/logo.png" alt="">
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <li><a class="link link-nav" href="{{ url('/') }}">首页</a></li>
                        <li><a class="link link-nav" href="{{ url('/example') }}">公司案例</a></li>
                        <li><a class="link link-nav" href="{{ url('/about') }}">关于我们</a></li>
                        <li><a class="link link-nav" href="{{ url('/contact') }}">联系我们</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
        <footer class="footer">
          <div class="container">
            <div class="row">
              <div class="col-xs-3">
                <p>
                  <a class="link" href="{{ url('/') }}"> 首页</a>
                </p>
                <p>
                  <a class="link" href="{{ url('/example') }}"> 公司案例</a>
                </p>
                <p>
                  <a class="link" href="{{ url('/about') }}"> 关于我们</a>
                </p>
                <p>
                  <a class="link" href="{{ url('/contact') }}"> 联系我们</a>
                </p>
              </div>
              <div class="col-xs-9">
                <p class="text-right">Copyright © 2017 seekbrand.net 版权所有</p>
                <p class="text-right">西可（天津）有限公司</p>
                <p class="text-right"><a class="link" target="_blank" href="http://www.miitbeian.gov.cn/">津ICP备16054332-2号</a></p>
                <p class="text-right">Power By <a class="link" target="_blank" href="http://www.nanafly.com/">NanaDeep</a></p>
              </div>
            </div>
          </div>
        </footer>
        <div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="contactModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="contactModalLabel">联系我们</h4>
              </div>
              <div class="modal-body">
                <!-- <form>
                  <div class="form-group">
                    <label>姓名</label>
                    <input type="text" class="form-control" placeholder="姓名">
                  </div>
                  <div class="form-group">
                    <label>手机</label>
                    <input type="text" class="form-control" placeholder="手机">
                  </div>
                  <div class="form-group">
                    <label>简单介绍</label>
                    <textarea type="text" class="form-control" placeholder="简单的介绍"></textarea>
                  </div>
                  <button type="submit" class="btn btn-primary">发送</button>
                </form> -->
                <div class="contact-phone">
                  请拨打电话：<span>022-58095866</span>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
              </div>
            </div>
          </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script id="__bs_script__">//<![CDATA[
    document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.18.8'><\/script>".replace("HOST", location.hostname));
//]]></script>

</body>
</html>
