<?php
	$_SERVER['HTTP_PRAGMA'] = 'no-cache';
	$_SERVER['HTTP_CACHE_CONTROL'] = 'no-cache';
	include('develops/ordersfront.php');
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
				<h3><a href="index.php"><?php language('home'); ?></a> / <span><?php language('orders'); ?></span></h3>
			</div>
		</div>
	<!--banner-->

	<!--content-->
		<div class="content" <?php if(!isset($_COOKIE['lang']) || (isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar')) { ?>dir="rtl"<?php } ?>>
			<div class="cart-items">
			<div class="container">
				<?php
				if(!empty($orders))
				{
				?>
				<div class="row">
					<div class="col-md-12">
						<div class="table-responsive">
							<table class="table table-bordered">
								<tr class="catrtableheader">
									<td><h5><strong><?php language('title'); ?></strong></h5></td>
									<td><h5><strong><?php language('unitprice'); ?></strong></h5></td>
									<td><h5><strong><?php language('quantity'); ?></strong></h5></td>
									<td><h5><strong><?php language('shipping'); ?></strong></h5></td>
									<td><h5><strong><?php language('total'); ?></strong></h5></td>
									<td><h5><strong><?php language('time'); ?></strong></h5></td>
									<td><h5><strong><?php language('dtime'); ?></strong></h5></td>
									<td width="10%"></td>
								</tr>
								<?php for($i=0;$i<sizeof($orders);$i++) { ?>
									<tr id="tr-<?php echo $orders[$i]['id']; ?>">
										<td><?php echo $orders[$i]['title']; ?></td>
										<td><?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] != 'ar') echo $system['currency'].' '.$orders[$i]['price']; else echo str_replace($western_arabic, $eastern_arabic, $orders[$i]['price']).' '.$system['currency']; ?></td>
										<td><?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] != 'ar') echo $orders[$i]['quantity']; else echo str_replace($western_arabic, $eastern_arabic, $orders[$i]['quantity']); ?></td>
										<td><?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] != 'ar') echo $system['currency'].' '.$orders[$i]['shipping']; else echo str_replace($western_arabic, $eastern_arabic, $orders[$i]['shipping']).' '.$system['currency']; ?></td>
										<td><?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] != 'ar') echo $system['currency'].' '.$orders[$i]['total']+$orders[$i]['shipping']; else echo str_replace($western_arabic, $eastern_arabic, $orders[$i]['total']+$orders[$i]['shipping']).' '.$system['currency']; ?></td>
										<td><?php echo $orders[$i]['time']; ?></td>
										<td><?php if($orders[$i]['dtime'] != '') echo date('Y-m-d H:i:s', $orders[$i]['dtime']); ?></td>
										<td width="10%">
											<?php if($orders[$i]['dtime'] == '' && $orders[$i]['delivered'] == 0) { ?>
												<a href="#" class="btn btn-warning" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><?php language('notarrived'); ?></a>
											<?php } else { ?>
												<a href="#" class="btn btn-success" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><?php language('arrived'); ?></a>
											<?php } ?>
										</td>
									</tr>
								<?php } ?>
							</table>
						</div>
					</div>
				</div>
				<div class="row" style="text-align:center;">
				<div class="col-sm-12 col-md-12">
					<nav>
						<ul class="pagination">
							<?php if($totalPages > 1) { ?><li style="<?php if(!isset($_COOKIE['lang']) || isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') echo 'float:right;'; ?>"><a href="?page=1"><?php language("first"); ?></a></li><?php } ?>
							<?php if($page > 3) { ?><li style="<?php if(!isset($_COOKIE['lang']) || isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') echo 'float:right;'; ?>">
								<a href="?page=<?php echo $page-2; ?>" aria-label="Next">
									<span aria-hidden="true">&raquo;</span>
								</a>
							</li><?php } ?>
							<?php if($page > 1) { ?><li style="<?php if(!isset($_COOKIE['lang']) || isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') echo 'float:right;'; ?>"><a href="?page=<?php echo $page-1; ?>"><?php echo $page-1; ?></a></li><?php } ?>
							<?php if($totalPages > 1) { ?><li style="<?php if(!isset($_COOKIE['lang']) || isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') echo 'float:right;'; ?>"><a href="?page=<?php echo $page; ?>"><?php echo $page; ?></a></li><?php } ?>
							<?php if($page < $totalPages) { ?><li style="<?php if(!isset($_COOKIE['lang']) || isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') echo 'float:right;'; ?>"><a href="?page=<?php echo $page+1; ?>"><?php echo $page+1; ?></a></li><?php } ?>
							<?php if($page < $totalPages-1) { ?><li style="<?php if(!isset($_COOKIE['lang']) || isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') echo 'float:right;'; ?>">
								<a href="?page=<?php echo $page+2; ?>" aria-label="Previous">
									<span aria-hidden="true">&laquo;</span>
								</a>
							</li><?php } ?>
							<?php if($totalPages > 1) { ?><li style="<?php if(!isset($_COOKIE['lang']) || isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') echo 'float:right;'; ?>"><a href="?page=<?php echo $totalPages; ?>"><?php language("last"); ?></a></li><?php } ?>
						</ul>
					</nav>
				</div>
				</div>
				<?php } else { echo '<div style="font-size: 200%;">'; language('noorders'); echo '</div>'; } ?>
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