<?php
	$pageWasRefreshed = isset($_SERVER['HTTP_CACHE_CONTROL']) && $_SERVER['HTTP_CACHE_CONTROL'] === 'max-age=0';
	if($pageWasRefreshed ) {}
	else { if(isset($_GET['id']) && ($_GET['id'] != '' || $_GET['id'] != 0)) { include('libs/views.php'); addViews($_GET['id']); }}

	$_SERVER['HTTP_PRAGMA'] = 'no-cache';
	$_SERVER['HTTP_CACHE_CONTROL'] = 'no-cache';
	include('develops/product.php');
	
	if($product['id'] != '') {
		$productpics = array_diff(scandir('uploads/products/'.$product['id']), array('.','..'));
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
<title><?php if(isset($product['title']) && $product['title'] != '') echo $product['title']; ?></title>
<!--css-->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet">
<!--css-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="<?php if(isset($product['description']) && $product['description'] != '') echo $product['description']; ?>" />
<meta name="keywords" content="<?php if(isset($cpage['keywords']) && $cpage['keywords'] != '') echo $cpage['keywords']; ?>" />

<meta property="og:app_id"          content="1706099226293211" />
<meta property="og:url"           content="http://zoneshop.com/product.php?id=<?php echo $product['id']; ?>" />
<meta property="og:type"          content="article" />
<meta property="og:title"         content="<?php echo $product['title']; ?>" />
<meta property="og:description"   content="<?php echo $product['description']; ?>" />
<?php for($shareimage=2;$shareimage<count($productpics)+2;$shareimage++) { ?>
<meta property="og:image"         content="http://zoneshop.com/uploads/products/<?php echo $product['id']; ?>/<?php echo $productpics[$shareimage]; ?>" />
<?php } ?>

<link rel="shortcut icon" href="uploads/<?php echo $system['logo']; ?>">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery.min.js"></script>
<link href='//fonts.googleapis.com/css?family=Cagliostro' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,800italic,800,700italic,700,600italic,600,400italic,300italic,300' rel='stylesheet' type='text/css'>
<!--search jQuery-->
	<script src="js/main.js"></script>
<!--search jQuery-->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
 <!-- cart -->
<script src="js/simpleCart.min.js"></script>
<!-- cart -->
  <script defer src="js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<script src="js/imagezoom.js"></script>
<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script>

  <!--mycart-->
  <!--start-rate-->
<script src="js/jstarbox.js"></script>
	<link rel="stylesheet" href="css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
		<script type="text/javascript">
			jQuery(function() {
			jQuery('.starbox').each(function() {
				var starbox = jQuery(this);
					starbox.starbox({
					average: starbox.attr('data-start-value'),
					changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
					ghosting: starbox.hasClass('ghosting'),
					autoUpdateAverage: starbox.hasClass('autoupdate'),
					buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
					stars: starbox.attr('data-star-count') || 5
					}).bind('starbox-value-changed', function(event, value) {
					if(starbox.hasClass('random')) {
					var val = Math.random();
					starbox.next().text(' '+val);
					return val;
					} 
				})
			});
		});
		</script>
<!--//End-rate-->
<link href="css/owl.carousel.css" rel="stylesheet">
<script src="js/owl.carousel.js"></script>
	<script>
		$(document).ready(function() {
		$("#owl-demo").owlCarousel({
			items : 1,
			lazyLoad : true,
			autoPlay : true,
			navigation : false,
			navigationText :  false,
			pagination : true,
		});
		});
	</script>
<script type="text/javascript" src="js/socialmedia.js"></script>
<style>
.fb_iframe_widget,
.fb_iframe_widget span,
.fb_iframe_widget span iframe[style] {
  min-width: 100% !important;
  width: 100% !important;
}
</style>
<script type='text/javascript' src='//dsms0mj1bbhn4.cloudfront.net/assets/pub/shareaholic.js' data-shr-siteid='86a2931ebf5bee75a5b85d1dd8da0f54' data-cfasync='false' async='async'></script>
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
				<h3><a href="index.php"><?php language('home'); ?></a> / <span><?php language('product'); ?></span></h3>
			</div>
		</div>
	<!--banner-->

	<!--content-->
		<div class="content">
			<!--single-->
			<div class="single-wl3">
				<div class="container">
					<div class="single-grids">
						<div class="col-md-10 col-md-offset-1 single-grid">
							<div clas="single-top">
								<?php if(!empty($productpics)) { ?>
								<div class="single-left">
									<div class="flexslider">
										<ul class="slides">
											<?php for($img=2;$img<count($productpics)+2;$img++) { ?>
												<li data-thumb="uploads/products/<?php echo $product['id']; ?>/<?php echo $productpics[$img]; ?>">
													<div class="thumb-image"> <img src="uploads/products/<?php echo $product['id']; ?>/<?php echo $productpics[$img]; ?>" data-imagezoom="true" class="img-responsive"> </div>
												</li>
											<?php } ?>
										 </ul>
									</div>
								</div>
								<?php } ?>
								<div class="single-right simpleCart_shelfItem" <?php if(!isset($_COOKIE['lang']) || (isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar')) { ?>dir="rtl"<?php } ?>>
									<h4><?php echo $product['title']; ?></h4>
									<!--<div class="block">
										<div class="starbox small ghosting"> </div>
									</div>-->
									<p class="price item_price"><?php if($product['oldprice'] != '') { ?><del><?php if($lang_file == 'ar') echo str_replace($western_arabic, $eastern_arabic, $product['oldprice']).$system['currency']; else echo $system['currency'].$product['oldprice']; ?></del> - <?php } ?><span class="item_price"><?php if($lang_file == 'ar') echo str_replace($western_arabic, $eastern_arabic, $product['price']).$system['currency']; else echo $system['currency'].$product['price']; ?></span></p>
									<div class="description">
										<p><!--<span>Quick Overview : </span>--> <?php echo $product['description']; ?></p>
									</div>
									
									<form action="develops/addtocart.php" method="POST">
									<br>
										<div class="row" style="padding-top: 25px;">
											<div class="col-md-7  col-xs-7 <?php if(!isset($_COOKIE['lang']) || (isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'en')) echo 'col-md-push-5  col-xs-push-5'; ?>"><input type="number" class="form-control" name="quantity" min="1" max="<?php echo $product['quantity']; ?>" style="width: 30%;" required="required" /></div>
											<div class="col-md-5 col-xs-5 <?php if(!isset($_COOKIE['lang']) || (isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'en')) echo 'col-md-pull-7  col-xs-pull-7'; ?>"><h4><?php language('quantity'); ?></h4></div>
										</div>
										<div class="row" style="padding-top: 25px;">
											<div class="col-md-7  col-xs-7 <?php if(!isset($_COOKIE['lang']) || (isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'en')) echo 'col-md-push-5  col-xs-push-5'; ?> occasion-cart"><input type="submit" class="my-cart-b item_add" name="addtocart" value="<?php language('addtocart'); ?>"></div>
											<div class="col-md-5 col-xs-5 <?php if(!isset($_COOKIE['lang']) || (isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'en')) echo 'col-md-pull-7  col-xs-pull-7'; ?>"><input type="hidden" name="productid" value="<?php echo $product['id']; ?>"></div>
										</div>
									</form>
									
									<br><br>
									<div class="row">
										<div class="col-md-12 col-xs-12">
											<div class='shareaholic-canvas' data-app='share_buttons' data-app-id='23640551'></div>
										</div>
									</div>
									
									<!--<div class="color-quality">
										<h6>Quality :</h6>
											<div class="quantity"> 
												<div class="quantity-select">                           
													<div class="entry value-minus1">&nbsp;</div>
													<div class="entry value1"><span>1</span></div>
													<div class="entry value-plus1 active">&nbsp;</div>
												</div>
											</div>
														<script>
														$('.value-plus1').on('click', function(){
															var divUpd = $(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10)+1;
															divUpd.text(newVal);
														});

														$('.value-minus1').on('click', function(){
															var divUpd = $(this).parent().find('.value1'), newVal = parseInt(divUpd.text(), 10)-1;
															if(newVal>=1) divUpd.text(newVal);
														});
														</script>
									</div>
									<div class="women">
										<span class="size">XL / XXL / S </span>
										<a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
									</div>
									<div class="social-icon">
										<a href="#"><i class="icon"></i></a>
										<a href="#"><i class="icon1"></i></a>
										<a href="#"><i class="icon2"></i></a>
										<a href="#"><i class="icon3"></i></a>
									</div>-->
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<!--<div class="col-md-3 single-grid1">
							<h3>Recent Products</h3>
							<div class="recent-grids">
								<div class="recent-left">
									<a href="single.html"><img class="img-responsive " src="images/r.jpg" alt=""></a>	
								</div>
								<div class="recent-right">
									<h6 class="best2"><a href="single.html">Lorem ipsum dolor </a></h6>
									<div class="block">
										<div class="starbox small ghosting"> </div>
									</div>
									<span class=" price-in1"> $ 29.00</span>
								</div>	
								<div class="clearfix"> </div>
							</div>
							<div class="recent-grids">
								<div class="recent-left">
									<a href="single.html"><img class="img-responsive " src="images/r1.jpg" alt=""></a>	
								</div>
								<div class="recent-right">
									<h6 class="best2"><a href="single.html">Duis aute irure </a></h6>
									<div class="block">
										<div class="starbox small ghosting"> </div>
									</div>
									<span class=" price-in1"> $ 19.00</span>
								</div>	
								<div class="clearfix"> </div>
							</div>
							<div class="recent-grids">
								<div class="recent-left">
									<a href="single.html"><img class="img-responsive " src="images/r2.jpg" alt=""></a>	
								</div>
								<div class="recent-right">
									<h6 class="best2"><a href="single.html">Lorem ipsum dolor </a></h6>
									<div class="block">
										<div class="starbox small ghosting"> </div>
									</div>
									<span class=" price-in1"> $ 19.00</span>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="recent-grids">
								<div class="recent-left">
									<a href="single.html"><img class="img-responsive " src="images/r3.jpg" alt=""></a>	
								</div>
								<div class="recent-right">
									<h6 class="best2"><a href="single.html">Ut enim ad minim </a></h6>
									<div class="block">
										<div class="starbox small ghosting"> </div>
									</div> 
									<span class=" price-in1">$ 45.00</span>
								</div>	
								<div class="clearfix"> </div>
							</div>
						</div>-->
						<div class="clearfix"> </div>
					</div>
					<!--Product Description-->
						<div class="product-w3agile">
							<h3 class="tittle1"><?php language('description'); ?></h3>
							<div class="product-grids">
								<!--<div class="col-md-4 product-grid">
									<div id="owl-demo" class="owl-carousel">
										<div class="item">
											<div class="recent-grids">
												<div class="recent-left">
													<a href="single.html"><img class="img-responsive " src="images/r.jpg" alt=""></a>	
												</div>
												<div class="recent-right">
													<h6 class="best2"><a href="single.html">Lorem ipsum dolor </a></h6>
													<div class="block">
														<div class="starbox small ghosting"> </div>
													</div>
													<span class=" price-in1"> $ 29.00</span>
												</div>	
												<div class="clearfix"> </div>
											</div>
											<div class="recent-grids">
												<div class="recent-left">
													<a href="single.html"><img class="img-responsive " src="images/r1.jpg" alt=""></a>	
												</div>
												<div class="recent-right">
													<h6 class="best2"><a href="single.html">Duis aute irure </a></h6>
													<div class="block">
														<div class="starbox small ghosting"> </div>
													</div>
													<span class=" price-in1"> $ 19.00</span>
												</div>	
												<div class="clearfix"> </div>
											</div>
											<div class="recent-grids">
												<div class="recent-left">
													<a href="single.html"><img class="img-responsive " src="images/r2.jpg" alt=""></a>	
												</div>
												<div class="recent-right">
													<h6 class="best2"><a href="single.html">Lorem ipsum dolor </a></h6>
													<div class="block">
														<div class="starbox small ghosting"> </div>
													</div>
													<span class=" price-in1"> $ 19.00</span>
												</div>
												<div class="clearfix"> </div>
											</div>
											<div class="recent-grids">
												<div class="recent-left">
													<a href="single.html"><img class="img-responsive " src="images/r3.jpg" alt=""></a>	
												</div>
												<div class="recent-right">
													<h6 class="best2"><a href="single.html">Ut enim ad minim </a></h6>
													<div class="block">
														<div class="starbox small ghosting"> </div>
													</div>
													<span class=" price-in1">$ 45.00</span>
												</div>	
												<div class="clearfix"> </div>
											</div>
										</div>
										<div class="item">
											<div class="recent-grids">
												<div class="recent-left">
													<a href="single.html"><img class="img-responsive " src="images/r4.jpg" alt=""></a>	
												</div>
												<div class="recent-right">
													<h6 class="best2"><a href="single.html">Lorem ipsum dolor </a></h6>
													<div class="block">
														<div class="starbox small ghosting"> </div>
													</div>
													<span class=" price-in1"> $ 29.00</span>
												</div>	
												<div class="clearfix"> </div>
											</div>
											<div class="recent-grids">
												<div class="recent-left">
													<a href="single.html"><img class="img-responsive " src="images/r5.jpg" alt=""></a>	
												</div>
												<div class="recent-right">
													<h6 class="best2"><a href="single.html">Duis aute irure </a></h6>
													<div class="block">
														<div class="starbox small ghosting"> </div>
													</div>
													<span class=" price-in1"> $ 19.00</span>
												</div>	
												<div class="clearfix"> </div>
											</div>
											<div class="recent-grids">
												<div class="recent-left">
													<a href="single.html"><img class="img-responsive " src="images/r2.jpg" alt=""></a>	
												</div>
												<div class="recent-right">
													<h6 class="best2"><a href="single.html">Lorem ipsum dolor </a></h6>
													<div class="block">
														<div class="starbox small ghosting"> </div>
													</div>
													<span class=" price-in1"> $ 19.00</span>
												</div>
												<div class="clearfix"> </div>
											</div>
											<div class="recent-grids">
												<div class="recent-left">
													<a href="single.html"><img class="img-responsive " src="images/r3.jpg" alt=""></a>	
												</div>
												<div class="recent-right">
													<h6 class="best2"><a href="single.html">Ut enim ad minim </a></h6>
													<div class="block">
														<div class="starbox small ghosting"> </div>
													</div>
													<span class=" price-in1">$ 45.00</span>
												</div>	
												<div class="clearfix"> </div>
											</div>
										</div>
									</div>
									<img class="img-responsive " src="images/woo2.jpg" alt="">
								</div>-->
								<div class="col-md-10 col-md-offset-1 product-grid1" <?php if(!isset($_COOKIE['lang']) || (isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar')) { ?>dir="rtl"<?php } ?>>
									<div class="tab-wl3">
										<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
											<ul id="myTab" class="nav nav-tabs left-tab" role="tablist">
												<li role="presentation" class="active" <?php if(!isset($_COOKIE['lang']) || (isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar')) { ?>style="float: right;"<?php } ?>><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true"><?php language('description'); ?></a></li>
												<li role="presentation" <?php if(!isset($_COOKIE['lang']) || (isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar')) { ?>style="float: right;"<?php } ?>><a href="#reviews" role="tab" id="reviews-tab" data-toggle="tab" aria-controls="reviews"><?php language('comment'); ?></a></li>

											</ul>
											<div id="myTabContent" class="tab-content">
												<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
													<div class="descr">
														<h3><?php language('description'); ?></h3>
														<p><?php echo $product['description']; ?></p>
														<!--<h4>Suspendisse laoreet, augue vel mattis </h4>
														<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
														<p class="quote">Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
															<div class="video">
															<iframe src="https://player.vimeo.com/video/22158502" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
															</div>
														<ul>
															<li> Twin button front fastening</li>
															<li> Length:65cm</li>
															<li> Regular fit</li>
															<li> Notched lapels</li>
															<li> Internal pockets</li>
															<li> Centre-back vent </li>
															<li> Material : Outer: 40% Linen &amp; 40% Polyamide; Body Lining: 100% Cotton; Lining: 100% Acetate</li>
														</ul>
														<p class="quote">Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>-->
													</div>
												</div>
												<div role="tabpanel" class="tab-pane fade" id="reviews" aria-labelledby="reviews-tab">
													<div class="descr">
														<h3><?php language('comment'); ?></h3>
														<div class="fb-comments" data-href="http://zoneshop.com/product.php?id=<?php echo $product['id']; ?>" data-numposts="3"></div>
														<!--<div class="reviews-top">
															<div class="reviews-left">
																<img src="images/men3.jpg" alt=" " class="img-responsive">
															</div>
															<div class="reviews-right">
																<ul>
																	<li><a href="#">Admin</a></li>
																	<li><a href="#"><i class="glyphicon glyphicon-share" aria-hidden="true"></i>Reply</a></li>
																</ul>
																<p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit.</p>
															</div>
															<div class="clearfix"></div>
														</div>
														<div class="reviews-bottom">
															<h4>Add Reviews</h4>
															<p>Your email address will not be published. Required fields are marked *</p>
															<p>Your Rating</p>
															<div class="block">
																<div class="starbox small ghosting"><div class="positioner"><div class="stars"><div class="ghost" style="width: 42.5px; display: none;"></div><div class="colorbar" style="width: 42.5px;"></div><div class="star_holder"><div class="star star-0"></div><div class="star star-1"></div><div class="star star-2"></div><div class="star star-3"></div><div class="star star-4"></div></div></div></div></div>
															</div>
															<form action="#" method="post">
																<label>Your Review </label>
																<textarea type="text" Name="Message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
																<div class="row">
																	<div class="col-md-6 row-grid">
																		<label>Name</label>
																		<input type="text" value="Name" Name="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
																	</div>
																	<div class="col-md-6 row-grid">
																		<label>Email</label>
																		<input type="email" value="Email" Name="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
																	</div>
																	<div class="clearfix"></div>
																</div>
																<input type="submit" value="SEND">
															</form>
														</div>-->
													</div>
												</div>
												<div role="tabpanel" class="tab-pane fade" id="custom" aria-labelledby="custom-tab">
													
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					<!--Product Description-->
				</div>
			</div>
			<!--single-->
			<!--<div class="new-arrivals-w3agile">
					<div class="container">
						<h3 class="tittle1">Best Sellers</h3>
						<div class="arrivals-grids">
							<div class="col-md-3 arrival-grid simpleCart_shelfItem">
								<div class="grid-arr">
									<div  class="grid-arrival">
										<figure>		
											<a href="single.html">
												<div class="grid-img">
													<img  src="images/p28.jpg" class="img-responsive" alt="">
												</div>
												<div class="grid-img">
													<img  src="images/p27.jpg" class="img-responsive"  alt="">
												</div>			
											</a>		
										</figure>	
									</div>
									<div class="ribben">
										<p>NEW</p>
									</div>
									<div class="ribben1">
										<p>SALE</p>
									</div>
									<div class="block">
										<div class="starbox small ghosting"> </div>
									</div>
									<div class="women">
										<h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
										<span class="size">XL / XXL / S </span>
										<p ><del>$100.00</del><em class="item_price">$70.00</em></p>
										<a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
									</div>
								</div>
							</div>
							<div class="col-md-3 arrival-grid simpleCart_shelfItem">
								<div class="grid-arr">
									<div  class="grid-arrival">
										<figure>		
											<a href="single.html">
												<div class="grid-img">
													<img  src="images/p30.jpg" class="img-responsive" alt="">
												</div>
												<div class="grid-img">
													<img  src="images/p29.jpg" class="img-responsive"  alt="">
												</div>			
											</a>		
										</figure>	
									</div>
									<div class="ribben2">
										<p>OUT OF STOCK</p>
									</div>
									<div class="block">
										<div class="starbox small ghosting"> </div>
									</div>
									<div class="women">
										<h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
										<span class="size">XL / XXL / S </span>
										<p ><del>$100.00</del><em class="item_price">$70.00</em></p>
										<a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
									</div>
								</div>
							</div>
							<div class="col-md-3 arrival-grid simpleCart_shelfItem">
								<div class="grid-arr">
									<div  class="grid-arrival">
										<figure>		
											<a href="single.html">
												<div class="grid-img">
													<img  src="images/s2.jpg" class="img-responsive" alt="">
												</div>
												<div class="grid-img">
													<img  src="images/s1.jpg" class="img-responsive"  alt="">
												</div>			
											</a>		
										</figure>	
									</div>
									<div class="ribben1">
										<p>SALE</p>
									</div>
									<div class="block">
										<div class="starbox small ghosting"> </div>
									</div>
									<div class="women">
										<h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
										<span class="size">XL / XXL / S </span>
										<p ><del>$100.00</del><em class="item_price">$70.00</em></p>
										<a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
									</div>
								</div>
							</div>
							<div class="col-md-3 arrival-grid simpleCart_shelfItem">
								<div class="grid-arr">
									<div  class="grid-arrival">
										<figure>		
											<a href="single.html">
												<div class="grid-img">
													<img  src="images/s4.jpg" class="img-responsive" alt="">
												</div>
												<div class="grid-img">
													<img  src="images/s3.jpg" class="img-responsive"  alt="">
												</div>			
											</a>		
										</figure>	
									</div>
									<div class="ribben">
										<p>NEW</p>
									</div>
									<div class="block">
										<div class="starbox small ghosting"> </div>
									</div>
									<div class="women">
										<h6><a href="single.html">Sed ut perspiciatis unde</a></h6>
										<span class="size">XL / XXL / S </span>
										<p ><del>$100.00</del><em class="item_price">$70.00</em></p>
										<a href="#" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
									</div>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>-->
			<!--new-arrivals-->
		</div>
		<!--content-->
		
		<!---footer--->
				<?php include('designs/footer.php'); ?>
		<!---footer--->
</body>
</html>
<?php } else header('Location: index.php'); ?>