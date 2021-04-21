<?php
include('../libs/register.php');
if(isset($_POST['family']))
{
	if(empty($_POST['family'])) { setcookie('family', ''); echo 0; }
	elseif(preg_match('/[^a-zA-Z\p{Arabic}]+$/u',$_POST['family'])) { setcookie('family', ''); echo 1; }
	elseif(strlen($_POST['family']) < 5) { setcookie('family', ''); echo 2; }
	elseif(strlen($_POST['family']) > 100) { setcookie('family', ''); echo 3; }
	//elseif(exist('users','family',$_POST['family'])) { setcookie('family', ''); echo 4; }
	else  { setcookie('family', $_POST['family']); echo 5; }
	exit;
}
?>