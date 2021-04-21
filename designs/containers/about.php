<div class="row">
	<?php include("../designs/headers/profilemenu.php"); ?>
	<div class="col-md-10 <?php if($lang_file == 'ar') echo 'col-md-pull-2'; ?>">
	<h2><label><?php language('about'); ?></label></h2><br><br>
		<?php
		$about = getAbout();
		if(!empty($about))
		{
		?>
		<div class="row">
			<div class="col-md-12">
				<div class="table-responsive">
				<table class="table table-bordered">
					<form enctype="multipart/form-data" method="POST" action="">
					<input type="hidden" name="oldid" value="<?php echo $about['id']; ?>" />				
					<tr>
						<td class="info"><?php language('en').language(' ').language('vision'); ?></td>
						<td class="warning"><textarea rows="5" name="visionen" class="form-control" required><?php echo $about['visionen']; ?></textarea></td>
					</tr>
					<tr>
						<td class="info"><?php language('ar').language(' ').language('vision'); ?></td>
						<td class="warning"><textarea rows="5" name="visionar" class="form-control" required><?php echo $about['visionar']; ?></textarea></td>
					</tr>
					<tr>
						<td class="info"><?php language('en').language(' ').language('mission'); ?></td>
						<td class="warning"><textarea rows="5" name="missionen" class="form-control" required><?php echo $about['missionen']; ?></textarea></td>
					</tr>
					<tr>
						<td class="info"><?php language('ar').language(' ').language('mission'); ?></td>
						<td class="warning"><textarea rows="5" name="missionar" class="form-control" required><?php echo $about['missionar']; ?></textarea></td>
					</tr>
					<tr>
						<td class="info"></td>
						<td class="warning"><input type="submit" name="saveabout" class="btn btn-success" /></td>
					</tr>
					</form>
				</table>
				</div>
			</div>
		</div>

		<?php } else language("nodata"); ?>
	</div>
</div>