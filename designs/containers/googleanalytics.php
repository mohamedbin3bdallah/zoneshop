<div class="row">
	<?php include("../designs/headers/profilemenu.php"); ?>
	<div class="col-md-10 <?php if($lang_file == 'ar') echo 'col-md-pull-2'; ?>">
	<h2><label><?php language('googleanalytics'); ?></label></h2><br><br>
		<?php
		$googleanalytics = getGoogleAnalytics(1);
		if(!empty($googleanalytics))
		{
		?>
		<div class="row">
			<div class="col-md-12">
				<div class="table-responsive">
				<table class="table table-bordered">
					<form enctype="multipart/form-data" method="POST" action="">
					<input type="hidden" name="oldid" value="<?php echo $googleanalytics['id']; ?>" />				
					<tr>
						<td class="info"><?php language('code'); ?></td>
						<td class="warning"><textarea rows="5" name="code" class="form-control"><?php echo $googleanalytics['code']; ?></textarea></td>
					</tr>
					<tr>
						<td class="info"></td>
						<td class="warning"><input type="submit" name="savegoogleanalytics" class="btn btn-success" /></td>
					</tr>
					</form>
				</table>
				</div>
			</div>
		</div>

		<?php } else language("nodata"); ?>
	</div>
</div>