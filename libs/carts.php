<?php

function getFLevelCategories($lang)
{
	include("libs/config.php");
	include("libs/opendb.php");
	$result = mysql_query("select id,title{$lang} as title,childto from categories where childto NOT LIKE '%,%'");
	$allrows = array();	
	if(!empty($result))
	{
		for($i=0; $row = mysql_fetch_array($result); $i++)
		{
			$allrows[$i]['id'] = $row['id'];
			$allrows[$i]['title'] = $row['title'];
			$allrows[$i]['childto'] = $row['childto'];
		}
	}
	include("libs/closedb.php");
	return $allrows;
}

function getMLevelCategories($childto,$lang)
{
	$childto = $childto.',';
	include("libs/config.php");
	include("libs/opendb.php");
	$result = mysql_query("select  id,title{$lang} as title,childto from categories where childto LIKE '$childto%' order by childto ASC");
	$allrows = array();	
	if(!empty($result))
	{
		for($i=0; $row = mysql_fetch_array($result); $i++)
		{
			$allrows[$i]['id'] = $row['id'];
			$allrows[$i]['title'] = $row['title'];
			$allrows[$i]['childto'] = $row['childto'];
		}
	}
	include("libs/closedb.php");
	return $allrows;
}

function getnoOfCarts($ipaddress)
{
	include("libs/config.php");
	include("libs/opendb.php");	
	$result = mysql_query("select count(*) as count from cart where ipaddress = '$ipaddress'");
	$row = mysql_fetch_array($result);
	include("libs/closedb.php");
	return $row['count'];
}

function getnoOfUserCarts($uid)
{
	include("libs/config.php");
	include("libs/opendb.php");	
	$result = mysql_query("select count(*) as count from cart where uid = '$uid'");
	$row = mysql_fetch_array($result);
	include("libs/closedb.php");
	return $row['count'];
}

function countIpSale($ipaddress)
{
	include("libs/config.php");
	include("libs/opendb.php");
	$result = mysql_query("select count(*) as count from sales where ipaddress = '$ipaddress' and delivered = 0");
	$row = mysql_fetch_array($result);
	include("libs/closedb.php");
	if(empty($row) || $row['count'] < 3) return 1;
	else return 0;
}

function countUserSale($uid)
{
	include("libs/config.php");
	include("libs/opendb.php");
	$result = mysql_query("select count(*) as count from sales where uid = '$uid' and delivered = 0");
	$row = mysql_fetch_array($result);
	include("libs/closedb.php");
	if(empty($row) || $row['count'] < 3) return 1;
	else return 0;
}

function getCarts($lang,$ipaddress,$startResults,$resultsPerPage)
{
	include("libs/config.php");
	include("libs/opendb.php");
	$result = mysql_query("select id,product,title{$lang} as title,price,quantity from cart where ipaddress = '$ipaddress' LIMIT $startResults, $resultsPerPage");
	$allrows = array();	
	if(!empty($result))
	{
		for($i=0; $row = mysql_fetch_array($result); $i++)
		{
			$allrows[$i]['id'] = $row['id'];
			$allrows[$i]['product'] = $row['product'];
			$allrows[$i]['title'] = $row['title'];
			$allrows[$i]['price'] = $row['price'];
			$allrows[$i]['quantity'] = $row['quantity'];
		}
	}
	include("libs/closedb.php");
	return $allrows;
}

function getUserCarts($lang,$uid,$startResults,$resultsPerPage)
{
	include("libs/config.php");
	include("libs/opendb.php");
	$result = mysql_query("select id,product,title{$lang} as title,price,quantity from cart where uid = '$uid' LIMIT $startResults, $resultsPerPage");
	$allrows = array();	
	if(!empty($result))
	{
		for($i=0; $row = mysql_fetch_array($result); $i++)
		{
			$allrows[$i]['id'] = $row['id'];
			$allrows[$i]['product'] = $row['product'];
			$allrows[$i]['title'] = $row['title'];
			$allrows[$i]['price'] = $row['price'];
			$allrows[$i]['quantity'] = $row['quantity'];
		}
	}
	include("libs/closedb.php");
	return $allrows;
}

?>