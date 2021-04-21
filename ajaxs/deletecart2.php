<?php
if(isset($_POST['id'],$_POST['product'],$_POST['ip'],$_POST['quantity']))
{	
	$id = $_POST['id'];
	$product = $_POST['product'];
	$ip = $_POST['ip'];
	$quantity = $_POST['quantity'];
	include("../libs/config.php");
	include("../libs/opendb.php");
	
	$stmt1 = mysql_query("update products set quantity = quantity+'$quantity' where id = '$product'");
	
	$stmt = mysql_query("delete from cart where id = '$id'");
	if($stmt)
	{
		$result = mysql_query("select sum(total) as sum,count(*) as count from cart where ipaddress = '$ip'");
		$row = mysql_fetch_array($result);		
		if(isset($row['sum'])) echo json_encode(array("error" => 0, "sum" => $row['sum'], "count" => $row['count']));
		else echo json_encode(array("error" => 0, "sum" => 0, "count" => 0));
	}
	else echo json_encode(array("error" => 1));
	include("../libs/closedb.php");
   exit;
}
?>