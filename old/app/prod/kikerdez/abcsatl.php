<html>
<?php
	$kapcsolat=mysql_connect("localhost","ujszov","markolat");
	if (!$kapcsolat) die("Nem lehet kapcsol�dni a MySQL kiszolg�l�hoz.");
	mysql_select_db("ujszov",$kapcsolat) or die("Nem lehet az AB-t megnyitni: ".mysql_error());
	return $kapcsolat;
?>
</html>
