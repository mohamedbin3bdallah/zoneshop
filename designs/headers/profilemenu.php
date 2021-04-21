<link rel="stylesheet" href="../css/profile.css">
<script type="text/javascript" src="../js/profilemenu.js"></script>
	<div class="col-md-2 <?php if($lang_file == 'ar') echo 'col-md-push-10'; ?>">
		<center>
			<div class="portlet">
				<div class="portlet-body">
					<div class="tabbable">
						<div class="tab-content no-space">
							<div class="form-body">
							<?php if(isset($_COOKIE['admin']) && $_COOKIE['admin'] == 1) { ?>
								<div class="form-group">
									<label class="col-md-12 control-label list-label"><!--<i class="glyphicon glyphicon-option-horizontal"></i>--><a href="../pages/homepage.php"><?php language(" ").language("home"); ?></a></label>
								</div>
								<div class="form-group">
									<label class="col-md-12 control-label list-label"><!--<i class="glyphicon glyphicon-option-horizontal"></i>--><a href="../pages/googleanalytics.php"><?php language(" ").language("googleanalytics"); ?></a></label>
								</div>
								<!--<div class="form-group">-->
									<!--<label class="col-md-12 control-label list-label">--><!--<i class="glyphicon glyphicon-option-horizontal"></i>--><!--<a href="../pages/advertisements.php"><?php //language(" ").language("advertisements"); ?></a></label>-->
								<!--</div>-->
								<div class="form-group">
									<label class="col-md-12 control-label list-label"><!--<i class="glyphicon glyphicon-option-horizontal"></i>--><a href="../pages/cities.php"><?php language(" ").language("cities"); ?></a></label>
								</div>
								<div class="form-group">
									<label class="col-md-12 control-label list-label"><!--<i class="glyphicon glyphicon-option-horizontal"></i>--><a href="../pages/system.php"><?php language(" ").language("system"); ?></a></label>
								</div>
								<div class="form-group">
									<label class="col-md-12 control-label list-label"><!--<i class="glyphicon glyphicon-option-horizontal"></i>--><a href="../pages/admins.php"><?php language(" ").language("dealers"); ?></a></label>
								</div>
								<div class="form-group">
									<label class="col-md-12 control-label list-label"><!--<i class="glyphicon glyphicon-option-horizontal"></i>--><a href="../pages/users.php"><?php language(" ").language("users"); ?></a></label>
								</div>
								<div class="form-group">
									<label class="col-md-12 control-label list-label"><!--<i class="glyphicon glyphicon-option-horizontal"></i>--><a href="../pages/about.php"><?php language(" ").language("about"); ?></a></label>
								</div>
								<div class="form-group">
									<label class="col-md-12 control-label list-label"><!--<i class="glyphicon glyphicon-option-horizontal"></i>--><a href="../pages/pages.php"><?php language(" ").language("pages"); ?></a></label>
								</div>
								<div class="form-group">
									<label class="col-md-12 control-label list-label"><!--<i class="glyphicon glyphicon-option-horizontal"></i>--><a href="../pages/categories.php"><?php language(" ").language("categories"); ?></a></label>
								</div>
								<div class="form-group">
									<label class="col-md-12 control-label list-label"><!--<i class="glyphicon glyphicon-option-horizontal"></i>--><a href="../pages/products.php"><?php language(" ").language("products"); ?></a></label>
								</div>
								<div class="form-group">
									<label class="col-md-12 control-label list-label"><!--<i class="glyphicon glyphicon-option-horizontal"></i>--><a href="../pages/sales.php"><?php language(" ").language("sales"); ?></a></label>
								</div>
								<div class="form-group">
									<label class="col-md-12 control-label list-label"><!--<i class="glyphicon glyphicon-option-horizontal"></i>--><a href="../pages/contact.php"><?php language(" ").language("contact"); ?></a></label>
								</div>
								<div class="form-group">
									<label class="col-md-12 control-label list-label"><!--<i class="glyphicon glyphicon-user"></i><i class="glyphicon glyphicon-user"></i>--><a href="../pages/account.php"><?php language(" ").language("account"); ?></a></label>
								</div>
								<div class="form-group">
									<label class="col-md-12 control-label list-label"><!--<i class="glyphicon glyphicon-user"></i><i class="glyphicon glyphicon-user"></i>--><a href="../adminlogout.php"><?php language(" ").language("logout"); ?></a></label>
								</div>
							<?php } else { ?>
								<div class="form-group">
									<label class="col-md-12 control-label list-label"><!--<i class="glyphicon glyphicon-option-horizontal"></i>--><a href="../pages/cproducts.php"><?php language(" ").language("products"); ?></a></label>
								</div>
								<div class="form-group">
									<label class="col-md-12 control-label list-label"><!--<i class="glyphicon glyphicon-user"></i><i class="glyphicon glyphicon-user"></i>--><a href="../pages/account.php"><?php language(" ").language("account"); ?></a></label>
								</div>
								<div class="form-group">
									<label class="col-md-12 control-label list-label"><!--<i class="glyphicon glyphicon-user"></i><i class="glyphicon glyphicon-user"></i>--><a href="../adminlogout.php"><?php language(" ").language("logout"); ?></a></label>
								</div>
							<?php } ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		<center>
	</div>