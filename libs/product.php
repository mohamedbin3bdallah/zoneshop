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

function getSelectColor()
{
	include("libs/config.php");
	include("libs/opendb.php");
	$result = mysql_query("select id,color from colors");
	$allrows = array();	
	if(!empty($result))
	{
		for($i=0; $row = mysql_fetch_array($result); $i++)
		{
			$allrows[$i]['color'] = $row['color'];
		}
	}
	include("libs/closedb.php");
	return $allrows;
}

function getSelectSize()
{
	include("libs/config.php");
	include("libs/opendb.php");
	$result = mysql_query("select id,title from sizes");
	$allrows = array();	
	if(!empty($result))
	{
		for($i=0; $row = mysql_fetch_array($result); $i++)
		{
			$allrows[$i]['title'] = $row['title'];
		}
	}
	include("libs/closedb.php");
	return $allrows;
}

function getProductByID($id,$lang)
{
	include("libs/config.php");
	include("libs/opendb.php");
	$result = mysql_query("select id,title{$lang} as title,description{$lang} as description,categories,oldprice,price,quantity,views from products where id = '$id'");
	$allrows = array();	
	if(!empty($result))
	{
		$row = mysql_fetch_array($result);
		$allrows['id'] = $row['id'];
		$allrows['title'] = $row['title'];
		$allrows['description'] = $row['description'];
		$allrows['categories'] = $row['categories'];
		$allrows['oldprice'] = $row['oldprice'];
		$allrows['price'] = $row['price'];
		$allrows['quantity'] = $row['quantity'];
		$allrows['views'] = $row['views'];
	}
	include("libs/closedb.php");
	return $allrows;	
}

function getRelatedProducts($lang,$id,$category,$productnumber)
{
	include("libs/config.php");
	include("libs/opendb.php");
	$result = mysql_query("select id,title{$lang} as title,oldprice,price from products where quantity > 0 and id != '$id' LIMIT 0,$productnumber");
	$allrows = array();	
	if(!empty($result))
	{
		for($i=0; $row = mysql_fetch_array($result); $i++)
		{
			$allrows[$i]['id'] = $row['id'];
			$allrows[$i]['title'] = $row['title'];			
			$allrows[$i]['oldprice'] = $row['oldprice'];			
			$allrows[$i]['price'] = $row['price'];
		}
	}
	include("libs/closedb.php");
	return $allrows;
}

?>