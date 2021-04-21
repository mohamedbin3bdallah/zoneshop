<div class="row">
	<?php include("../designs/headers/profilemenu.php"); ?>
	<div class="col-md-10 <?php if($lang_file == 'ar') echo 'col-md-pull-2'; ?>">
	<h2><label><?php language('account'); ?></label></h2><br><br>
		<?php
		$account = getAccount($_COOKIE['admin']);
		if(!empty($account))
		{
		?>
		<div class="row">
			<div class="col-md-12">
				<div class="table-responsive">
				<table class="table table-bordered">
					<form enctype="multipart/form-data" method="POST" action="">
					<input type="hidden" name="oldid" value="<?php echo $account['id']; ?>" />				
					<tr>
						<td class="info"><?php language('username'); ?></td>
						<td class="warning"><input type="text" name="username" value="<?php echo $account['username']; ?>" maxlength="100" class="form-control" required="required" /></td>
					</tr>
					<tr>
						<td class="info"><?php language('email'); ?></td>
						<td class="warning"><input type="email" name="email" value="<?php echo $account['email']; ?>" maxlength="100" class="form-control" required="required" /></td>
					</tr>
					<tr>
						<td class="info"><?php language('paypal'); language(' '); language('email'); ?></td>
						<td class="warning"><input type="email" name="paypalemail" value="<?php echo $account['paypalemail']; ?>" maxlength="100" class="form-control" required="required" /></td>
					</tr>
					<tr>
						<td class="info"><?php language('password'); ?></td>
						<td class="warning"><input type="password" name="password" class="form-control" /></td>
					</tr>
					<tr>
						<td class="info"><?php language('cmfpassword'); ?></td>
						<td class="warning"><input type="password" name="cmfpassword" class="form-control" /></td>
					</tr>
					<tr>
						<td class="info"><?php language('company'); ?></td>
						<td class="warning"><input type="text" name="company" value="<?php echo $account['company']; ?>" maxlength="100" class="form-control" required="required" /></td>
					</tr>
					<tr>
						<td class="info"></td>
						<td class="warning"><input type="submit" name="saveaccount" class="btn btn-success" /></td>
					</tr>
					</form>
				</table>
				</div>
			</div>
		</div>

		<?php } else language("nodata"); ?>
	</div>
</div>