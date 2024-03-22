<!DOCTYPE html>
<html lang="ja" class="l-error">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
    <meta HTTP-EQUIV ='content-type' CONTENT='text/html;charset=SHIFT-JIS'>
    <meta name="msapplication-TileColor" content="#2c67e1">
    <meta name="theme-color" content="#ffffff">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('image/admin/logo/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('image/admin/logo/favicon/favicon.ico') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('image/admin/logo/favicon/favicon.ico') }}">
    <link rel="mask-icon" href="{{ asset('image/admin/logo/safari-pinned-tab.svg') }}" color="#00C4E5">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <title>エラーページ</title>
    @yield('styles')
    <link rel="stylesheet" href="{{asset('css/styles-error.css')}}">
    <!-- 	font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;500;700;900&family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

    <script type="text/javascript">
      setTimeout("redirect()", 10000);
      function redirect(){
        var href = location.href;
        if(href.search('/') != -1){
          location.href="{{route('home')}}";
        }
      }
    </script>
  </head>
  <body class="l-body">
    <main class="l-main pageError">
      <div class="p-frame">
        <div class="p-frame__head">
          <div class="c-logo"></div>
          <h1 class="c-txt__xl2">@yield('code')</h1>
          <h2>@yield('title')</h2>
        </div>
        <div class="p-frame__body">
          <div class="text">
            <p class="c-txt__md">@yield('message')</p>
            <p class="c-txt__md">自動的にトップページへリダイレクトされます。</p>
          </div>
        </div>
        <div class="p-frame__foot">
          <?php
          $url = $_SERVER['REQUEST_URI'];
          ?>
          @if(strpos($url,'/'))
          @else
            <a href="{{route('home')}}" class="c-btn">ホームへ</a>
          @endif
        </div>
      </div>
      @yield('link')
      @yield('content')
    </main>
    @yield('scripts')
  </body>
</html>
