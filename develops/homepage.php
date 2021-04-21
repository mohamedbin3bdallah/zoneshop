<?php
include('../libs/homepage.php');
include('../classes/ResizeImage.php');
if(isset($_COOKIE['admin']) && (!empty($_FILES['slider']['name'][0]) && $_FILES['slider']['error'][0] == 0))
{
	upload_slider_picture();

}
if(isset($_POST['savevalue'], $_COOKIE['admin']))
{
	$admin = $_COOKIE['admin'];
	unset($_POST['savevalue']);
	if(isset($_FILES['value']['error']) && $_FILES['value']['error'] == 0)
	{		
		$image = upload_profile_picture();
		if($image)
		{
			unlink("../uploads/values/".$_POST['oldimage']);
		}
	}
	elseif(isset($_POST['oldimage']) && $_POST['oldimage'] != '')  $image =  $_POST['oldimage'];
	if($image)
	{
		updateValue($_POST['oldid'],$_POST['titleen'],$_POST['titlear'],$_POST['descriptionen'],$_POST['descriptionar'],$image);
	}
	unset($image,$_FILES);
	header('location: homepage.php');
}
?>