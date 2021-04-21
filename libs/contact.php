<?php

function getContact()
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$result = mysql_query("select * from contact");
	$row = mysql_fetch_array($result);
	include("../libs/closedb.php");
	return $row;	
}

function updateContact($id,$mobile,$phone,$email,$addressen,$addressar,$facebook,$twitter,$googleplus,$linkedin)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$stmt = mysql_query("update contact set mobile = '$mobile',phone = '$phone',email = '$email',addressen = '$addressen',addressar = '$addressar',facebook = '$facebook',twitter = '$twitter',googleplus = '$googleplus',linkedin = '$linkedin' where id = '$id'");
	include("../libs/closedb.php");
}

?>