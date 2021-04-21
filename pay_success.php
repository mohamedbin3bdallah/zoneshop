<?php
	if(isset($_GET['id']) && ($_GET['id'] != '' || $_GET['id'] != 0))
	{
		$_SERVER['HTTP_PRAGMA'] = 'no-cache';
		$_SERVER['HTTP_CACHE_CONTROL'] = 'no-cache';
		include('develops/pay_success.php');	
?>
<!--
Au<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title><?php if(isset($cpage['title']) && $cpage['title'] != '') echo $cpage['title']; ?></title>
<!--css-->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet">
<!--css-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="<?php if(isset($cpage['description']) && $cpage['description'] != '') echo $cpage['description']; ?>" />
<meta name="keywords" content="<?php if(isset($cpage['keywords']) && $cpage['keywords'] != '') echo $cpage['keywords']; ?>" />
<link rel="shortcut icon" href="uploads/<?php echo $system['logo']; ?>">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery.min.js"></script>
<link href='//fonts.googleapis.com/css?family=Cagliostro' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,800italic,800,700italic,700,600italic,600,400italic,300italic,300' rel='stylesheet' type='text/css'>
<!--search jQuery-->
	<script src="js/main.js"></script>
<!--search jQuery-->

 <!--mycart-->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
 <!-- cart -->
<script src="js/simpleCart.min.js"></script>
<!-- cart -->
</head>
<body>
	<!--header-->
		<div class="header">
			<?php include('designs/header.php'); ?>
		</div>
	<!--header-->
	
	<!--banner-->
		<div class="banner1" dir="rtl">
			<div class="container">
				<h3><a href="index.php"><?php language('home'); ?></a> / <span><?php language('paymessage'); ?></span></h3>
			</div>
		</div>
	<!--banner-->

	<!--content-->
		<div class="content">
				<!--login-->
			<div class="login" dir="rtl">
				<div class="main-agileits">
					<div class="form-w3agile">
						<h3><?php language('paymessage'); ?></h3>
						<?php echo '<div style="text-align: center; font-size: 200%; margin-top: 25px; margin-bottom: 25px;">'; language('paysuccess'); echo $saleid; echo '</div>'; ?>
				</div>
			</div>
				<!--login-->
		</div>
		<!--content-->
		
		<!---footer--->
				<?php include('designs/footer.php'); ?>
		<!---footer--->
</body>
</html>
<?php } else header('Location: index.php'); ?>