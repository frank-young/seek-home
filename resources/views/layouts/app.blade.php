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
                        <span class="logo-s">seek</span><span class="logo-b">brand</span>
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a class="link link-nav" href="{{ route('login') }}">首页</a></li>
                        <li><a class="link link-nav" href="{{ route('login') }}">公司案例</a></li>
                        <li><a class="link link-nav" href="{{ route('register') }}">关于我们</a></li>
                        <li><a class="link link-nav" href="{{ route('register') }}">联系我们</a></li>
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
                  <a class="link" href="about.html"> 首页</a>
                </p>
                <p>
                  <a class="link" href="about.html"> 公司案例</a>
                </p>
                <p>
                  <a class="link" href="about.html"> 关于我们</a>
                </p>
                <p>
                  <a class="link" href="about.html"> 联系我们</a>
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
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script id="__bs_script__">//<![CDATA[
    document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.18.8'><\/script>".replace("HOST", location.hostname));
//]]></script>

</body>
</html>
