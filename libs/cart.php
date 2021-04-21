<?php

function getCartTotal($ipaddress)
{
	include("libs/config.php");
	include("libs/opendb.php");	
	$result = mysql_query("select sum(total) as sum from cart where ipaddress = '$ipaddress'");
	$row = mysql_fetch_array($result);
	include("libs/closedb.php");
	if(isset($row['sum'])) return $row['sum'];
	else return 0;	
}

function getUserCartTotal($uid)
{
	include("libs/config.php");
	include("libs/opendb.php");	
	$result = mysql_query("select sum(total) as sum from cart where uid = '$uid'");
	$row = mysql_fetch_array($result);
	include("libs/closedb.php");
	if(isset($row['sum'])) return $row['sum'];
	else return 0;	
}

function getCities()
{
	include("libs/config.php");
	include("libs/opendb.php");
	$result = mysql_query("select * from cities order by title ASC");
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
	include("libs/closedb.php");
	return $allrows;
}

?>