<?php

function getFLevelCategories($lang)
{
	include("libs/config.php");
	include("libs/opendb.php");
	$result = mysql_query("select id,title{$lang} as title,childto from categories where childto NOT LIKE '%,%' limit 5");
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

function getCategories($lang)
{
	include("libs/config.php");
	include("libs/opendb.php");
	$result = mysql_query("select * from categories order by childto ASC");
	$allrows = array();	
	if(!empty($result))
	{
		for($i=0; $row = mysql_fetch_array($result); $i++)
		{
			$allrows[$i]['id'] = $row['id'];			
			$allrows[$i]['title'] = $row['title'.$lang];
			$allrows[$i]['childto'] = $row['childto'];			
		}
	}
	include("libs/closedb.php");
	return $allrows;
}

function getnoOfAllOrders($field,$value)
{
	include("libs/config.php");
	include("libs/opendb.php");	
	$result = mysql_query("select count(*) as count from sales where $field like '$value'");
	$row = mysql_fetch_array($result);
	include("libs/closedb.php");
	return $row['count'];
}

function getAllOrders($field,$value,$lang,$startResults,$resultsPerPage)
{
	include("libs/config.php");
	include("libs/opendb.php");
	$result = mysql_query("select id,title{$lang} as title,price,quantity,total,shipping,delivered,dtime,time from sales where $field like '$value' order by time DESC LIMIT $startResults, $resultsPerPage");
	$allrows = array();	
	if(!empty($result))
	{
		for($i=0; $row = mysql_fetch_array($result); $i++)
		{
			$allrows[$i]['id'] = $row['id'];
			$allrows[$i]['title'] = $row['title'];
			$allrows[$i]['price'] = $row['price'];
			$allrows[$i]['quantity'] = $row['quantity'];
			$allrows[$i]['total'] = $row['total'];
			$allrows[$i]['shipping'] = $row['shipping'];
			$allrows[$i]['delivered'] = $row['delivered'];
			$allrows[$i]['dtime'] = $row['dtime'];
			$allrows[$i]['time'] = $row['time'];
		}
	}
	include("libs/closedb.php");
	return $allrows;
}

?>