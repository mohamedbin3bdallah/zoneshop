<?php
function getAllCities()
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