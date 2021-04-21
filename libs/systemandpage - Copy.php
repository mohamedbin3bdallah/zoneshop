<?php

function getSystem()
{
	if(isset($_COOKIE['lang'])) $lang = $_COOKIE['lang']; else $lang = 'en';
	include("libs/config.php");
	include("libs/opendb.php");
	$result = mysql_query("select id,websitename,slogan,logo,paiementemail,paypalcurrency,currency{$lang} as currency from system");
	$row = mysql_fetch_array($result);	
	include("libs/closedb.php");
	return $row;
}

function getPage($pageurl,$lang)
{
	$title = 'title'.$lang;
	$description = 'description'.$lang;
	$keywords = 'keywords'.$lang;
	include("libs/config.php");
	include("libs/opendb.php");
	$result = mysql_query("select id,{$title} as title,{$description} as description,{$keywords} as keywords from pages where pageurl = '$pageurl'");
	$row =mysql_fetch_array($result);
	include("libs/closedb.php");
	return $row;
}

?>