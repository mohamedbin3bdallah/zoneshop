<meta charset="utf-8"/>

<?php
include('../libs/system.php');
if(isset($_POST['savesystem'], $_COOKIE['admin']))
{
	$admin = $_COOKIE['admin'];
	unset($_POST['savesystem']);
	if(isset($_POST['oldimage']) && $_POST['oldimage'] != '')
	{
		if(isset($_FILES['file']['error']) && $_FILES['file']['error'] == 0)
		{
			unlink("../uploads/".$_POST['oldimage']);
			$image = upload_profile_picture();
		}
		else $image = $_POST['oldimage'];
	}
	else $image = upload_profile_picture();
	if($image)
	{
		$_POST['currencyen'] = 'EGP';
		$_POST['currencyar'] = 'جنيه';
		updateSystem($_POST['oldid'],$_POST['websitename'],$_POST['slogan'],$_POST['currencyen'],$_POST['currencyar'],$_POST['paypalcurrency'],$_POST['paiementemail'],$image);
	}
	unset($image,$_FILES);
	header('location: system.php');
}
?>