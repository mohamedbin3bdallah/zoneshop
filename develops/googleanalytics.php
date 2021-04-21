<?php
if(isset($_COOKIE['admin']))
{
	include('../libs/googleanalytics.php');

	if(isset($_POST['savegoogleanalytics']))
	{
		unset($_POST['savegoogleanalytics']);
		updateGoogleAnalytics($_POST['oldid'],$_POST['code']);
		header('location: googleanalytics.php');
	}	
}
else header('location: ../index.php');
?>
