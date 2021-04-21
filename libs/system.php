<?php

function getSystem()
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$result = mysql_query("select * from system");
	$row = mysql_fetch_array($result);
	include("../libs/closedb.php");
	return $row;	
}

function upload_profile_picture()
{
	$file_extn = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
	if($_FILES["file"]["type"] == "image/jpg" || $_FILES["file"]["type"] == "image/jpeg" || $_FILES["file"]["type"] == "image/gif" || $_FILES["file"]["type"] == "image/png")
	{
		$image_director = "../uploads";
		$_FILES["file"]["name"] = rand().'.'.$file_extn;
		move_uploaded_file($_FILES["file"]["tmp_name"], $image_director.'/'.$_FILES["file"]["name"]);
		/*$resizeObj = new Resize($image_director.'/'.$_FILES["file"]["name"]);
		$resizeObj -> resizeImage(95, 95, 'exact');
		$resizeObj -> saveImage($image_director.'/thumbnail/'.$_FILES["file"]["name"], 100);*/
		return $_FILES["file"]["name"];
	}
	else return 0;
}

function updateSystem($id,$websitename,$slogan,$currencyen,$currencyar,$paypalcurrency,$paiementemail,$logo)
{
	include("../libs/config.php");
	include("../libs/opendb.php");
	$stmt = mysql_query("update system set websitename = '$websitename',slogan = '$slogan',currencyen = '$currencyen',currencyar = '$currencyar',paypalcurrency = '$paypalcurrency',paiementemail = '$paiementemail',logo = '$logo' where id = '$id'");
	include("../libs/closedb.php");
}

?>