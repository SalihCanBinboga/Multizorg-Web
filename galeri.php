<?php
    $title="Galeri - Fiberland";
?>
<?php
    include 'inc/def.php';
    hdr();
    nav();
?>      
    <div class="container">
      <div class="jumbotron" id="galeri">
        <h2>Galeri</h2>
        <?php
            echo instagram();
        ?>
      </div>
    </div>
<?php ftr(); ?>
