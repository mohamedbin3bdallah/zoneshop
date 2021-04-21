<?php

//include('../classes/ResizeImage.php');
if(isset($_COOKIE['admin']) && $_COOKIE['admin'] == 1)
{
	include('../libs/admins.php');
	$admin = $_COOKIE['admin'];
	
	if(isset($_GET['oldid']) && ($_GET['oldid'] != '' || $_GET['oldid'] != 1 ||$_GET['oldid'] != 0))
	{
		$admin = getAdminByID($_GET['oldid']);
	}
	
	if(isset($_GET['page'])) $page = (int) $_GET['page'];
	else $page = 0;
	
	if ($page < 1) $page = 1;
	$resultsPerPage = 10;
	$startResults = ($page - 1) * $resultsPerPage;	
	$noOfadmins = getnoOfAdmins();
	
	$totalPages = ceil($noOfadmins / $resultsPerPage);

	if(isset($_POST['saveadmin']))
	{
		unset($_POST['saveadmin']);
		/*if(!exist('admins',' where username like "'.$_POST['username'].'" or email = "'.$_POST['email'].'"'))
		{*/
			//if($_POST['password'] != '') $_POST['password'] = hash('sha256', $_POST['password'], FALSE);
			if(isset($_POST['active']) && $_POST['active'] == 'on') $_POST['active'] = 1;
			if(isset($_POST['oldid']) && $_POST['oldid'] != '') updateAdmin($_POST['oldid'],$_POST['active']);
			//if(isset($_POST['oldid']) && $_POST['oldid'] != '') updateAdmin($_POST['oldid'],$_POST['username'],$_POST['email'],$_POST['company'],$_POST['active']);
			//else insertAdmin($_POST['username'],$_POST['password'],$_POST['email'],$_POST['company'],$_POST['active']);
		//}
		header('location: admins.php');
	}
}
else header('location: ../index.php');
?>