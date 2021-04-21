<?php

function getSales($dornd,$admin)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$result = mysql_query("select sales.id as id,sales.saleid as saleid,sales.product as product,sales.titleen as titleen,sales.titlear as titlear,sales.price as price,sales.quantity as quantity,sales.total as total,sales.color as color,sales.size as size,sales.phone as phone,sales.address as address,sales.delivered as delivered,sales.ipaddress as ipaddress,sales.time as time,sales.dtime as dtime from sales inner join products on sales.product = products.id where sales.delivered = '$dornd' and products.admin = '$admin' order by time DESC");
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
			$allrows[$i]['color'] = $row['color'];
			$allrows[$i]['size'] = $row['size'];
			$allrows[$i]['phone'] = $row['phone'];
			$allrows[$i]['address'] = $row['address'];
			$allrows[$i]['ipaddress'] = $row['ipaddress'];
			$allrows[$i]['delivered'] = $row['delivered'];
			$allrows[$i]['dtime'] = $row['dtime'];
			$allrows[$i]['time'] = $row['time'];
		}
	}
	include("../libs/closedb.php");
	return $allrows;
}

?>