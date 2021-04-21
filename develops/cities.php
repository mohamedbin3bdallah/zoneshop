<?php

//include('../classes/ResizeImage.php');
if(isset($_COOKIE['admin']))
{
	include('../libs/cities.php');
	$system = getSystem();
	
	$admin = $_COOKIE['admin'];
	
	if(isset($_GET['oldid']) && $_GET['oldid'] != '')
	{
		$city = getCityByID($_GET['oldid']);
	}
	
	if(isset($_GET['page'])) $page = (int) $_GET['page'];
	else $page = 0;	
	if ($page < 1) $page = 1;
	$resultsPerPage = 10;
	$startResults = ($page - 1) * $resultsPerPage;	
	$noOfcities = getnoOfCities();
	
	$totalPages = ceil($noOfcities / $resultsPerPage);

	if(isset($_POST['savecity']))
	{
		unset($_POST['savecity']);
		if(isset($_POST['oldid']) && $_POST['oldid'] != '')
		{
			if(!exist('cities',' where title like "'.$_POST['title'].'" and id <> '.$_POST['oldid'])) updateCity($_POST['oldid'],$_POST['title'],$_POST['shipping']);
			
		}
		else
		{
			if(!exist('cities',' where title like "'.$_POST['title'])) insertcity($_POST['title'],$_POST['shipping']);
		}
		header('location: cities.php');
	}
}
else header('location: ../index.php');
?>