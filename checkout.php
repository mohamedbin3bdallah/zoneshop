<?php
	$_SERVER['HTTP_PRAGMA'] = 'no-cache';
	$_SERVER['HTTP_CACHE_CONTROL'] = 'no-cache';
	include('develops/cart.php');
	setcookie('business', $system['paiementemail']);
	setcookie('currency_code', $system['paypalcurrency']);
	setcookie('ipaddress', $ipaddress);
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
				<h3><a href="index.php"><?php language('home'); ?></a> / <span><?php language('sales'); ?></span></h3>
			</div>
		</div>
	<!--banner-->

	<!--content-->
		<div class="content" <?php if(!isset($_COOKIE['lang']) || (isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar')) { ?>dir="rtl"<?php } ?>>
			<div class="cart-items">
			<div class="container">
				<?php
				if(isset($_COOKIE['uid'])) $carts = getUserCarts($lang_file,$_COOKIE['uid'],$startResults,$resultsPerPage);
				else $carts = getCarts($lang_file,$ipaddress,$startResults,$resultsPerPage);
				if(!empty($carts))
				{
				?>
				<h3 style="margin-bottom: 25px;"><?php language('mycartproducts').language(' '); if(isset($_COOKIE['lang']) && $_COOKIE['lang'] != 'ar') echo '('.count($carts).')'; else echo '('.str_replace($western_arabic, $eastern_arabic, count($carts)).')'; ?></h3>
			
				<div class="row">
					<div class="col-md-12">
						<div class="table-responsive">
							<table class="table table-bordered">
								<tr class="catrtableheader">
									<td width="25%"><h5><strong><?php language('product'); ?></strong></h5></td>
									<td><h5><strong><?php language('title'); ?></strong></h5></td>
									<td><h5><strong><?php language('unitprice'); ?></strong></h5></td>
									<td><h5><strong><?php language('quantity'); ?></strong></h5></td>
									<td><h5><strong><?php language('total'); ?></strong></h5></td>
									<td width="35%"><h5><strong><?php language('address'); ?></strong></h5></td>
									<td style="width: 125px;"><h5><strong><?php language('paymethod'); ?></strong></h5></td>
									<td><h5><strong><?php language('delete'); ?></strong></h5></td>
								</tr>
								<?php for($i=0;$i<sizeof($carts);$i++) { ?>
									<?php $cartpic[$i] = array_diff(scandir('uploads/products/'.$carts[$i]['product']), array('.','..')); ?>
									<tr id="tr-<?php echo $carts[$i]['id']; ?>">
										<form method="POST">
										<td width="25%"><?php if(!empty($cartpic[$i])) { ?><img class="img-responsive" src="uploads/products/<?php echo $carts[$i]['product']; ?>/<?php echo $cartpic[$i][2]; ?>"><?php } ?></td>
										<td><?php echo $carts[$i]['title']; ?></td>
										<td><?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] != 'ar') echo $system['currency'].' '.$carts[$i]['price']; else echo str_replace($western_arabic, $eastern_arabic, $carts[$i]['price']).' '.$system['currency']; ?></td>
										<td><?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] != 'ar') echo $carts[$i]['quantity']; else echo str_replace($western_arabic, $eastern_arabic, $carts[$i]['quantity']); ?></td>
										<td><?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] != 'ar') echo $system['currency'].' '.$carts[$i]['price']*$carts[$i]['quantity']; else echo str_replace($western_arabic, $eastern_arabic, $carts[$i]['price']*$carts[$i]['quantity']).' '.$system['currency']; ?></td>
										<td width="35%">
											<?php language('name'); ?><br><input type="text" class="form-control" name="name" value="<?php if(isset($_COOKIE['name'])) echo $_COOKIE['name']; ?>" maxlength="255" style="background-color: #ffcc66;" required="required" />
											<br><br>
											<?php language('phone'); ?><br><input type="text" class="form-control" name="phone" value="<?php if(isset($_COOKIE['phone'])) echo $_COOKIE['phone']; ?>" pattern="[0-9]*" title="<?php language('quantitymatch'); ?>" maxlength="11" style="background-color: #ffcc66;" required="required" />
											<br><br>
											<?php language('address'); ?><br><textarea name="address" class="form-control" rows="3" style="background-color: #ffcc66;" required="required"><?php if(isset($_COOKIE['address'])) echo $_COOKIE['address']; ?></textarea>
											<br><br>
											<?php language('city'); ?><br>
												<select type="text" class="form-control" name="city" style="background-color: #ffcc66;" required="required">
													<?php for($ci=0;$ci<count($cities);$ci++) { ?><option value="<?php echo $cities[$ci]['title'].'|'.$cities[$ci]['shipping']; ?>"><?php echo $cities[$ci]['title'].' - '.$cities[$ci]['shipping'].' '.$system['currency']; ?></option><?php } ?>
												</select>
											<!--<br><br>
											<center>تابعوا المزيد</center>-->
										</td>
										<td style="width: 125px;">											
											<?php if($cansale == 1) { ?>
											<input type="hidden" name="id" value="<?php echo $carts[$i]['id']; ?>">
											<!--<button onClick="location.href='check.php?id=<?php echo $carts[$i]['id']; ?>'"><?php language('checkout'); ?></button>-->
											<br><br>
											<input type="submit" name="ondelivery" value="<?php language('ondelivery'); ?>" formaction="ondelivery.php" class="btn btn-info" style="background-color: #FDA30E; width: 125px; border: 1px solid #FDA30E;">
											<br><br>
											<input type="button" name="more" value="تابعوا المزيد" class="btn btn-info" style="margin-top: 15px; background-color: #FDA30E; width: 125px; border: 1px solid #FDA30E;">
											<!--<input type="submit" name="paypal" value="<?php language('paypal'); ?>" formaction="paypal.php" class="btn btn-info" style="margin-top: 15px; background-color: #FDA30E; width: 125px; border: 1px solid #FDA30E;">-->
											<?php } else { echo '<div style="color: red;">'; language('cantbuy'); echo '</div>'; } ?>
										</td>
										<td><i class="fa fa-times fa-2x" style="margin-top: 79px; color: #FDA30E;" onclick="deletecart('<?php echo $carts[$i]['id'];?>','<?php echo $carts[$i]['product'];?>','<?php echo $ipaddress;?>','<?php echo $carts[$i]['quantity'];?>')"></i></td>
										</form>
									</tr>
								<?php } ?>
							</table>
						</div>
					</div>
				</div>
				<?php } else { echo '<div style="font-size: 200%;">'; language('yourcartisempty'); echo '</div>'; } ?>
			</div>		
			</div>
		</div>
	<!-- checkout -->	
		</div>
	<!---footer--->
		<?php include('designs/footer.php'); ?>
	<!---footer--->
</body>
</html>