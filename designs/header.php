			<?php if(!isset($_COOKIE['lang']) || (isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar')) { ?>
			<div class="header-top">
				<div class="container">
					 <div class="top-left">
						<?php if($contact['phone'] != '') { ?><a href="#"><?php language('admin'); ?><i class="glyphicon glyphicon-phone" aria-hidden="true"></i> <?php echo $contact['phone']; ?></a><?php } ?>
					</div>
					<div class="top-right">
					<ul>
						<li><a href="lang.php?lang=en&<?php echo basename($_SERVER['REQUEST_URI']); ?>">English </a></li>
						<li><a href="checkout.php"><?php language('sales'); ?> </a></li>
						<?php if(!isset($_COOKIE['uid'])) { ?><li><a href="register.php"><?php language('register'); ?> </a></li>
						<li><a href="login.php"><?php language('login'); ?> </a></li>
						<?php } else { ?><li><a href="logout.php"><?php language('logout'); ?> </a></li>
						<?php } ?>
					</ul>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="heder-bottom">
				<div class="container">
					<div class="logo-nav">
						<div class="logo-nav-left">
							<h1><a href="index.php"><!--<img class="img-responsive" src="uploads/<?php echo $system['logo']; ?>" style="max-width:9%;">--><?php echo $system['websitename']; ?> <span>تسوق من اي مكان</span></a></h1>
						</div>
						<div class="logo-nav-left1">
							<nav class="navbar navbar-default">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header nav_2">
								<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div> 
							<div class="collapse navbar-collapse" id="bs-megadropdown-tabs" dir="rtl">
								<?php if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$_SERVER['HTTP_USER_AGENT'])||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($_SERVER['HTTP_USER_AGENT'],0,4))) { ?>
								<ul class="nav navbar-nav">
									<!-- Mega Menu -->
									<li class="active"><a href="index.php" class="act"><?php language('home'); ?></a></li>	
									
									<?php if(count($flcategories) < 4) $count = count($flcategories); else $count = 3; for($i=0;$i<$count;$i++) { ?>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $flcategories[$i]['title']; ?> <b class="caret"></b></a>
										<?php
										$mlcategories = getMLevelCategories($flcategories[$i]['childto'],$lang_file);
										if(!empty($mlcategories))
										{
										?>
										<ul class="dropdown-menu multi-column columns-3">
											<div class="row">
												<div class="col-sm-3  multi-gd-img">
													<ul class="multi-column-dropdown">
														<!--<h6>الملابس</h6>-->
														<?php for($j=0;$j<count($mlcategories)/2;$j++) { ?>
															<li><a href="products.php?category=<?php echo $mlcategories[$j]['childto']; ?>&q="><?php echo $mlcategories[$j]['title']; ?></a></li>
														<?php } ?>
													</ul>
												</div>
												<div class="col-sm-3  multi-gd-img">
													<ul class="multi-column-dropdown">
														<!--<h6>الأكسسوارات</h6>-->
														<?php for($j=(count($mlcategories)/2);$j<count($mlcategories);$j++) { ?>
															<li><a href="products.php?category=<?php echo $mlcategories[$j]['childto']; ?>&q="><?php echo $mlcategories[$j]['title']; ?></a></li>
														<?php } ?>
													</ul>
												</div>
												<div class="col-sm-6  multi-gd-img">
														<a href="products.php?category=<?php echo $flcategories[$i]['childto']; ?>&q=">
														<?php if(is_dir('uploads/categories/'.$flcategories[$i]['id'])) { $image[$i] = array_diff(scandir('uploads/categories/'.$flcategories[$i]['id']), array('.','..')); ?>
															<img src="uploads/categories/<?php echo $flcategories[$i]['id']; ?>/<?php echo $image[$i][2]; ?>" alt="<?php echo $flcategories[$i]['title']; ?>"/>
														<?php } ?>
														</a>
												</div> 
												<!--<div class="col-sm-3  multi-gd-img">
														<a href="products.html"><img src="images/woo1.jpg" alt=" "/></a>
												</div>-->
												<div class="clearfix"></div>
											</div>
										</ul>
										<?php } ?>
									</li>
									<?php } ?>
									
									<li><a href="products.php"><?php language('products'); ?></a></li>
									<li><a href="orders.php"><?php language('orders'); ?></a></li>
									<li><a href="about.php"><?php language('about'); ?></a></li>
									<li><a href="contact.php"><?php language('contact'); ?></a></li>
									<?php if(isset($_COOKIE['admin'])) { ?><li><a href="pages/account.php"><?php language('administrator'); ?></a></li><?php } ?>
								</ul>
								<?php } else { ?>
								<ul class="nav navbar-nav">
									<!-- Mega Menu -->
									<?php if(isset($_COOKIE['admin'])) { ?><li><a href="pages/account.php"><?php language('administrator'); ?></a></li><?php } ?>
									<li><a href="contact.php"><?php language('contact'); ?></a></li>
									<li><a href="about.php"><?php language('about'); ?></a></li>
									<li><a href="orders.php"><?php language('orders'); ?></a></li>
									<li><a href="products.php"><?php language('products'); ?></a></li>
									
									<?php if(count($flcategories) < 4) $count = count($flcategories); else $count = 3; for($i=0;$i<$count;$i++) { ?>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $flcategories[$i]['title']; ?> <b class="caret"></b></a>
										<?php
										$mlcategories = getMLevelCategories($flcategories[$i]['childto'],$lang_file);
										if(!empty($mlcategories))
										{
										?>
										<ul class="dropdown-menu multi-column columns-3">
											<div class="row">
												<div class="col-sm-3  multi-gd-img">
													<ul class="multi-column-dropdown">
														<!--<h6>الملابس</h6>-->
														<?php for($j=0;$j<count($mlcategories)/2;$j++) { ?>
															<li><a href="products.php?category=<?php echo $mlcategories[$j]['childto']; ?>&q="><?php echo $mlcategories[$j]['title']; ?></a></li>
														<?php } ?>
													</ul>
												</div>
												<div class="col-sm-3  multi-gd-img">
													<ul class="multi-column-dropdown">
														<!--<h6>الأكسسوارات</h6>-->
														<?php for($j=(count($mlcategories)/2);$j<count($mlcategories);$j++) { ?>
															<li><a href="products.php?category=<?php echo $mlcategories[$j]['childto']; ?>&q="><?php echo $mlcategories[$j]['title']; ?></a></li>
														<?php } ?>
													</ul>
												</div>
												<div class="col-sm-6  multi-gd-img">
														<a href="products.php?category=<?php echo $flcategories[$i]['childto']; ?>&q=">
														<?php if(is_dir('uploads/categories/'.$flcategories[$i]['id'])) { $image[$i] = array_diff(scandir('uploads/categories/'.$flcategories[$i]['id']), array('.','..')); ?>
															<img src="uploads/categories/<?php echo $flcategories[$i]['id']; ?>/<?php echo $image[$i][2]; ?>" alt="<?php echo $flcategories[$i]['title']; ?>"/>
														<?php } ?>
														</a>
												</div> 
												<!--<div class="col-sm-3  multi-gd-img">
														<a href="products.html"><img src="images/woo1.jpg" alt=" "/></a>
												</div>-->
												<div class="clearfix"></div>
											</div>
										</ul>
										<?php } ?>
									</li>
									<?php } ?>
									
									<li class="active"><a href="index.php" class="act"><?php language('home'); ?></a></li>	
								</ul>
								<?php } ?>
							</div>
							</nav>
						</div>
						<div class="logo-nav-right">
							<ul class="cd-header-buttons">
								<li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
							</ul> <!-- cd-header-buttons -->
							<div id="cd-search" class="cd-search" <?php if(!isset($_COOKIE['lang']) || (isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar')) { ?>dir="rtl"<?php } ?>>
								<form action="products.php" method="GET">
									<!--<input name="Search" type="search" placeholder="بحث...">-->
									<input type="hidden" name="category" value="<?php if(isset($_GET['category'])) echo $_GET['category']; ?>">
									<input type="text" name="q" placeholder="<?php language('search'); ?>...">
								</form>
							</div>	
						</div>
						<div class="header-right2">
							<div class="cart box_1">
								<a href="checkout.php">
									<h3> <div class="total">
										<span class="/*simpleCart_total*/"><?php if(isset($_COOKIE['uid'])) echo str_replace($western_arabic, $eastern_arabic, getUserCartTotal($_COOKIE['uid'])); else echo str_replace($western_arabic, $eastern_arabic, getCartTotal($ipaddress)); echo ' '.$system['currency']; ?></span> <!--(<span id="simpleCart_quantity" class="simpleCart_quantity"></span> منتج)--></div>
										<img src="images/bag.png" alt="" />
									</h3>
								</a>
								<!--<p><a href="javascript:;" class="simpleCart_empty">محفظة فارغة</a></p>-->
								<div class="clearfix"> </div>
							</div>	
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
			<?php } else { ?>
			<div class="header-top">
				<div class="container">
					<div class="top-left" style="float:right;">
						<?php if($contact['phone'] != '') { ?><a href="#"><?php language('admin'); ?><i class="glyphicon glyphicon-phone" aria-hidden="true"></i> <?php echo $contact['phone']; ?></a><?php } ?>
					</div>
					<div class="top-right" style="float:left;">
					<ul>
						<?php if(!isset($_COOKIE['uid'])) { ?><li><a href="login.php"><?php language('login'); ?> </a></li>
						<li><a href="register.php"><?php language('register'); ?> </a></li>
						<?php } else { ?><li><a href="logout.php"><?php language('logout'); ?> </a></li>
						<?php } ?>
						<li><a href="checkout.php"><?php language('sales'); ?> </a></li>
						<li><a href="lang.php?lang=ar&<?php echo basename($_SERVER['REQUEST_URI']); ?>">عربي </a>
					</ul>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="heder-bottom">
				<div class="container">
					<div class="logo-nav">
						<div class="logo-nav-left" style="float:left;">
							<h1><a href="index.php"><!--<img class="img-responsive" src="uploads/<?php echo $system['logo']; ?>" style="max-width:9%;">--><?php echo $system['websitename']; ?> <span>تسوق من اي مكان</span></a></h1>
						</div>
						<div class="logo-nav-left1" style="float:left;">
							<nav class="navbar navbar-default">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header nav_2">
								<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div> 
							<div class="collapse navbar-collapse" id="bs-megadropdown-tabs" dir="rtl">
								<?php if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$_SERVER['HTTP_USER_AGENT'])||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($_SERVER['HTTP_USER_AGENT'],0,4))) { ?>
								<ul class="nav navbar-nav">
									<!-- Mega Menu -->
									<li class="active"><a href="index.php" class="act"><?php language('home'); ?></a></li>	
									
									<?php if(count($flcategories) < 4) $count = count($flcategories); else $count = 3; for($i=0;$i<$count;$i++) { ?>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $flcategories[$i]['title']; ?> <b class="caret"></b></a>
										<?php
										$mlcategories = getMLevelCategories($flcategories[$i]['childto'],$lang_file);
										if(!empty($mlcategories))
										{
										?>
										<ul class="dropdown-menu multi-column columns-3">
											<div class="row">
												<div class="col-sm-3  multi-gd-img">
													<ul class="multi-column-dropdown">
														<!--<h6>الملابس</h6>-->
														<?php for($j=0;$j<count($mlcategories)/2;$j++) { ?>
															<li><a href="products.php?category=<?php echo $mlcategories[$j]['childto']; ?>&q="><?php echo $mlcategories[$j]['title']; ?></a></li>
														<?php } ?>
													</ul>
												</div>
												<div class="col-sm-3  multi-gd-img">
													<ul class="multi-column-dropdown">
														<!--<h6>الأكسسوارات</h6>-->
														<?php for($j=(count($mlcategories)/2);$j<count($mlcategories);$j++) { ?>
															<li><a href="products.php?category=<?php echo $mlcategories[$j]['childto']; ?>&q="><?php echo $mlcategories[$j]['title']; ?></a></li>
														<?php } ?>
													</ul>
												</div>
												<div class="col-sm-6  multi-gd-img">
														<a href="products.php?category=<?php echo $flcategories[$i]['childto']; ?>&q=">
														<?php if(is_dir('uploads/categories/'.$flcategories[$i]['id'])) { $image[$i] = array_diff(scandir('uploads/categories/'.$flcategories[$i]['id']), array('.','..')); ?>
															<img src="uploads/categories/<?php echo $flcategories[$i]['id']; ?>/<?php echo $image[$i][2]; ?>" alt="<?php echo $flcategories[$i]['title']; ?>"/>
														<?php } ?>
														</a>
												</div> 
												<!--<div class="col-sm-3  multi-gd-img">
														<a href="products.html"><img src="images/woo1.jpg" alt=" "/></a>
												</div>-->
												<div class="clearfix"></div>
											</div>
										</ul>
										<?php } ?>
									</li>
									<?php } ?>
									
									<li><a href="products.php"><?php language('products'); ?></a></li>
									<li><a href="orders.php"><?php language('orders'); ?></a></li>
									<li><a href="about.php"><?php language('about'); ?></a></li>
									<li><a href="contact.php"><?php language('contact'); ?></a></li>
									<?php if(isset($_COOKIE['admin'])) { ?><li><a href="pages/account.php"><?php language('administrator'); ?></a></li><?php } ?>
								</ul>
								<?php } else { ?>
								<ul class="nav navbar-nav">
									<!-- Mega Menu -->
									<li class="active"><a href="index.php" class="act"><?php language('home'); ?></a></li>	
									<?php if(count($flcategories) < 4) $count = count($flcategories); else $count = 3; for($i=0;$i<$count;$i++) { ?>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $flcategories[$i]['title']; ?> <b class="caret"></b></a>
										<?php
										$mlcategories = getMLevelCategories($flcategories[$i]['childto'],$lang_file);
										if(!empty($mlcategories))
										{
										?>
										<ul class="dropdown-menu multi-column columns-3">
											<div class="row">
												<div class="col-sm-3  multi-gd-img">
													<ul class="multi-column-dropdown">
														<!--<h6>الملابس</h6>-->
														<?php for($j=0;$j<count($mlcategories)/2;$j++) { ?>
															<li><a href="products.php?category=<?php echo $mlcategories[$j]['childto']; ?>&q="><?php echo $mlcategories[$j]['title']; ?></a></li>
														<?php } ?>
													</ul>
												</div>
												<div class="col-sm-3  multi-gd-img">
													<ul class="multi-column-dropdown">
														<!--<h6>الأكسسوارات</h6>-->
														<?php for($j=(count($mlcategories)/2);$j<count($mlcategories);$j++) { ?>
															<li><a href="products.php?category=<?php echo $mlcategories[$j]['childto']; ?>&q="><?php echo $mlcategories[$j]['title']; ?></a></li>
														<?php } ?>
													</ul>
												</div>
												<div class="col-sm-6  multi-gd-img">
														<a href="products.php?category=<?php echo $flcategories[$i]['childto']; ?>&q=">
														<?php if(is_dir('uploads/categories/'.$flcategories[$i]['id'])) { $image[$i] = array_diff(scandir('uploads/categories/'.$flcategories[$i]['id']), array('.','..')); ?>
															<img src="uploads/categories/<?php echo $flcategories[$i]['id']; ?>/<?php echo $image[$i][2]; ?>" alt="<?php echo $flcategories[$i]['title']; ?>"/>
														<?php } ?>
														</a>
												</div> 
												<!--<div class="col-sm-3  multi-gd-img">
														<a href="products.html"><img src="images/woo1.jpg" alt=" "/></a>
												</div>-->
												<div class="clearfix"></div>
											</div>
										</ul>
										<?php } ?>
									</li>
									<?php } ?>
									<li><a href="products.php"><?php language('products'); ?></a></li>
									<li><a href="orders.php"><?php language('orders'); ?></a></li>
									<li><a href="about.php"><?php language('about'); ?></a></li>
									<li><a href="contact.php"><?php language('contact'); ?></a></li>
									<?php if(isset($_COOKIE['admin'])) { ?><li><a href="pages/account.php"><?php language('administrator'); ?></a></li><?php } ?>
								</ul>
								<?php } ?>
							</div>
							</nav>
						</div>
						<div class="logo-nav-right">
							<ul class="cd-header-buttons1">
								<li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
							</ul> <!-- cd-header-buttons -->
							<div id="cd-search" class="cd-search" <?php if(!isset($_COOKIE['lang']) || (isset($_COOKIE['lang']) && $_COOKIE['lang'] == 'ar')) { ?>dir="rtl"<?php } ?>>
								<form action="products.php" method="GET">
									<!--<input name="Search" type="search" placeholder="بحث...">-->
									<input type="hidden" name="category" value="<?php if(isset($_GET['category'])) echo $_GET['category']; ?>">
									<input type="text" name="q" placeholder="<?php language('search'); ?>...">
								</form>
							</div>	
						</div>
						<div class="header-right2" style="float:right;">
							<div class="cart box_1">
								<a href="checkout.php">
									<h3> <div class="total">
										<span class="/*simpleCart_total*/"><?php if(isset($_COOKIE['uid'])) echo str_replace($western_arabic, $eastern_arabic, getUserCartTotal($_COOKIE['uid'])); else echo str_replace($western_arabic, $eastern_arabic, getCartTotal($ipaddress)); echo ' '.$system['currency']; ?></span> <!--(<span id="simpleCart_quantity" class="simpleCart_quantity"></span> منتج)--></div>
										<img src="images/bag.png" alt="" />
									</h3>
								</a>
								<!--<p><a href="javascript:;" class="simpleCart_empty">محفظة فارغة</a></p>-->
								<div class="clearfix"> </div>
							</div>	
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
			<?php } ?>