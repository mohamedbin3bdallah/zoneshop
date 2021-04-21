<?php
	$_SERVER['HTTP_PRAGMA'] = 'no-cache';
	$_SERVER['HTTP_CACHE_CONTROL'] = 'no-cache';
	include('develops/productsfront.php');
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
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
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
				<h3><a href="index.html"><?php language('home'); ?></a> / <span><?php language('products'); ?></span></h3>
			</div>
		</div>
	<!--banner-->
		<!--content-->
			<div class="content">
				<div class="products-agileinfo">
						<h2 class="tittle"><?php if($category) echo $category; else language('products'); ?></h2>
					<div class="container">
						<div class="product-agileinfo-grids w3l">
							<div class="col-md-3 product-agileinfo-grid">
								<?php
								$flcategories = getFLevelCategories($lang_file);
								if(!empty($flcategories))
								{
								?>
								<div class="categories">
									<h3><?php language('categories'); ?></h3>
									<ul class="tree-list-pad">
										<?php $k = 1; for($j=0;$j<count($flcategories);$j++) { ?>
										<li><input type="checkbox" checked="checked" id="item-<?php echo $j; ?>" /><label for="item-<?php echo $j; ?>"><span></span><input type="button" style="background-color:#F9F8F8; color:#000; border:0; opacity:1;" onclick="location.href = 'products.php?category=<?php echo $flcategories[$j]['childto']; ?>&q=<?php if(isset($_GET['q'])) echo $_GET['q']; ?>'" value="<?php echo $flcategories[$j]['title']; ?>" /></label>
											<ul>
												<?php $mlcategories = getMLevelCategories($flcategories[$j]['childto'],$lang_file); for($m=0;$m<count($mlcategories);$m++) { ?>
												<li><a href="products.php?category=<?php echo $mlcategories[$m]['childto']; ?>&q=<?php if(isset($_GET['q'])) echo $_GET['q']; ?>"><?php echo $mlcategories[$m]['title']; ?></a></li>
												<!--<li><input type="checkbox" id="item-0-0" /><label for="item-0-0">Ethnic Wear</label>
													<ul>
														<li><a href="products.html">Shirts</a></li>
														<li><a href="products.html">Caps</a></li>
														<li><a href="products.html">Shoes</a></li>
														<li><a href="products.html">Pants</a></li>
														<li><a href="products.html">SunGlasses</a></li>
														<li><a href="products.html">Trousers</a></li>
													</ul>
												</li>-->
												</li>
												<?php } ?>
											</ul>
										</li>
										<?php } ?>
									</ul>
								</div>
								<?php } ?>
								
								<!--<div class="price">
									<h3>Price Range</h3>
									<ul class="dropdown-menu6">
										<li>                
											<div id="slider-range"></div>							
											<input type="text" id="amount" style="border: 0; color: #ffffff; font-weight: normal;" />
										</li>			
									</ul>
									<script type='text/javascript'>//<![CDATA[ 
									$(window).load(function(){
									 $( "#slider-range" ).slider({
												range: true,
												min: 0,
												max: 9000,
												values: [ 1000, 7000 ],
												slide: function( event, ui ) {  $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
												}
									 });
									$( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) + " - $" + $( "#slider-range" ).slider( "values", 1 ) );

									});//]]>  

									</script>
									<script type="text/javascript" src="js/jquery-ui.js"></script>
								</div>
								<div class="top-rates">
									<h3>Top Rates products</h3>
									<div class="recent-grids">
										<div class="recent-left">
											<a href="single.html"><img class="img-responsive " src="images/r.jpg" alt=""></a>	
										</div>
										<div class="recent-right">
											<h6 class="best2"><a href="single.html">Lorem ipsum dolor </a></h6>
											<p><del>$100.00</del> <em class="item_price">$09.00</em></p>
										</div>	
										<div class="clearfix"> </div>
									</div>
									<div class="recent-grids">
										<div class="recent-left">
											<a href="single.html"><img class="img-responsive " src="images/r1.jpg" alt=""></a>	
										</div>
										<div class="recent-right">
											<h6 class="best2"><a href="single.html">Duis aute irure </a></h6>
											<p><del>$100.00</del> <em class="item_price">$19.00</em></p>
										</div>	
										<div class="clearfix"> </div>
									</div>
									<div class="recent-grids">
										<div class="recent-left">
											<a href="single.html"><img class="img-responsive " src="images/r2.jpg" alt=""></a>	
										</div>
										<div class="recent-right">
											<h6 class="best2"><a href="single.html">Lorem ipsum dolor </a></h6>
											<p><del>$100.00</del> <em class="item_price">$39.00</em></p>
										</div>
										<div class="clearfix"> </div>
									</div>
									<div class="recent-grids">
										<div class="recent-left">
											<a href="single.html"><img class="img-responsive " src="images/r3.jpg" alt=""></a>	
										</div>
										<div class="recent-right">
											<h6 class="best2"><a href="single.html">Ut enim ad minim </a></h6>
											<p><em class="item_price">$39.00</em></p>
										</div>	
										<div class="clearfix"> </div>
									</div>
								</div>
								<div class="brand-w3l">
									<h3>Brands Filter</h3>
									<ul>
										<li><a href="#">Ralph Lauren</a></li>
										<li><a href="#">adidas</a></li>
										<li><a href="#">Bottega Veneta</a></li>
										<li><a href="#">Valentino</a></li>
										<li><a href="#">Nike</a></li>
										<li><a href="#">Burberry</a></li>
										<li><a href="#">Michael Kors</a></li>
										<li><a href="#">Louis Vuitton</a></li>
										<li><a href="#">Jimmy Choo</a></li>
									</ul>
								</div>
								<div class="cat-img">
									<img class="img-responsive " src="images/45.jpg" alt="">
								</div>-->
							</div>
							<div class="col-md-9 product-agileinfon-grid1 w3l">
								<div class="product-agileinfon-top">
									<div class="col-md-6 product-agileinfon-top-left">
										<img class="img-responsive " src="images/img1.jpg" alt="">
									</div>
									<div class="col-md-6 product-agileinfon-top-left">
										<img class="img-responsive " src="images/img2.jpg" alt="">
									</div>
									<div class="clearfix"></div>
								</div>
								
								<?php	if(!empty($products))	{	?>
								<!--<div class="mens-toolbar">
									<p >Showing 1–9 of 21 results</p>
									 <p class="showing">Sorting By
										<select>
											  <option value=""> Name</option>
											  <option value="">  Rate</option>
												<option value=""> Color </option>
												<option value=""> Price </option>
										</select>
									  </p> 
									  <p>Show
										<select>
											  <option value=""> 9</option>
											  <option value="">  10</option>
												<option value=""> 11 </option>
												<option value=""> 12 </option>
										</select>
									  </p>
									<div class="clearfix"></div>		
								</div>-->
								<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs" style="margin-top:55px;">
									<ul id="myTab" class="nav nav-tabs left-tab" role="tablist">
										<li role="presentation" class="active" style="float: right;"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true"><img src="images/menu1.png"></a></li>
										<li role="presentation" style="float: right;"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile"><img src="images/menu.png"></a></li>
									</ul>
									<div id="myTabContent" class="tab-content">
										<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
											<?php
											for($p=0;$p<count($products);$p++)
											{
												$productpics[$p] = array_diff(scandir('uploads/products/'.$products[$p]['id']), array('.','..'));
											?>
											<?php if($p%3 == 0) { ?><div class="product-tab prod1"><?php } ?>
												<div class="col-md-4 <?php if(!isset($_COOKIE['lang']) || (isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar')) { if($p%3 == 0) echo 'col-md-push-8'; elseif($p%3 == 2) echo 'col-md-pull-8'; } ?> product-tab-grid simpleCart_shelfItem">
													<div class="grid-arr">
														<div  class="grid-arrival">
															<figure>		
																<a href="#" class="new-gri" data-toggle="modal" data-target="#myModal1">
																	<div class="grid-img">
																		<img  src="uploads/products/<?php echo $products[$p]['id'].'/'.$productpics[$p][2]; ?>" class="img-responsive" alt="<?php echo $products[$p]['title']; ?>">
																	</div>
																	<div class="grid-img">
																		<img  src="uploads/products/<?php echo $products[$p]['id'].'/'.$productpics[$p][3]; ?>" class="img-responsive"  alt="<?php echo $products[$p]['title']; ?>">
																	</div>			
																</a>		
															</figure>	
														</div>
														<div class="block">
															<div class="starbox small ghosting"> </div>
														</div>
														<div class="women">
															<h6><a href="product.php?id=<?php echo $products[$p]['id']; ?>"><?php echo $products[$p]['title']; ?></a></h6>
															<!--<span class="size">XL / XXL / S </span>-->
															<p><em class="item_price" dir="rtl"><?php echo $products[$p]['price'].' '.$system['currency']; ?></em>&nbsp;&nbsp;&nbsp;<del dir="rtl"><?php echo $products[$p]['oldprice'].' '.$system['currency']; ?></del></p>
															<a href="product.php?id=<?php echo $products[$p]['id']; ?>" data-text="Add To Cart" class="my-cart-b item_add"><?php language('addtocart'); ?></a>
														</div>
													</div>
												</div>
											<?php if($p%3 == 2) { ?></div><?php } ?>
											<?php } ?>
											<div class="clearfix"></div>
											</div>
										</div>
										<div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
											<?php
											for($p=0;$p<count($products);$p++)
											{
												//$productpics[$p] = array_diff(scandir('uploads/products/'.$products[$p]['id']), array('.','..'));
											?>
											<div class="product-tab1 prod3">
												<div class="col-md-4 product-tab1-grid">
													<div class="grid-arr">
														<div  class="grid-arrival">
															<figure>		
																<a href="#" class="new-gri" data-toggle="modal" data-target="#myModal1">
																	<div class="grid-img">
																		<img  src="uploads/products/<?php echo $products[$p]['id'].'/'.$productpics[$p][2]; ?>" class="img-responsive" alt="<?php echo $products[$p]['title']; ?>">
																	</div>
																	<div class="grid-img">
																		<img  src="uploads/products/<?php echo $products[$p]['id'].'/'.$productpics[$p][3]; ?>" class="img-responsive" alt="<?php echo $products[$p]['title']; ?>">
																	</div>			
																</a>		
															</figure>	
														</div>
													</div>
												</div>
												<div class="col-md-8 product-tab1-grid1 simpleCart_shelfItem">
													<div class="block">
														<div class="starbox small ghosting"> </div>
													</div>
													<div class="women">
														<h6><a href="product.php?id=<?php echo $products[$p]['id']; ?>"><?php echo $products[$p]['title']; ?></a></h6>
														<!--<span class="size">XL / XXL / S </span>-->
														<p><?php echo $products[$p]['description']; ?></p>
														<p><em class="item_price" dir="rtl"><?php echo $products[$p]['price'].' '.$system['currency']; ?></em>&nbsp;&nbsp;&nbsp;<del dir="rtl"><?php echo $products[$p]['oldprice'].' '.$system['currency']; ?></del></p>
														<a href="product.php?id=<?php echo $products[$p]['id']; ?>" data-text="Add To Cart" class="my-cart-b item_add"><?php language('addtocart'); ?></a>
													</div>
												</div>
												<div class="clearfix"></div>
											</div>
											<?php } ?>
										</div>
									</div>
								</div>
								
								<div class="row">
									<div class="col-sm-8 col-sm-offset-2">			
										<nav>
											<ul class="pagination">
												<?php if($totalPages > 1) { ?><li style="<?php if(!isset($_COOKIE['lang']) || isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') echo 'float:right;'; ?>"><a href="?page=1<?php if(isset($_GET['q'])) { echo '&category='.$_GET['category'].'&q='.$_GET['q']; } ?>"><?php language("first"); ?></a></li><?php } ?>
												<?php if($page > 3) { ?><li style="<?php if(!isset($_COOKIE['lang']) || isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') echo 'float:right;'; ?>">
													<a href="?page=<?php echo $page-2; ?><?php if(isset($_GET['q'])) { echo '&category='.$_GET['category'].'&q='.$_GET['q']; } ?>" aria-label="Next">
														<span aria-hidden="true">&raquo;</span>
													</a>
												</li><?php } ?>
												<?php if($page > 1) { ?><li style="<?php if(!isset($_COOKIE['lang']) || isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') echo 'float:right;'; ?>"><a href="?page=<?php echo $page-1; ?><?php if(isset($_GET['q'])) { echo '&category='.$_GET['category'].'&q='.$_GET['q']; } ?>"><?php echo $page-1; ?></a></li><?php } ?>
												<?php if($totalPages > 1) { ?><li style="<?php if(!isset($_COOKIE['lang']) || isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') echo 'float:right;'; ?>"><a href="?page=<?php echo $page; ?><?php if(isset($_GET['q'])) { echo '&category='.$_GET['category'].'&q='.$_GET['q']; } ?>"><?php echo $page; ?></a></li><?php } ?>
												<?php if($page < $totalPages) { ?><li style="<?php if(!isset($_COOKIE['lang']) || isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') echo 'float:right;'; ?>"><a href="?page=<?php echo $page+1; ?><?php if(isset($_GET['q'])) { echo '&category='.$_GET['category'].'&q='.$_GET['q']; } ?>"><?php echo $page+1; ?></a></li><?php } ?>
												<?php if($page < $totalPages-1) { ?><li style="<?php if(!isset($_COOKIE['lang']) || isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') echo 'float:right;'; ?>">
													<a href="?page=<?php echo $page+2; ?><?php if(isset($_GET['q'])) { echo '&category='.$_GET['category'].'&q='.$_GET['q']; } ?>" aria-label="Previous">
														<span aria-hidden="true">&laquo;</span>
													</a>
												</li><?php } ?>
												<?php if($totalPages > 1) { ?><li style="<?php if(!isset($_COOKIE['lang']) || isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar') echo 'float:right;'; ?>"><a href="?page=<?php echo $totalPages; ?><?php if(isset($_GET['q'])) { echo '&category='.$_GET['category'].'&q='.$_GET['q']; } ?>"><?php language("last"); ?></a></li><?php } ?>
											</ul>
										</nav>
									</div>
								</div>
								<?php } else {  ?><div dir="rtl" <?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'en') echo ' dir="ltr"'; ?>><h3 style="margin-top:55px"><?php language('noproducts'); } ?></h3></div>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
			</div>
		<!--content-->

		<!---footer--->
		<?php include('designs/footer.php'); ?>
		<!---footer--->
</body>
</html>