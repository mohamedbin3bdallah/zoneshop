<?php
	if(!isset($_COOKIE['uid'])) {
	$_SERVER['HTTP_PRAGMA'] = 'no-cache';
	$_SERVER['HTTP_CACHE_CONTROL'] = 'no-cache';
	include('develops/contactfront.php');
	include('develops/register.php');

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
<script type="text/javascript" src="js/register.js"></script>
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
				<h3><a href="index.php"><?php language('home'); ?></a> / <span><?php language('register'); ?></span></h3>
			</div>
		</div>
	<!--banner-->

	<!--content-->
		<div class="content">
				<!--login-->
			<div class="login" <?php if(!isset($_COOKIE['lang']) || (isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar')) { ?>dir="rtl"<?php } ?>>
		<div class="main-agileits">
				<div class="form-w3agile form1">
					<h3><?php language('register'); ?></h3>
					<form action="register.php" method="POST" enctype="multipart/form-data">
						<div class="key">
							<center><?php if(isset($_GET['message'])) echo language($_GET['message']); ?></center>
						</div>
						<div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="text" name="username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '<?php language('username'); ?>';}" maxlength="250" pattern="[a-zA-Z]{5,}" placeholder="<?php language('username'); ?>" required="">
							<div class="clearfix"></div>
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
						<div class="key">
							<i class="fa fa-lock" aria-hidden="true"></i>
							<input  type="password" name="cmfpassword" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '<?php language('cmfpassword'); ?>';}" placeholder="<?php language('cmfpassword'); ?>" required="">
							<div class="clearfix"></div>
						</div>
						<div class="" style="margin-bottom:15px;">
							<input type="checkbox" name="dealer" id="pdealer">
							&nbsp;&nbsp;&nbsp;
							<?php language('dealer'); ?>
							<div class="clearfix"></div>
						</div>
						<div id="pdealeruc">
							<div class="key">
								<i class="fa fa-user" aria-hidden="true"></i>
								<input  type="text" name="name" id="pname" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '<?php language('name'); ?>';}" maxlength="255" placeholder="<?php language('name'); ?>" required="">
								<div class="clearfix"></div>
							</div>
							<div class="key">
								<i class="fa fa-user" aria-hidden="true"></i>
								<input  type="text" name="phone" id="pphone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '<?php language('phone'); ?>';}" maxlength="50" placeholder="<?php language('phone'); ?>" required="">
								<div class="clearfix"></div>
							</div>
							<div class="">
								<select class="form-control" name="city" id="pcity">
									<?php for($rci=0;$rci<count($registercities);$rci++) { ?><option value="<?php echo $registercities[$rci]['title']; ?>"><?php echo $registercities[$rci]['title']; ?></option><?php } ?>
								</select>
								<div class="clearfix"></div>
							</div>
							<div class="key" style="margin-top:25px;">
								<?php language('type'); ?>
								<br>
								<input type="radio" name="pdealertype" value="user"> <?php language('person'); ?>
								&nbsp;&nbsp;&nbsp;
								<input type="radio" name="pdealertype" value="company"> <?php language('company'); ?>
								<div class="clearfix"></div>
							</div>
							<div class="key" id="pdealercompany">
								<i class="fa fa-user" aria-hidden="true"></i>
								<input  type="text" name="company" id="pcompany" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '<?php language('company'); ?>';}" maxlength="100" placeholder="<?php language('company'); ?>" required="">
								<div class="clearfix"></div>
							</div>
							<div class="key">
								<i class="fa fa-user" aria-hidden="true"></i>
								<input  type="text" name="productstype" id="pproductstype" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '<?php language('productstype'); ?>';}" maxlength="150" placeholder="<?php language('productstype'); ?>" required="">
								<div class="clearfix"></div>
							</div>
							<div class="key">
								<i class="fa fa-user" aria-hidden="true"></i>
								<input  type="file" name="file[]" id="pimages" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '<?php language('صور لبعض المنتجات'); ?>';}" placeholder="<?php language('صور لبعض المنتجات'); ?>" multiple>
								<div class="clearfix"></div>
							</div>
						</div>
						<input type="submit" name="registersubmit" value="<?php language('register'); ?>">
					</form>
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