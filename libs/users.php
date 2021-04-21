<?php

function getnoOfUsers()
{
	include("../libs/config.php");
	include("../libs/opendb.php");	
	$result = mysql_query("select count(*) as count from users where id <> 1");
	$row = mysql_fetch_array($result);
	include("../libs/closedb.php");
	return $row['count'];
}

function getUsers($startResults,$resultsPerPage)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$result = mysql_query("select * from users where id <> 1 LIMIT $startResults, $resultsPerPage");
	$allrows = array();	
	if(!empty($result))
	{
		for($i=0; $row = mysql_fetch_array($result); $i++)
		{
			$allrows[$i]['id'] = $row['id'];
			$allrows[$i]['username'] = $row['username'];
			$allrows[$i]['email'] = $row['email'];
			$allrows[$i]['active'] = $row['active'];
		}
	}
	include("../libs/closedb.php");
	return $allrows;
}

function getUserByID($id)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$result = mysql_query("select * from users where id = '$id'");
	$allrows = array();	
	if(!empty($result))
	{
		$row = mysql_fetch_array($result);
		$allrows['username'] = $row['username'];
		$allrows['email'] = $row['email'];
		$allrows['active'] = $row['active'];
	}
	include("../libs/closedb.php");
	return $allrows;	
}

/*function updateAdmin($id,$username,$email,$company,$active)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$stmt = mysql_query("update users set username = '$username',email = '$email',company = '$company',active = '$active' where id = '$id'");
	include("../libs/closedb.php");
}*/

function updateUser($id,$active)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$stmt = mysql_query("update users set active = '$active' where id = '$id'");
	include("../libs/closedb.php");
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

function insertUser($username,$password,$email,$company,$active)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$stmt = mysql_query("insert into `users` (`username`,`password`,`email`,`company`,`active`) values ('$username','$password','$email','$company','$active')");
	include("../libs/closedb.php");
}

?>