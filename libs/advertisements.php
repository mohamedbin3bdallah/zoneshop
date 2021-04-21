<?php

function getAds()
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$result = mysql_query("select * from ads");
	$allrows = array();	
	if(!empty($result))
	{
		for($i=0; $row = mysql_fetch_array($result); $i++)
		{
			if($row['location'] == 'top')	$allrows['top'] = $row;
			elseif($row['location'] == 'left')	$allrows['left'] = $row;
		}
	}
	include("../libs/closedb.php");
	return $allrows;
}

function upload_profile_picture($folder,$width,$height)
{
	$image_director = "../uploads/advertisements/".$folder;
	if(!is_dir($image_director)) $create_image_director = mkdir($image_director);	
	if($_FILES[$folder]['size'] < 1024000)
	{
		$file_extn = pathinfo($_FILES[$folder]['name'], PATHINFO_EXTENSION);
		if($_FILES[$folder]["type"] == "image/jpg" || $_FILES[$folder]["type"] == "image/jpeg" || $_FILES[$folder]["type"] == "image/gif" || $_FILES[$folder]["type"] == "image/png")
		{
			$_FILES[$folder]["name"] = rand().'.'.$file_extn;
			move_uploaded_file($_FILES[$folder]["tmp_name"], $image_director.'/'.$_FILES[$folder]["name"]);
			$resizeObj = new Resize($image_director.'/'.$_FILES[$folder]["name"]);
			$resizeObj -> resizeImage($width, $height, 'crop');
			$resizeObj -> saveImage($image_director.'/'.$_FILES[$folder]["name"], 100);
			return $_FILES[$folder]["name"];
		}
		else return 0;
	}
	else return 0;
}

function delTree($dir)
{
	$files = array_diff(scandir($dir), array('.','..')); 
    foreach ($files as $file) { 
    (is_dir("$dir/$file")) ? delTree("$dir/$file") : unlink("$dir/$file"); 
    }
    //rmdir($dir);
}

function updateAds($id,$image,$link)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$stmt = mysql_query("update ads set image = '$image',link = '$link' where id = '$id'");
	include("../libs/closedb.php");
}
?>