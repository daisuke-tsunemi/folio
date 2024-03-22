<!DOCTYPE html>
<html lang="ja">
  @include('web.layouts._head')
  <body class="l-body @yield('page_class')" id="top">
    @include('web.components._svg')
    @include('web.components._loading')
    <div class="l-base" id="l-base">
      @include('web.layouts._header')
      <main class="l-main">
        <!-- ! start_ページ内コンテンツ ============================== -->
        @yield('content')
        <!-- ! end_ページ内コンテンツ ============================== -->
      </main>
      @include('web.layouts._footer')
    </div>
    <script src="{{asset('js/scriptDefault.js')}}"></script>
    @include('web.components._flash')
  </body>
</html>
