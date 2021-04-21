<?php
if(isset($_GET['lang']) && $_GET['lang'] != '')
{
	setcookie("lang", $_GET['lang'], time()+3600);
	if(substr($_SERVER['QUERY_STRING'], 8) == 'zone') header('location: index.php');
	else header('location: '.substr($_SERVER['QUERY_STRING'], 8));
}
?>