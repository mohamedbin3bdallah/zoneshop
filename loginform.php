<?php
include('libs/loginform.php');
if(isset($_POST['loginsubmit']))
{
	unset($_POST['loginsubmit']);
	if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false && $_POST['password'] != '')
	{
		$_POST['password'] = hash('sha256', $_POST['password'], FALSE);
		$user = getFromTable('users',' where email like "'.$_POST['email'].'" and password like "'.$_POST['password'].'"','');
		$admin = getFromTable('admins',' where email like "'.$_POST['email'].'" and password like "'.$_POST['password'].'"','');

		if(!empty($user))
		{
			if($user['active'] == 1)
			{
				if(isset($_POST['remember'])) setcookie('uid', $user['id'], time()+60*60*24*100, "");
				else setcookie('uid', $user['id']);
				header('Location: index.php');
			}
			else header('Location: login.php?message=m15');
		}
		elseif(!empty($admin))
		{
			if($admin['active'] == 1)
			{
				if(isset($_POST['remember'])) setcookie('admin', $admin['id'], time()+60*60*24*100, "");
				else setcookie('admin', $admin['id']);
				header('Location: pages/cproducts.php');
			}
			else header('Location: login.php?message=m15');
		}
		else header('Location: login.php?message=m14');
	}
	else header('Location: login.php?message=m5');
}
?>