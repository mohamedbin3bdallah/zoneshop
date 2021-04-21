<?php

function getAbout()
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$result = mysql_query("select * from about");
	$row = mysql_fetch_array($result);
	include("../libs/closedb.php");
	return $row;	
}

function updateAbout($id,$visionen,$visionar,$missionen,$missionar)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$stmt = mysql_query("update about set visionen = '$visionen',visionar = '$visionar',missionen = '$missionen',missionar = '$missionar' where id = '$id'");
	include("../libs/closedb.php");
}

?>