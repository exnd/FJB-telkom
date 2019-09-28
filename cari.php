<?php require 'template/header.php'; ?>



<!-- Content Start -->

<div class="menubar" id="menubar">
    <div class="logobar">
      <a href="cari.php"><img src="image/logo.png" alt=""></a>
    </div>
    <div id="sbtn">
        <i id="searchbtn"class="search icon searchbtn"></i>
    </div>
</div>

  <div class="ui grid container">
    <form id="formsearch" class="formsearch" action="cari.php" method="get">
      <input type="text" class="searchinput" placeholder="Cari Barang Di Fjb" autofocus>
    </form>
    <div class="konten">

    <!-- KONTEN START -->
    
    
    <div class="row">
        <div class="column">
          <center>
            <img class="logo" src="image/logo.png" alt=""><br>
            <p class="hastag">#cariajadulu</p>
          </center>
        </div>
      </div>
      
    <div class="row">
      <div class="column">


<!-- TEMPLATE CARD -->
        <div class="ui link cards firststack">
    
          <div class="full card ">
            <div class="content">
              
              <img class="right floated mini ui image" src="image/hp.jpg">
              <div class="header">
                Samsung Galaxy S9
              </div>
              <div class="meta">
                IDR 3,5 Juta
              </div>
              <div class="description">
                Samsung Galaxy S9 , Kondisi barang masih bagus & mulus
              </div>
            </div>
            <div class="extra content">
              <a href="post/index.php">
                <div class="ui two buttons">
                  <div class="ui basic green button">Selengkapnya</div>
                </div>
              </a>
            </div>
          </div>

        </div>

<!-- END TEMPLATE CARD -->


<!-- TEMPLATE PEMBATAS -->
        <div class="ui divider"></div>
<!-- END TEMPLATE PEMBATAS -->

<!-- TEMPLATE CARD -->

        <div class="ui cards">
          <div class="full card">
            <div class="content">
              <img class="right floated mini ui image" src="image/hp.jpg">
              <div class="header">
                Samsung Galaxy S9
              </div>
              <div class="meta">
                IDR 3,5 Juta
              </div>
              <div class="description">
                Samsung Galaxy S9 , Kondisi barang masih bagus & mulus
              </div>
            </div>
            <div class="extra content">
              <a href="post/index.php">
                <div class="ui two buttons">
                  <div class="ui basic green button">Selengkapnya</div>
                </div>
              </a>
            </div>
          </div>
        </div>


<!-- END TEMPLATE CARD -->


<!-- TEMPLATE PEMBATAS -->
        <div class="ui divider"></div>
<!-- END TEMPLATE PEMBATAS -->

<!-- TEMPLATE CARD -->
        <div class="ui cards">
          <div class="full card">
            <div class="content">
              <img class="right floated mini ui image" src="image/hp.jpg">
              <div class="header pbold">
                Samsung Galaxy S9
              </div>
              <div class="meta preg">
                IDR 3,5 Juta
              </div>
              <div class="description">
                Samsung Galaxy S9 , Kondisi barang masih bagus & mulus
              </div>
            </div>
            <div class="extra content">
              <a href="post/index.php">
                <div class="ui two buttons">
                  <div class="ui basic green button">Selengkapnya</div>
                </div>
              </a>
            </div>
          </div>
        </div>

<!-- END TEMPLATE CARD -->


        </div>
      </div>
      <!-- KONTEN END -->

    </div>
    </div>

<?php require 'template/footer.php'; ?>