<?php

/*function getnoOfSales()
{
	include("../libs/config.php");
	include("../libs/opendb.php");	
	$result = mysql_query("select count(*) as count from sales");
	$row = mysql_fetch_array($result);
	include("../libs/closedb.php");
	return $row['count'];
}

function getSales($startResults,$resultsPerPage)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$result = mysql_query("select * from sales order by time ASC LIMIT $startResults, $resultsPerPage");
	$allrows = array();	
	if(!empty($result))
	{
		for($i=0; $row = mysql_fetch_array($result); $i++)
		{
			$allrows[$i]['id'] = $row['id'];
			$allrows[$i]['product'] = $row['product'];
			$allrows[$i]['titleen'] = $row['titleen'];
			$allrows[$i]['titlear'] = $row['titlear'];
			$allrows[$i]['price'] = $row['price'];
			$allrows[$i]['quantity'] = $row['quantity'];
			$allrows[$i]['total'] = $row['total'];
			$allrows[$i]['phone'] = $row['phone'];
			$allrows[$i]['address'] = $row['address'];
			$allrows[$i]['name'] = $row['name'];
			$allrows[$i]['city'] = $row['city'];
			$allrows[$i]['shipping'] = $row['shipping'];
			$allrows[$i]['ipaddress'] = $row['ipaddress'];
			$allrows[$i]['delivered'] = $row['delivered'];
			$allrows[$i]['time'] = $row['time'];
		}
	}
	include("../libs/closedb.php");
	return $allrows;
}*/

function getSales($dornd)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$result = mysql_query("select * from sales where delivered = '$dornd' order by time DESC");
	$allrows = array();	
	if(!empty($result))
	{
		for($i=0; $row = mysql_fetch_array($result); $i++)
		{
			$allrows[$i]['id'] = $row['id'];
			$allrows[$i]['saleid'] = $row['saleid'];
			$allrows[$i]['product'] = $row['product'];
			$allrows[$i]['titleen'] = $row['titleen'];
			$allrows[$i]['titlear'] = $row['titlear'];
			$allrows[$i]['price'] = $row['price'];
			$allrows[$i]['quantity'] = $row['quantity'];
			$allrows[$i]['total'] = $row['total'];
			$allrows[$i]['phone'] = $row['phone'];
			$allrows[$i]['address'] = $row['address'];
			$allrows[$i]['name'] = $row['name'];
			$allrows[$i]['city'] = $row['city'];
			$allrows[$i]['shipping'] = $row['shipping'];
			$allrows[$i]['ipaddress'] = $row['ipaddress'];
			$allrows[$i]['delivered'] = $row['delivered'];
			$allrows[$i]['dtime'] = $row['dtime'];
			$allrows[$i]['time'] = $row['time'];
		}
	}
	include("../libs/closedb.php");
	return $allrows;
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