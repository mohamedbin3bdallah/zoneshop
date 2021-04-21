<?php
if(isset($_POST['id'],$_POST['delivered']))
{	
	$id = $_POST['id'];
	$delivered = $_POST['delivered'];
	include("../libs/config.php");
	include("../libs/opendb.php");
	$dtime = time();
	$stmt = mysql_query("update sales set delivered = 1 , dtime = '$dtime' , time = time where id = '$id'");
	if($stmt) echo 1;	
	else echo 0;
	include("../libs/closedb.php");
   exit;
}
?>