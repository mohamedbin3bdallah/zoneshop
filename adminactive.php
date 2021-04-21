<?php
if(isset($_GET['code'],$_GET['email']) && $_GET['code'] != '')
{
	$code = $_GET['code'];
	$email = $_GET['email'];
	include("libs/config.php");
	include("libs/opendb.php");
	$result = $dbh->query("select * , count(*) as count from admins where email = '$email'");
	$row = $result->fetch();
	//print_r($row);
	if($row['count'] == 1)
	{
		if($row['code'] == $code && $row['active'] == 0)
		{
			$stmt = $dbh->prepare("update admins set active = '1',code = '' where code = '$code' and email = '$email' and active = 0");
			if($stmt->execute()) $message = 1;
			else $message = 2;
		}
		elseif($row['active'] == 1) $message = 16;
		elseif($row['code'] != $code) $message = 2;
		else $message = 2;
	}
	else $message = 13;
	include("libs/closedb.php");
	header('Location: login.php?message=m'.$message);
}
?>