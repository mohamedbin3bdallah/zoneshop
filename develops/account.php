<?php
if(isset($_COOKIE['admin']))
{
	include('../libs/account.php');

	if(isset($_POST['saveaccount']))
	{
		unset($_POST['saveaccount']);
		if(!exist('admins', ' where username like "'.$_POST['username'].'" and id <> '.$_COOKIE['admin']) && !exist('admins', ' where email like "'.$_POST['email'].'" and id <> '.$_COOKIE['admin']) && $_POST['password'] == $_POST['cmfpassword'])
		{
			if($_POST['password'] != '' && strlen($_POST['password']) > 7)
			{
				$_POST['password'] = hash('sha256', $_POST['password'], FALSE);
				updatePassAccount($_POST['oldid'],$_POST['username'],$_POST['email'],$_POST['paypalemail'],$_POST['password'],$_POST['company']);
			}
			else updateAccount($_POST['oldid'],$_POST['username'],$_POST['email'],$_POST['paypalemail'],$_POST['company']);
		}
		header('location: account.php');
	}	
}
else header('location: ../index.php');
?>
