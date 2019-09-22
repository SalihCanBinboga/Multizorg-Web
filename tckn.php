<?php
header('Content-Type: text/html; charset=utf-8');
@$tt=$_POST['tt'];@$t=$_POST['t'];@$a=$_POST['a'];@$s=$_POST['s'];@$y=$_POST['y'];
include 'inc/func.php';
$cfs = new tckn();
if ($tt==1) {$tcd=$cfs->isav($t);}
elseif ($tt==2) {$tcd=$cfs->check($t,$a,$s,$y);}
echo $tcd;
exit;
?>
