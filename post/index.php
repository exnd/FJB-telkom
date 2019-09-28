<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="theme-color" content="#F01F1F"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Fjb</title>

  <!-- Import Semantic -->

  <link rel="stylesheet" type="text/css" href="../semantic/dist/semantic.min.css">
  <link rel="stylesheet" type="text/css" href="../semantic/dist/components/icon.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lexend+Deca&display=swap" rel="stylesheet">
  <script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
  <script src="../semantic/dist/semantic.min.js"></script>

  <!-- End Import -->


  <!-- Custom CSS -->

  <link rel="stylesheet" href="../template/style.css">

  <!-- End Custom -->

</head>
<body>


  <!-- Content Start -->

  <div class="menubar" id="menubar">
    <div class="logobar">
      <a href="../cari.php"><img src="../image/logo.png" alt=""></a>
    </div>
  </div>

  <div class="ui grid container">
    <div class="row">

      <a href="https://google.com" class="imagepost">
        <img class="ui fluid  image"src="../image/hp.jpg">
      </a>
      <div class="sixteen wide column caption">
        <h4>Samsung Galaxy S9</h4>
        <h4>IDR 3,5 Juta</h4>
        <p>Jual Samsung Galaxy S9 Dengan Kondisi : <br><br>
          Samsung Galaxy S9 , Kondisi barang masih bagus & mulus
        </div>
        <div class="sixteen wide column caption">
          <button class="fluid ui green button">Hubungi Penjual</button>
        </div>
      </div>
    </div>


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

</body>
</html>
