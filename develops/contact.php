<?php
if(isset($_COOKIE['admin']))
{
	include('../libs/contact.php');

	if(isset($_POST['savecontact']))
	{
		unset($_POST['savecontact']);
		/*if(preg_match('/[^0-9 ]/',$_POST['mobile'])) $_POST['mobile'] = '';
		if(preg_match('/[^0-9 ]/',$_POST['phone'])) $_POST['phone'] = '';*/
		/*if(preg_match('/[^0-9 ]/',$_POST['sphone'])) $_POST['sphone'] = '';*/
		updateContact($_POST['oldid'],$_POST['mobile'],$_POST['phone'],$_POST['email'],$_POST['addressen'],$_POST['addressar'],$_POST['facebook'],$_POST['twitter'],$_POST['googleplus'],$_POST['linkedin']);
		header('location: contact.php');
	}	
}
else header('location: ../index.php');
?>
