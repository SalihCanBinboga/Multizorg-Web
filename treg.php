<?php
include 'inc/def.php';

$p=array();

@$p['ad']=$_POST['ad'];
@$p['sa']=$_POST['sa'];
@$p['ct']=$_POST['ct'];
@$p['dg']=$_POST['dg'];
@$p['da']=$_POST['da'];
@$p['dy']=$_POST['dy'];
@$p['tc']=$_POST['tc'];
@$p['sh']=$_POST['sh'];
@$p['ic']=$_POST['ic'];
@$p['mh']=$_POST['mh'];
@$p['cd']=$_POST['cd'];
@$p['sk']=$_POST['sk'];
@$p['aa']=$_POST['aa'];
@$p['an']=$_POST['an'];
@$p['kn']=$_POST['kn'];
@$p['ta']=$_POST['ta'];
@$p['tn']=$_POST['tn'];
@$p['ea']=$_POST['ea'];
@$p['es']=$_POST['es'];
@$p['nt']=$_POST['nt'];

$tcd=$tch->check($p['tc'],$p['ad'],$p['sa'],$p['dy']);
if ($tcd == 'tt') {
	$sql->sdc();
	$ctr = $sql->reg($p);
	if($ctr==1){echo "OK";}
	else{echo "FAIL";}
	$sql->sdc();
}
else{echo "TCF";}
exit;
?>
