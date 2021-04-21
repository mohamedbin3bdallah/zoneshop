<?php

function getAccount($id)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$result = mysql_query("select * from admins where id = '$id'");
	$row = mysql_fetch_array($result);
	include("../libs/closedb.php");
	return $row;	
}

function exist($table,$where)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$result = mysql_query("select count(*) as count from {$table} $where");
	$row = mysql_fetch_array($result);
	include("../libs/closedb.php");
	if($row['count'] == 0) return 0;
	else return 1;
}

function updatePassAccount($id,$username,$email,$paypalemail,$password,$company)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$stmt = mysql_query("update admins set username = '$username',email = '$email',paypalemail = '$paypalemail',password = '$password',company = '$company' where id = '$id'");
	include("../libs/closedb.php");
}

function updateAccount($id,$username,$email,$paypalemail,$company)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$stmt = mysql_query("update admins set username = '$username',email = '$email',paypalemail = '$paypalemail',company = '$company' where id = '$id'");
	include("../libs/closedb.php");
}

?>