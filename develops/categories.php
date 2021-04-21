<?php
//include('../classes/ResizeImage.php');
if(isset($_COOKIE['admin']))
{
	include('../libs/categories.php');
	$admin = $_COOKIE['admin'];
	
	if(isset($_GET['page'])) $page = (int) $_GET['page'];
	else $page = 0;
	
	if ($page < 1) $page = 1;
	$resultsPerPage = 10;
	$startResults = ($page - 1) * $resultsPerPage;
	
	if(!isset($_GET['id']) || $_GET['id'] == '')	$noOfcategories = getnoOfAllCategories();
	else $noOfcategories = getnoOfCategories($_GET['id']);
	
	$totalPages = ceil($noOfcategories / $resultsPerPage);

	if(isset($_POST['savecategory']))
	{
		unset($_POST['savecategory']);
		
		if(isset($_POST['oldid']) && $_POST['oldid'] != '')
		{
			if(existupdate('categories','titleen',$_POST['titleen'],id,$_POST['oldid']) && existupdate('categories','titlear',$_POST['titlear'],id,$_POST['oldid']))
			{
				updateCategory($_POST['oldid'],'titleen = "'.$_POST['titleen'].'" , titlear = "'.$_POST['titlear'].'"');
				if($_FILES["file"]['error'] == 0) upload_profile_picture($_POST['oldid']);
			}
			header('location: categories.php');
		}
		else
		{
			if(isset($_POST['parents']) && $_POST['parents'] != '')
			{
				if(exist('categories','titleen',$_POST['titleen'],'childto',$_POST['parents']) && exist('categories','titlear',$_POST['titlear'],'childto',$_POST['parents']))	{ $insertid = insertCategory($_POST['titleen'],$_POST['titlear']); if($insertid && $_FILES["file"]['error'] == 0) { updateCategory($insertid,'childto = "'.$_POST['parents'].','.$insertid.'"'); upload_profile_picture($insertid); } }
			}
			else
			{
				if(existdad('categories','titleen',$_POST['titleen']) && existdad('categories','titlear',$_POST['titlear'])) { $insertid = insertCategory($_POST['titleen'],$_POST['titlear']);  if($insertid && $_FILES["file"]['error'] == 0) { updateCategory($insertid,'childto = "'.$insertid.'"'); upload_profile_picture($insertid); } }
			}
			if($_SERVER['QUERY_STRING'] != '') header('location: categories.php?'.$_SERVER['QUERY_STRING']);
			else header('location: categories.php');
		}
	}
	elseif(!empty($_FILES['file']['name']) && $_FILES['file']['error'] == 0)
	{
		if(isset($_POST['id'])) echo $_POST['id']; else echo 11111111;
		upload_profile_picture($_POST['id']);
	}
}
else header('location: ../index.php');
?>