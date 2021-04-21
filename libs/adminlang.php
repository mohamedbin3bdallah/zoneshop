<?php
if(isset($_COOKIE['admin']))
{
	$admin = $_COOKIE['admin'];
	include("../libs/config.php");
	include("../libs/opendb.php");	
	$result = mysql_query("select lang from admins where id like '$admin'");
	$row = mysql_fetch_array($result);	
	include("../libs/closedb.php");
	if(!empty($row['lang'])) $lang_file = $row['lang'];
	else $lang_file = 'en';
	$lang_file_path = "../languages/$lang_file.php";
	include($lang_file_path);
}
elseif(isset($_COOKIE['lang']))
{	
	$lang_file = $_COOKIE['lang'];
	include("../languages/$lang_file.php");
}
else
{
	$lang_file = 'en';
	include("../languages/$lang_file.php");
}
?>