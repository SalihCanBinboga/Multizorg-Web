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
          <ul class="mr-auto nav navbar-nav navbar-right">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">TR / NL</a>
              <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-tr"></span> Türkçe</a>
                <a class="dropdown-item" href="#"><span class="flag-icon flag-icon-nl"></span> Nederlands</a>
              </div>
            </li>
            <?php
            /* nvbr('iletisim','İletişim');
            <li class="">Giriş Yap</li>
            */
            ?>
          </ul>
        </div>
      </div>
    </nav>
      