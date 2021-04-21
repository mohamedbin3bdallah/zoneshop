<?php

function getContact()
{
	include("libs/config.php");
	include("libs/opendb.php");
	$result = mysql_query("select * from contact");
	if(!empty($result))
	{
		$row = mysql_fetch_array($result);
		include("libs/closedb.php");
		return $row;
	}
}

function getAbout($lang)
{
	include("libs/config.php");
	include("libs/opendb.php");
	$result = mysql_query("select id,vision{$lang} as vision,mission{$lang} as mission from about");
	$row = mysql_fetch_array($result);
	include("libs/closedb.php");
	return $row;	
}

function getGoogleAnalytics($id)
{
	include("libs/config.php");
	include("libs/opendb.php");
	$result = mysql_query("select * from googleanalytics where id = '$id'");
	$row = mysql_fetch_array($result);
	include("libs/closedb.php");
	return $row;	
}

?>