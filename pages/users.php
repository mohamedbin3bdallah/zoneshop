<?php
if(isset($_COOKIE['admin']) && $_COOKIE['admin'] == 1)
{
	include('../libs/adminlang.php');
	include('../develops/users.php');
	if($lang_file == "ar")
	echo '<html xml:lang="ar" lang="ar" dir=rtl xmlns="http://www.w3.org/1999/xhtml">';
?>
<!DOCTYPE html>
<html lang="en" >
<head>
<?php include('../designs/head.php'); ?>
<script type="text/javascript" src="../js/users.js"></script>
</head>
<body>
<div class="container">
<?php include('../designs/containers/users.php'); ?>
</div>
</body>
</html>
<?php
} else echo header('location:../index.php'); ?>