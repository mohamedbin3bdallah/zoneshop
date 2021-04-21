<div class="row">
	<?php include("../designs/headers/profilemenu.php"); ?>
	<div class="col-md-10 <?php if($lang_file == 'ar') echo 'col-md-pull-2'; ?>">
	<h2><label><?php language('contact'); ?></label></h2><br><br>
		<?php
		$contact = getContact();
		if(!empty($contact))
		{
		?>
		<div class="row">
			<div class="col-md-12">
				<div class="table-responsive">
				<table class="table table-bordered">
					<form enctype="multipart/form-data" method="POST" action="">
					<input type="hidden" name="oldid" value="<?php echo $contact['id']; ?>" />				
					<tr>
						<td class="info"><?php language('mobile'); ?></td>
						<td class="warning"><input type="text" name="mobile" value="<?php echo $contact['mobile']; ?>" class="form-control" /></td>
					</tr>
					<tr>
						<td class="info"><?php language('phone'); ?></td>
						<td class="warning"><input type="text" name="phone" value="<?php echo $contact['phone']; ?>" class="form-control" /></td>
					</tr>
					<tr>
						<td class="info"><?php language('email'); ?></td>
						<td class="warning"><input type="email" name="email" value="<?php echo $contact['email']; ?>" maxlength="100" class="form-control" /></td>
					</tr>
					<tr>
						<td class="info"><?php language('en'); language(' '); language('address'); ?></td>
						<td class="warning"><input type="text" name="addressen" value="<?php echo $contact['addressen']; ?>" class="form-control" /></td>
					</tr>
					<tr>
						<td class="info"><?php language('ar'); language(' '); language('address'); ?></td>
						<td class="warning"><input type="text" name="addressar" value="<?php echo $contact['addressar']; ?>" class="form-control" /></td>
					</tr>
					<tr>
						<td class="info"><?php language('facebook'); ?></td>
						<td class="warning"><input type="url" name="facebook" value="<?php echo $contact['facebook']; ?>" maxlength="250" class="form-control" /></td>
					</tr>
					<tr>
						<td class="info"><?php language('twitter'); ?></td>
						<td class="warning"><input type="url" name="twitter" value="<?php echo $contact['twitter']; ?>" maxlength="250" class="form-control" /></td>
					</tr>					
					<tr>
						<td class="info"><?php language('googleplus'); ?></td>
						<td class="warning"><input type="url" name="googleplus" value="<?php echo $contact['googleplus']; ?>" maxlength="250" class="form-control" /></td>
					</tr>
					<tr>
						<td class="info"><?php language('linkedin'); ?></td>
						<td class="warning"><input type="url" name="linkedin" value="<?php echo $contact['linkedin']; ?>" maxlength="250" class="form-control" /></td>
					</tr>
					<tr>
						<td class="info"></td>
						<td class="warning"><input type="submit" name="savecontact" class="btn btn-success" /></td>
					</tr>
					</form>
				</table>
				</div>
			</div>
		</div>

		<?php } else language("nodata"); ?>
	</div>
</div>