<?php

function getGoogleAnalytics($id)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$result = mysql_query("select * from googleanalytics where id = '$id'");
	$row = mysql_fetch_array($result);
	include("../libs/closedb.php");
	return $row;	
}

function updateGoogleAnalytics($id,$code)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$stmt = mysql_query('update googleanalytics set code = "'.mysql_real_escape_string($code).'" where id = '.$id);
	include("../libs/closedb.php");
}

?>