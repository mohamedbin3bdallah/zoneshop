<div class="row">
	<?php include("../designs/headers/profilemenu.php"); ?>
	<div class="col-md-10 <?php if($lang_file == 'ar') echo 'col-md-pull-2'; ?>">
	<h2><label><?php language('advertisements'); ?></label></h2><br><br>
		<div class="row">
			<div class="col-md-12">
				<div class="table-responsive">
				<table class="table table-bordered">
					<form enctype="multipart/form-data" method="POST" action="">
					<tr>
						<td class="info"><?php language('top'); ?></td>
						<td class="warning"><input type="file" name="top" class="form-control" />728x90</td>
						<td class="warning"><input type="hidden" name="topid" value="<?php echo $ads['top']['id']; ?>" /><input type="text" name="toplink" value="<?php echo $ads['top']['link']; ?>" class="form-control" /></td>
						<td class="warning">
							<?php
							$top = array_diff(scandir('../uploads/advertisements/top'), array('.','..'));
							if(isset($top[2])) { 
							?>
								<img class="img-responsive" src="../uploads/advertisements/top/<?php echo $top[2]; ?>">
							<?php } ?>
						</td>
						<td class="warning"><?php if(isset($top[2])) { ?><a href="advertisements.php?del=top&id=<?php echo $ads['top']['id']; ?>"><?php language('delete'); ?></a><?php } ?></td>
					</tr>
					<tr>
						<td class="info"><?php language('left'); ?></td>
						<td class="warning"><input type="file" name="left" class="form-control" />300x600</td>
						<td class="warning"><input type="hidden" name="leftid" value="<?php echo $ads['left']['id']; ?>" /><input type="text" name="leftlink" value="<?php echo $ads['left']['link']; ?>" class="form-control" /></td>
						<td class="warning">
							<?php
							$left = array_diff(scandir('../uploads/advertisements/left'), array('.','..'));
							if(isset($left[2])) {
							?>
								<img class="img-responsive" src="../uploads/advertisements/left/<?php echo $left[2]; ?>">
							<?php } ?>
						</td>
						<td class="warning"><?php if(isset($left[2])) { ?><a href="advertisements.php?del=left&id=<?php echo $ads['left']['id']; ?>"><?php language('delete'); ?></a><?php } ?></td>
					</tr>
					<tr>
						<td class="info"></td>
						<td class="warning"><input type="submit" name="saveadvertisements" class="btn btn-success" /></td>
						<td class="warning"></td>
						<td class="warning"></td>
					</tr>
					</form>
				</table>
				</div>
			</div>
		</div>
	</div>
</div>