				<!---footer--->
					<div class="footer-w3l">
						<div class="container">
							<div class="footer-grids" <?php if(!isset($_COOKIE['lang']) || (isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar')) { ?>dir="rtl"<?php } ?>>
								<div class="col-md-3 <?php if(!isset($_COOKIE['lang']) || (isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar')) echo 'col-md-push-9'; ?> footer-grid">
									<h4><?php language('about'); ?> </h4>
									<p><?php echo $about['vision']; ?></p>
									<div class="social-icon">
										<?php if(isset($contact['facebook']) && $contact['facebook'] != '') { ?><a href="<?php echo $contact['facebook']; ?>" target="_blank"><i class="icon"></i></a><?php } ?>
										<?php if(isset($contact['twitter']) && $contact['twitter'] != '') { ?><a href="<?php echo $contact['twitter']; ?>" target="_blank"><i class="icon1"></i></a><?php } ?>
										<?php if(isset($contact['googleplus']) && $contact['googleplus'] != '') { ?><a href="<?php echo $contact['googleplus']; ?>" target="_blank"><i class="icon2"></i></a><?php } ?>
										<?php if(isset($contact['linkedin']) && $contact['linkedin'] != '') { ?><a href="<?php echo $contact['linkedin']; ?>" target="_blank"><i class="icon3"></i></a><?php } ?>
									</div>
								</div>
								<div class="col-md-3 <?php if(!isset($_COOKIE['lang']) || (isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar')) echo 'col-md-push-3'; ?> footer-grid">
									<h4><?php language('myaccount'); ?></h4>
									<ul>
										<li><a href="checkout.php"><?php language('sales'); ?> </a></li>
										<?php if(!isset($_COOKIE['uid'])) { ?><li><a href="login.php"><?php language('login'); ?> </a></li>
										<li><a href="register.php"><?php language('register'); ?> </a></li>
										<?php } else { ?><li><a href="logout.php"><?php language('logout'); ?> </a></li>
										<?php } ?>
									</ul>
								</div>
								<div class="col-md-3 <?php if(!isset($_COOKIE['lang']) || (isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar')) echo 'col-md-pull-3'; ?> footer-grid">
									<h4><?php language('links'); ?></h4>
									<ul>
										<li><a href="index.php"><?php language('home'); ?></a></li>
										<?php for($i=0;$i<$count;$i++) { ?>
											<li><a href="products.php?category=<?php echo $flcategories[$i]['childto']; ?>&q="><?php echo $flcategories[$i]['title']; ?></a></li>
										<?php } ?>
										<li><a href="products.php"><?php language('products'); ?></a></li>
										<!--<li><a href="about.php"><?php language('about'); ?></a></li>-->
										<li><a href="contact.php"><?php language('contact'); ?></a></li>
									</ul>
								</div>
								<div class="col-md-3 <?php if(!isset($_COOKIE['lang']) || (isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar')) echo 'col-md-pull-9'; ?> footer-grid foot">
									<h4><?php language('address'); ?></h4>
									<ul>
										<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i><?php language(' '); ?><a href="#"><?php echo $contact['address'.$lang_file]; ?></a></li>
										<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><?php language(' '); ?><a href="mailto:<?php echo $contact['email']; ?>"><?php echo $contact['email']; ?></a></li>
										<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i><?php language(' '); ?><a href="#"><?php language('mobile'); language(':'); echo $contact['mobile']; ?></a></li>
										<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i><?php language(' '); ?><a href="#"><?php language('phone'); language(':'); echo $contact['phone']; ?></a></li>
									</ul>
								</div>
							<div class="clearfix"> </div>
							</div>
							
						</div>
					</div>
					<!---footer--->
					<!--copy-->
					<div class="copy-section">
						<div class="container">
							<div class="copy-left">
								<p>&copy 2016 spoot media. All rights reserved | Design by <a target="_blank" href="http://onetrusted.com/">onetrusted</a></p>
							</div>
							<div class="copy-right">
								<img src="images/card.png" alt=""/>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				<!--copy-->