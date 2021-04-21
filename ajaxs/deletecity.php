<?php
if(isset($_POST['id']))
{	
	$id = $_POST['id'];
	include("../libs/config.php");
	include("../libs/opendb.php");	
	$stmt = mysql_query("delete from cities where id = '$id'");
	include("../libs/closedb.php");
   exit;
}
?>