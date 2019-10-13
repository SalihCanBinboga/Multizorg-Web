<?php
    include 'inc/def.php';
    multilang();
    $title="Multizorg";
?>
<?php
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
