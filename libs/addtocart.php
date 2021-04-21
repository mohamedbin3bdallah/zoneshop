<?php

function getProductByID($id)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$result = mysql_query("select * from products where id = '$id'");
	$allrows = array();	
	if(!empty($result))
	{
		$row = mysql_fetch_array($result);
		$allrows['id'] = $row['id'];
		$allrows['titleen'] = $row['titleen'];
		$allrows['titlear'] = $row['titlear'];
		$allrows['price'] = $row['price'];
		$allrows['quantity'] = $row['quantity'];
	}
	include("../libs/closedb.php");
	unset($row);
	return $allrows;	
}

function countIpCart($ipaddress)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$result = mysql_query("select count(*) as count from cart where ipaddress = '$ipaddress' and uid = ''");
	$row = mysql_fetch_array($result);
	include("../libs/closedb.php");
	if(empty($row) || $row['count'] < 3) return 1;
	else return 0;
}

function countUserCart($uid)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$result = mysql_query("select count(*) as count from cart where uid = '$uid'");
	$row = mysql_fetch_array($result);
	include("../libs/closedb.php");
	if(empty($row) || $row['count'] < 3) return 1;
	else return 0;
}

function checkIpCartProduct($product,$ipaddress)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$result = mysql_query("select id from cart where product = '$product' and ipaddress = '$ipaddress'");
	$row = mysql_fetch_array($result);
	include("../libs/closedb.php");
	if(empty($row)) return 0;
	else return $row['id'];
}

function checkUserCartProduct($product,$uid)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$result = mysql_query("select id from cart where product = '$product' and uid = '$uid'");
	$row = mysql_fetch_array($result);
	include("../libs/closedb.php");
	if(empty($row)) return 0;
	else return $row['id'];
}

function insertIPCart($product,$titleen,$titlear,$price,$quantity,$total,$ipaddress)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$stmt = mysql_query("insert into `cart` (`product`,`titleen`,`titlear`,`price`,`quantity`,`total`,`ipaddress`) values ('$product','$titleen','$titlear','$price','$quantity','$total','$ipaddress')");
	return mysql_insert_id();	
}

function insertUserCart($product,$titleen,$titlear,$price,$quantity,$total,$uid)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$stmt = mysql_query("insert into `cart` (`product`,`titleen`,`titlear`,`price`,`quantity`,`total`,`uid`) values ('$product','$titleen','$titlear','$price','$quantity','$total','$uid')");
	return mysql_insert_id();	
}

function updateUserCart($id,$quantity,$total)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$stmt = mysql_query("update cart set quantity = quantity+'$quantity',total = total+'$total' where id = '$id'");
	include("../libs/closedb.php");
}

function updateProductQuantity($id,$quantity)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$stmt = mysql_query("update products set quantity = '$quantity' where id = '$id'");
	include("../libs/closedb.php");
}

?>