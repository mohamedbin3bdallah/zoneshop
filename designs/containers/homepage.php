<div class="row">
	<?php include("../designs/headers/profilemenu.php"); ?>
	<div class="col-md-10 <?php if($lang_file == 'ar') echo 'col-md-pull-2'; ?>">
	<h2><label><?php language('home'); ?></label></h2><br><br>
		
	<?php $slider = array_diff(scandir('../uploads/slider'), array('.','..')); ?>
	<?php if(!empty($slider)) { ?>
		<div class="row">
			<?php for($sl=2;$sl<count($slider)+2;$sl++) { ?>
				<div id="sliderimgdel-<?php echo $sl; ?>" class="col-md-2">
					<a href="#" data-toggle="modal" data-target="#sliderimage-<?php echo $sl; ?>">
						<img class="img-responsive" src="../uploads/slider/<?php echo $slider[$sl]; ?>" style="height:95px;">
					</a>
					<i id="<?php echo $sl;?>" path="../uploads/slider/<?php echo $slider[$sl]; ?>" thpath="../uploads/slider/thumbnail/<?php echo $slider[$sl]; ?>" style="color:red;" class="sliderimgdel glyphicon glyphicon-remove-circle"></i>
				</div>
				<div id="sliderimage-<?php echo $sl; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<br>
        					</div>
							<div class="modal-body">
								<img src="../uploads/slider/<?php echo $slider[$sl]; ?>" class="img-responsive">
							</div>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
	<?php } ?>
	
	<div class="row">
		<div class="fileUpload btn btn-primary">
			<span><?php language("changeimage"); ?></span>
			<form enctype="multipart/form-data"  action="" method="POST"><input type="file" name="slider[]" class="upload list-label" onchange="this.form.submit();" multiple /></form>
		</div>
	</div>
	<br><br>
	
	<!--<h4><label style="color: #0c5d97;"><?php language('values'); ?></label></h4>
		<?php
		$values = getValues();
		if(!empty($values))
		{
		?>
		<div class="row">
			<div class="col-md-12">
				<div class="table-responsive">
				<table class="table table-bordered">
					<tr class="danger">						
						<td><?php language('en').language(' ').language('title'); ?></td>
						<td><?php language('ar').language(' ').language('title'); ?></td>
						<td><?php language('en').language(' ').language('description'); ?></td>
						<td><?php language('ar').language(' ').language('description'); ?></td>
						<td><?php language('image'); ?></td>
						<td><?php language('newimage'); ?></td>
						<td></td>
					</tr>				
				<?php for($i=0;$i<sizeof($values);$i++) { ?>
					<form enctype="multipart/form-data" method="POST" action="">
					<tr class="warning" id="tr-<?php echo $values[$i]['id']; ?>">
						<td><input type="text" name="titleen" value="<?php echo $values[$i]['titleen']; ?>" maxlength="255" class="form-control" required="required" /></td>
						<td><input type="text" name="titlear" value="<?php echo $values[$i]['titlear']; ?>" maxlength="255" class="form-control" required="required" /></td>
						<td><input type="text" name="descriptionen" value="<?php echo $values[$i]['descriptionen']; ?>" maxlength="255" class="form-control" required="required" /></td>
						<td><input type="text" name="descriptionar" value="<?php echo $values[$i]['descriptionar']; ?>" maxlength="255" class="form-control" required="required" /></td>
						<td>
						<?php if($values[$i]['image'] != '') { ?>
							<a href="#" data-toggle="modal" data-target="#values-<?php echo $i; ?>">
								<img class="img-responsive" src="../uploads/values/<?php echo $values[$i]['image']; ?>" style="width:75px;">
							</a>
							<div id="values-<?php echo $i; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<br>
        								</div>
										<div class="modal-body">
											<img src="../uploads/values/<?php echo $values[$i]['image']; ?>" class="img-responsive">
										</div>
									</div>
								</div>
							</div>
						<?php } ?>
						</td>						
						<td>
							<input type="hidden" name="oldimage" value="<?php echo $values[$i]['image']; ?>" />
							<input type="hidden" name="oldid" value="<?php echo $values[$i]['id']; ?>" />
							<div class="fileUpload btn btn-primary">
								<span><?php language("changeimage"); ?></span>									
								<input type="file" name="value" class="upload list-label" <?php if($values[$i]['image'] != '') { ?>required="required" <?php } ?>/>
							</div>
						</td>
						<td><input type="submit" name="savevalue" class="btn btn-success" /></td>
					</tr>
					</form>					
				<?php } ?>				
				</table>
				</div>
			</div>
		</div>

		<?php } else language("nodata"); ?>-->
	</div>
</div>