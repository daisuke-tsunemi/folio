<div class="l-footer">
  <footer class="p-footer">
    <div class="p-footer__head l-grid--2">
      <div class="l-grid--item"></div>
      <div class="l-grid--item"></div>
    </div>
    <?php
      $url = $_SERVER['REQUEST_URI'];
    ?>
    @if(strstr($url,'works'))
    <div class="p-footer__body">
      <a href="{{ route('home') }}"><i class="fa-solid fa-house"></i></a>
      <a href="{{ route('home') }}"><i class="fa-solid fa-mountain-sun"></i></a>
      <a href="{{ route('home') }}"><i class="fa-solid fa-person-hiking"></i></a>
      <a href="{{ route('home') }}"><i class="fa-solid fa-people-group"></i></a>
      <a href="{{ route('home') }}"><i class="fa-solid fa-gears"></i></a>
    </div>
    @else
    @endif
    <div class="p-footer__foot">
      <p class="copyright">©️{{ date('Y') }} Sample Corporation co. LTD.</p>
    </div>
  </footer>
</div>