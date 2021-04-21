<?php

function getValues()
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$result = mysql_query("select * from ourvals");
	$allrows = array();	
	if(!empty($result))
	{
		for($i=0; $row = mysql_fetch_array($result); $i++)
		{
			$allrows[$i]['id'] = $row['id'];
			$allrows[$i]['titleen'] = $row['titleen'];
			$allrows[$i]['titlear'] = $row['titlear'];
			$allrows[$i]['descriptionen'] = $row['descriptionen'];
			$allrows[$i]['descriptionar'] = $row['descriptionar'];			
			$allrows[$i]['image'] = $row['image'];
		}
	}
	include("../libs/closedb.php");
	return $allrows;
}

function upload_slider_picture()
{
	$image_director = "../uploads/slider";
	for($i=0;$i<count($_FILES['slider']['name']);$i++)
	{
		if($_FILES['slider']['size'][$i] < 1024000)
		{
			$file_extn[$i] = pathinfo($_FILES['slider']['name'][$i], PATHINFO_EXTENSION);
			if($_FILES["slider"]["type"][$i] == "image/jpg" || $_FILES["slider"]["type"][$i] == "image/jpeg" || $_FILES["slider"]["type"][$i] == "image/gif" || $_FILES["slider"]["type"][$i] == "image/png")
			{
				$_FILES["slider"]["name"][$i] = rand().'.'.$file_extn[$i];
				move_uploaded_file($_FILES["slider"]["tmp_name"][$i], $image_director.'/'.$_FILES["slider"]["name"][$i]);
				$resizeObj = new Resize($image_director.'/'.$_FILES["slider"]["name"][$i]);
				$resizeObj -> resizeImage(1700, 600, 'crop');
				$resizeObj -> saveImage($image_director.'/'.$_FILES["slider"]["name"][$i], 100);
				
				/*$resizeObj -> resizeImage(276, 286, 'crop');
				$resizeObj -> saveImage($image_director.'/thumbnail/'.$_FILES["slider"]["name"][$i], 100);*/
			}
		}
	}
}


function upload_profile_picture()
{
	$file_extn = pathinfo($_FILES['value']['name'], PATHINFO_EXTENSION);
	if($_FILES["value"]["type"] == "image/jpg" || $_FILES["value"]["type"] == "image/jpeg" || $_FILES["value"]["type"] == "image/gif" || $_FILES["value"]["type"] == "image/png")
	{
		if($_FILES['value']['size'] < 1024000)
		{
			$image_director = "../uploads/values";
			$_FILES["value"]["name"] = rand().'.'.$file_extn;
			move_uploaded_file($_FILES["value"]["tmp_name"], $image_director.'/'.$_FILES["value"]["name"]);
			/*$resizeObj = new Resize($image_director.'/'.$_FILES["value"]["name"]);
			$resizeObj -> resizeImage(250, 250, 'exact');
			$resizeObj -> saveImage($image_director.'/thumbnail/'.$_FILES["value"]["name"], 100);*/
			return $_FILES["value"]["name"];
		}
	}
	else return 0;
}

function updateValue($id,$titleen,$titlear,$descriptionen,$descriptionar,$image)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$stmt = mysql_query("update ourvals set titleen = '$titleen',titlear = '$titlear',descriptionen = '$descriptionen',descriptionar = '$descriptionar',image = '$image' where id = '$id'");
	include("../libs/closedb.php");
}

?>