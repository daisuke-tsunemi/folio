<script type="text/javascript">
  window.onload = function() {
  document.getElementById('l-base__loading').style.display = 'none';
  document.getElementById('l-base').style.display = 'block';
  }
</script>
<div id="l-base__loading">
  <div class="p-loading">
    <div class="p-loading__body"></div>
  </div>
</div>
<style>
#l-base{display: none;}
#l-base__loading{
  min-height: 100vh;
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
}
</style>