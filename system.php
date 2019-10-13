<?php
header('Content-Type: text/html; charset=utf-8');
if(isset($_POST['setLang'])) {
	include 'inc/def.php';
	@$setLang=$_POST['setLang'];
	echo multilang($setLang);
}
exit;
?>
