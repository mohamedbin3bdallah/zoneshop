<?php

function addViews($id)
{
	include("libs/config.php");
	include("libs/opendb.php");	
	$stmt = mysql_query("update products set views = views+1 where id = '$id'");
	include("libs/closedb.php");	
}

?>