<?php
    $title="Multizorg";
?>
<?php
    include 'inc/def.php';
    hdr();
    nav();
?>      
    <div class="container">
      <div class="jumbotron">
        <?php
            print_r($GLOBALS);
            echo "<hr><hr>";
            if($lang=="tr") { echo "Türkçe"; }
            elseif($lang=="nl") { echo "Nederlands"; }
            else { echo "English"; }
        ?>
      </div>
    </div>
<?php ftr(); ?>
