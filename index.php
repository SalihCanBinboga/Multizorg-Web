<?php
    $title="Multizorg";
?>
<?php
    include 'inc/def.php';
    multilang();
    hdr();
    nav();
?>      
    <div class="container">
      <div class="jumbotron">
        <?php
            if($myLang=="TR") { echo "Türkçe"; }
            elseif($myLang=="NL") { echo "Nederlands"; }
            else { echo "English"; }
        ?>
      </div>
    </div>
<?php ftr(); ?>
