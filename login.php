<?php
	if(!isset($_COOKIE['uid'])) {
	$_SERVER['HTTP_PRAGMA'] = 'no-cache';
	$_SERVER['HTTP_CACHE_CONTROL'] = 'no-cache';
	include('develops/contactfront.php');
	include('loginform.php');
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
<?php
$getGoogleAnalytics = getGoogleAnalytics(1);
if(!empty($getGoogleAnalytics)) echo $getGoogleAnalytics['code'];
?>
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
				<h3><a href="index.php"><?php language('home'); ?></a> / <span><?php language('login'); ?></span></h3>
			</div>
		</div>
	<!--banner-->

	<!--content-->
		<div class="content">
				<!--login-->
			<div class="login" <?php if(!isset($_COOKIE['lang']) || (isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar')) { ?>dir="rtl"<?php } ?>>
				<div class="main-agileits">
					<div class="form-w3agile">
						<h3><?php language('login'); ?></h3>
						<form action="login.php" method="POST">
							<div class="key">
								<center><?php if(isset($_GET['message'])) echo language($_GET['message']); ?></center>
							</div>
							<div class="key">
								<i class="fa fa-envelope" aria-hidden="true"></i>
								<input  type="text" name="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '<?php language('email'); ?>';}" maxlength="100" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="<?php language('email'); ?>" required="">
								<div class="clearfix"></div>
							</div>
							<div class="key">
								<i class="fa fa-lock" aria-hidden="true"></i>
								<input  type="password" name="password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '<?php language('password'); ?>';}" placeholder="<?php language('password'); ?>" required="">
								<div class="clearfix"></div>
							</div>
							<input type="submit" name="loginsubmit" value="<?php language('login'); ?>">
						</form>
					</div>
					<div class="forg">
						<!--<a href="#" class="forg-left"><?php language('forgotpass'); ?></a>
						<a href="register.php" class="forg-right"><?php language('register'); ?></a>-->
					<div class="clearfix"></div>
					</div>
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