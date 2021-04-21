<?php
if(isset($_COOKIE['admin']))
{
	include('../libs/about.php');

	if(isset($_POST['saveabout']))
	{
		unset($_POST['saveabout']);
		if(!empty($_POST['visionen']) && !empty($_POST['visionar']) && !empty($_POST['missionen']) && !empty($_POST['missionar']))	updateAbout($_POST['oldid'],$_POST['visionen'],$_POST['visionar'],$_POST['missionen'],$_POST['missionar']);
		header('location: about.php');
	}	
}
else header('location: ../index.php');
?>
