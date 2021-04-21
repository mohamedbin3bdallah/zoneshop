<?php

function delTree($dir)
{
	$files = array_diff(scandir($dir), array('.','..')); 
    foreach ($files as $file) { 
    (is_dir("$dir/$file")) ? delTree("$dir/$file") : unlink("$dir/$file"); 
    }
    rmdir($dir);
}

function getCatogaryChiledto($id)
{
	include("../libs/config.php");
	include("../libs/opendb.php");	
	$result = mysql_query("select childto from categories where id = '$id'");
	$row = mysql_fetch_array($result);
	include("../libs/closedb.php");
	if(isset($row['childto'])) return $row['childto'];
	else return 0;
}

function getnoOfAllCategories()
{
	include("../libs/config.php");
	include("../libs/opendb.php");	
	$result = mysql_query("select count(*) as count from categories where childto NOT LIKE '%,%' ");
	$row = mysql_fetch_array($result);
	include("../libs/closedb.php");
	return $row['count'];
}

function getAllCategories($startResults,$resultsPerPage)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$result = mysql_query("select * from categories where childto NOT LIKE '%,%' LIMIT $startResults, $resultsPerPage");
	$allrows = array();	
	if(!empty($result))
	{
		for($i=0; $row = mysql_fetch_array($result); $i++)
		{
			$allrows[$i]['id'] = $row['id'];
			$allrows[$i]['titleen'] = $row['titleen'];
			$allrows[$i]['titlear'] = $row['titlear'];
			$allrows[$i]['childto'] = $row['childto'];
		}
	}
	include("../libs/closedb.php");
	return $allrows;
}

function getnoOfCategories($childto)
{
	$childto = $childto.',';
	include("../libs/config.php");
	include("../libs/opendb.php");	
	$result = mysql_query("select count(*) as count from categories where childto LIKE '$childto%'");
	$row = mysql_fetch_array($result);
	include("../libs/closedb.php");
	return $row['count'];
}

function getCategories($childto,$startResults,$resultsPerPage)
{
	$childto = $childto.',';
	include("../libs/config.php");
	include("../libs/opendb.php");
	$result = mysql_query("select * from categories where childto LIKE '$childto%' LIMIT $startResults, $resultsPerPage");
	$allrows = array();	
	if(!empty($result))
	{
		for($i=0; $row = mysql_fetch_array($result); $i++)
		{
			$allrows[$i]['id'] = $row['id'];
			$allrows[$i]['titleen'] = $row['titleen'];
			$allrows[$i]['titlear'] = $row['titlear'];
			$allrows[$i]['childto'] = $row['childto'];
		}
	}
	include("../libs/closedb.php");
	return $allrows;
}

function exist($table,$field,$value,$field2,$value2)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$result = mysql_query("select id from {$table} where {$field} = '$value' and {$field2} = '$value2'");
	$row = mysql_fetch_array($result);
	include("../libs/closedb.php");
	if(empty($row)) return 1;
	else return 0;
}

function existdad($table,$field,$value)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$result = mysql_query("select id from {$table} where {$field} = '$value'");
	$row = mysql_fetch_array($result);
	include("../libs/closedb.php");
	if(empty($row)) return 1;
	else return 0;
}

function existupdate($table,$field,$value,$id,$value2)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$result = mysql_query("select id from {$table} where {$field} = '$value' and {$id} <> '$value2'");
	$row = mysql_fetch_array($result);
	include("../libs/closedb.php");
	if(empty($row)) return 1;
	else return 0;
}

function upload_profile_picture($folder)
{
	if(is_dir('../uploads/categories/'.$folder)) delTree('../uploads/categories/'.$folder);
	$image_director = "../uploads/categories/".$folder;
	if(!is_dir($image_director)) $create_image_director = mkdir($image_director);	
	if($_FILES['file']['size'] < 1024000)
	{
		$file_extn = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
		if($_FILES["file"]["type"] == "image/jpg" || $_FILES["file"]["type"] == "image/jpeg" || $_FILES["file"]["type"] == "image/gif" || $_FILES["file"]["type"] == "image/png")
		{
			$_FILES["file"]["name"] = rand().'.'.$file_extn;
			move_uploaded_file($_FILES["file"]["tmp_name"], $image_director.'/'.$_FILES["file"]["name"]);				
		}
	}
}

function updateCategory($id,$set)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$stmt = mysql_query("update categories set $set where id = '$id'");
	include("../libs/closedb.php");
}

function insertCategory($titleen,$titlear)
{
	include("../libs/config.php");	
	include("../libs/opendb.php");
	$stmt = mysql_query("insert into `categories` (`titleen`,`titlear`) values ('$titleen','$titlear')");
	if($stmt) return mysql_insert_id();
	else return 0;
//	include("../libs/closedb.php");
}

?>