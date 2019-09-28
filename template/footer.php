</body>
<script type="text/javascript">
    $('#sbtn').click(function () {
      $("#searchbtn").toggleClass("times");
      $(".konten").toggle();
      $("#formsearch").toggle();
    });
  </script>
  <script>
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("menubar").style.top = "0";
  } else {
    document.getElementById("menubar").style.top = "-60px";
  }
  prevScrollpos = currentScrollPos;
}
</script>
</html>