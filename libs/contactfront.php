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

function getContact()
{
	include("libs/config.php");
	include("libs/opendb.php");
	$result = mysql_query("select * from contact");
	if(!empty($result))
	{
		$row = mysql_fetch_array($result);
		include("libs/closedb.php");
		return $row;
	}
}

function getAbout($lang)
{
	include("libs/config.php");
	include("libs/opendb.php");
	$result = mysql_query("select id,vision{$lang} as vision,mission{$lang} as mission from about");
	$row = mysql_fetch_array($result);
	include("libs/closedb.php");
	return $row;	
}

function getGoogleAnalytics($id)
{
	include("libs/config.php");
	include("libs/opendb.php");
	$result = mysql_query("select * from googleanalytics where id = '$id'");
	$row = mysql_fetch_array($result);
	include("libs/closedb.php");
	return $row;	
}

?>