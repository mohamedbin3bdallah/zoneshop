<?php

function getnoOfCities()
{
	include("../libs/config.php");
	include("../libs/opendb.php");	
	$result = mysql_query("select count(*) as count from cities");
	$row = mysql_fetch_array($result);
	include("../libs/closedb.php");
	return $row['count'];
}

function getCityByID($id)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$result = mysql_query("select * from cities where id = '$id'");
	$allrows = array();	
	if(!empty($result))
	{
		$row = mysql_fetch_array($result);
		$allrows['title'] = $row['title'];
		$allrows['shipping'] = $row['shipping'];
	}
	include("../libs/closedb.php");
	return $allrows;	
}

function getCities($startResults,$resultsPerPage)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$result = mysql_query("select * from cities LIMIT $startResults, $resultsPerPage");
	$allrows = array();	
	if(!empty($result))
	{
		for($i=0; $row = mysql_fetch_array($result); $i++)
		{
			$allrows[$i]['id'] = $row['id'];
			$allrows[$i]['title'] = $row['title'];
			$allrows[$i]['shipping'] = $row['shipping'];
		}
	}
	include("../libs/closedb.php");
	return $allrows;
}

function updateCity($id,$title,$shipping)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$stmt = mysql_query("update cities set title = '$title',shipping = '$shipping' where id = '$id'");
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

function insertCity($title,$shipping)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$stmt = mysql_query("insert into `cities` (`title`,`shipping`) values ('$title','$shipping')");
	include("../libs/closedb.php");
}

function getSystem()
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$result = mysql_query("select * from system");
	$row = mysql_fetch_array($result);
	include("../libs/closedb.php");
	return $row;	
}

?>