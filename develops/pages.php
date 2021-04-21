<?php

//include('../classes/ResizeImage.php');
if(isset($_COOKIE['admin']))
{
	include('../libs/pages.php');
	$admin = $_COOKIE['admin'];
	
	if(isset($_GET['oldid']) && $_GET['oldid'] != '')
	{
		$cpage = getPageByID($_GET['oldid']);
	}
	
	if(isset($_GET['page'])) $page = (int) $_GET['page'];
	else $page = 0;	
	if ($page < 1) $page = 1;
	$resultsPerPage = 10;
	$startResults = ($page - 1) * $resultsPerPage;	
	$noOfpages = getnoOfPages();
	
	$totalPages = ceil($noOfpages / $resultsPerPage);

	if(isset($_POST['savepage']))
	{
		unset($_POST['savepage']);
		if(!exist('pages',' where pageurl like "'.$_POST['pageurl'].'" and id <> '.$_POST['oldid']))
		{
			if(isset($_POST['oldid']) && $_POST['oldid'] != '') updatePage($_POST['oldid'],$_POST['pageurl'],$_POST['titleen'],$_POST['titlear'],$_POST['descriptionen'],$_POST['descriptionar'],$_POST['keywordsen'],$_POST['keywordsar']);
			else insertPage($_POST['pageurl'],$_POST['titleen'],$_POST['titlear'],$_POST['descriptionen'],$_POST['descriptionar'],$_POST['keywordsen'],$_POST['keywordsar']);
		}
		header('location: pages.php');
	}
}
else header('location: ../index.php');
?>