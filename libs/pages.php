<?php

function getnoOfPages()
{
	include("../libs/config.php");
	include("../libs/opendb.php");	
	$result = mysql_query("select count(*) as count from pages");
	$row = mysql_fetch_array($result);
	include("../libs/closedb.php");
	return $row['count'];
}

function getPageByID($id)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$result = mysql_query("select * from pages where id = '$id'");
	$allrows = array();	
	if(!empty($result))
	{
		$row = mysql_fetch_array($result);
		$allrows['pageurl'] = $row['pageurl'];
		$allrows['titleen'] = $row['titleen'];
		$allrows['titlear'] = $row['titlear'];
		$allrows['descriptionen'] = $row['descriptionen'];
		$allrows['descriptionar'] = $row['descriptionar'];
		$allrows['keywordsen'] = $row['keywordsen'];
		$allrows['keywordsar'] = $row['keywordsar'];
	}
	include("../libs/closedb.php");
	return $allrows;	
}

function getPages($startResults,$resultsPerPage)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$result = mysql_query("select * from pages LIMIT $startResults, $resultsPerPage");
	$allrows = array();	
	if(!empty($result))
	{
		for($i=0; $row = mysql_fetch_array($result); $i++)
		{
			$allrows[$i]['id'] = $row['id'];
			$allrows[$i]['pageurl'] = $row['pageurl'];
			$allrows[$i]['titleen'] = $row['titleen'];
			$allrows[$i]['titlear'] = $row['titlear'];
			$allrows[$i]['descriptionen'] = $row['descriptionen'];
			$allrows[$i]['descriptionar'] = $row['descriptionar'];
			$allrows[$i]['keywordsen'] = $row['keywordsen'];
			$allrows[$i]['keywordsar'] = $row['keywordsar'];
		}
	}
	include("../libs/closedb.php");
	return $allrows;
}

function updatePage($id,$pageurl,$titleen,$titlear,$descriptionen,$descriptionar,$keywordsen,$keywordsar)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$stmt = mysql_query("update pages set pageurl = '$pageurl',titleen = '$titleen',titlear = '$titlear',descriptionen = '$descriptionen',descriptionar = '$descriptionar',keywordsen = '$keywordsen',keywordsar = '$keywordsar' where id = '$id'");
	include("../libs/closedb.php");
}

function exist($table,$where)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$result = mysql_query("select count(*) as count from {$table} $where");
	$row = mysql_fetch_array($result);
	include("../libs/closedb.php");
	if($row['count'] == 0) return 0;
	else return 1;
}

function insertPage($pageurl,$titleen,$titlear,$descriptionen,$descriptionar,$keywordsen,$keywordsar)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$stmt = mysql_query("insert into `pages` (`pageurl`,`titleen`,`titlear`,`descriptionen`,`descriptionar`,`keywordsen`,`keywordsar`) values ('$pageurl','$titleen','$titlear','$descriptionen','$descriptionar','$keywordsen','$keywordsar')");
	include("../libs/closedb.php");
}

?>