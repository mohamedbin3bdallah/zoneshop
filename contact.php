<?php
	$_SERVER['HTTP_PRAGMA'] = 'no-cache';
	$_SERVER['HTTP_CACHE_CONTROL'] = 'no-cache';
	include('develops/contactfront.php');
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
		<div class="banner1">
			<div class="container">
				<h3><a href="index.php"><?php language('home'); ?></a> / <span><?php language('contact'); ?></span></h3>
			</div>
		</div>
	<!--banner-->
		<!--content-->
			<div class="content">
				<!--contact-->
					<div class="mail-w3ls">
						<div class="container">
							<h2 class="tittle"><?php language('contact'); ?></h2>
							<div class="mail-grids">
								<div class="mail-top">
									<div class="col-md-4 col-md-push-8 mail-grid">
										<i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>
										<h5><?php language('address'); ?></h5>
										<p><?php echo $contact['address'.$lang_file]; ?></p>
									</div>
									<div class="col-md-4 mail-grid">
										<i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>
										<h5><?php language('phone'); ?></h5>
										<p><?php language('phone'); echo ' : '.$contact['phone']; ?></p>
										<p><?php language('mobile'); echo ' : '.$contact['mobile']; ?></p>
									</div>
									<div class="col-md-4 col-md-pull-8 mail-grid">
										<i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>
										<h5><?php language('email'); ?></h5>
										<p><?php echo '<a href="mailto:'.$contact['email'].'">'.$contact['email'].'</a>'; ?></p>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="map-w3">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d673607.6340751307!2d-104.44001811743372!3d48.738351336759585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5321f600f5170943%3A0x94f2e8e71e1dfc7a!2sE+Comertown+Rd%2C+Westby%2C+MT+59275%2C+USA!5e0!3m2!1sen!2sin!4v1467080368135"  allowfullscreen></iframe>
								</div>
								<div class="mail-bottom" <?php if(!isset($_COOKIE['lang']) || (isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar')) { ?>dir="rtl"<?php } ?>>
									<h4><?php language('send'); language(' '); language('message'); ?></h4>
									<form action="develops/message.php" method="POST">
										 <?php if(!isset($_COOKIE['lang']) || (isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar')) { ?>
											<input type="text" name="phone" pattern="[0-9]*" value="<?php language('phone'); ?>" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '<?php language('phone'); ?>';}" required="">
											<input type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" value="<?php language('email'); ?>" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '<?php language('email'); ?>';}" required="">
											<input type="text" name="name" pattern="[a-zA-Z ]*" value="<?php language('name'); ?>" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '<?php language('name'); ?>';}" required="">
										<?php } else { ?>
											<input type="text" name="name" pattern="[a-zA-Z ]*" value="<?php language('name'); ?>" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '<?php language('name'); ?>';}" required="">
											<input type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" value="<?php language('email'); ?>" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '<?php language('email'); ?>';}" required="">
											<input type="text" name="phone" pattern="[0-9]*" value="<?php language('phone'); ?>" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '<?php language('phone'); ?>';}" required="">
										<?php } ?>
										<textarea name="message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '<?php language('message'); ?>...';}" required=""><?php language('message'); ?>...</textarea>
										<input type="hidden" name="contactemail" value="<?php if(isset($contact['email']) && $contact['email'] != '') echo $contact['email']; else echo 'info@zoneshop.net'; ?>">
										<input type="submit" name="sendmessage" value="<?php language('send'); ?>">
										<input type="reset" value="<?php language('reset'); ?>" >

									</form>
								</div>
							</div>
						</div>
					</div>
				<!--contact-->
			</div>
		<!--content-->
		
		<!---footer--->
				<?php include('designs/footer.php'); ?>
		<!---footer--->
</body>
</html>