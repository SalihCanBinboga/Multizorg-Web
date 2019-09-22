      <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Fiberland</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" id="navLogo" href="index.php"> </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <?php
              nvbr('index','Anasayfa');
              nvbr('kampanyalar','Kampanyalar');
              nvbr('hakkimizda','Hakkımızda');
              nvbr('galeri','Galeri');
            ?>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <?php nvbr('iletisim','İletişim');
            /* <li><a href="#giris">Giriş Yap</a></li> */
            ?>
          </ul>
        </div>
      </div>
    </nav>
      