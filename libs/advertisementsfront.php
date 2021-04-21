<?php

function getRowFromTable($select,$table,$where,$limit)
{
	include("libs/config.php");
	include("libs/opendb.php");
	$result = mysql_query("select $select from {$table} $where $limit");
	$row = mysql_fetch_array($result);
	include("libs/closedb.php");
	return $row;
}

?>