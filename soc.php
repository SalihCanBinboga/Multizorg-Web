<?php
header('Content-Type: text/html; charset=utf-8');
@$c=$_POST['c'];
include 'inc/def.php';
if ($c>=1 && $c<=81) {$sql->sdc();$ftc=new tools();$sql->ilceler($c);$ftc->selopt('c');$sql->sdc();}
else {echo "Error";}
exit;
?>
