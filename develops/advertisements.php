<?php
if(isset($_COOKIE['admin']))
{
	include('../libs/advertisements.php');
	include('../classes/ResizeImage.php');
	
	if(isset($_POST['saveadvertisements']))
	{
		unset($_POST['saveadvertisements']);
		if($_FILES['top']['error'] == 0) { delTree('../uploads/advertisements/top'); $top = upload_profile_picture('top',728,90); if($top) updateAds($_POST['topid'],$top,$_POST['toplink']); }
		if($_FILES['left']['error'] == 0) { delTree('../uploads/advertisements/left'); $left = upload_profile_picture('left',300,600); if($left) updateAds($_POST['leftid'],$left,$_POST['leftlink']); }
		header('location: advertisements.php');
	}
	elseif(isset($_GET['del']) && $_GET['del'] != '')
	{
		delTree('../uploads/advertisements/'.$_GET['del']);
		updateAds($_GET['id'],'','');
		header('location: advertisements.php');
	}

	$ads = getAds();	
}
else header('location: ../index.php');
?>
