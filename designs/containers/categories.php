<div class="row">
	<?php include("../designs/headers/profilemenu.php"); ?>
	<div class="col-md-10 <?php if($lang_file == 'ar') echo 'col-md-pull-2'; ?>">
	<h2><label><?php language('categories'); ?></label></h2><br><br>
	
		<h4><label style="color: #0c5d97;"><?php language('newcategory'); ?></label></h4>
		<div class="row">
			<div class="col-md-12">
				<div class="table-responsive">
				<form enctype="multipart/form-data" method="POST" action="">
				<?php if(isset($_GET['oldid']) && $_GET['oldid'] != '') { ?><input type="hidden" name="oldid" value="<?php echo $_GET['oldid']; ?>" /><?php } ?>
				<?php if(isset($_GET['id']) && $_GET['id'] != '') { ?><input type="hidden" name="parents" value="<?php echo $_GET['id']; ?>" /><?php } ?>
				<table class="table table-bordered">
					<tr>
						<td class="info"><?php language('en'); language(' '); language('title'); ?></td>
						<td class="warning"><input type="text" name="titleen" value="<?php if(isset($_GET['titleen'])) echo $_GET['titleen']; ?>" maxlength="100" class="form-control" required="required" /></td>
					</tr>
					<tr>
						<td class="info"><?php language('ar'); language(' '); language('title'); ?></td>
						<td class="warning"><input type="text" name="titlear" value="<?php if(isset($_GET['titlear'])) echo $_GET['titlear']; ?>" maxlength="100" class="form-control" required="required" /></td>
					</tr>
					<?php if(isset($_GET['oldid']) && $_GET['oldid'] != '') { ?>
						<tr>
							<td class="info"></td>
							<td class="warning">
								<?php if(is_dir('../uploads/categories/'.$_GET['oldid'])) { $oldimage = array_diff(scandir('../uploads/categories/'.$_GET['oldid']), array('.','..')); ?>			
								<img class="img-responsive" src="../uploads/categories/<?php echo $_GET['oldid']; ?>/<?php echo $oldimage[2]; ?>" width="30%"><?php } ?>
							</td>
						</tr>
					<?php } ?>
					<tr>
						<td class="info"><?php language('image'); ?></td>
						<td class="warning"><input type="file" name="file" class="form-control" <?php if(!isset($oldimage[2])) echo 'required'; ?> /></td>
					</tr>
					<tr>
						<td class="info"></td>
						<td class="warning"><input type="submit" name="savecategory" class="btn btn-success" /></td>
					</tr>
				</table>
				</form>
				</div>
			</div>
		</div>
	
	<br><br><h4><label style="color: #0c5d97;"><?php language('categories'); ?></label></h4>
		<?php
		if(!isset($_GET['id']) || $_GET['id'] == '')
		{
			$categories = getAllCategories($startResults,$resultsPerPage);
			$no = 0;
		}
		else
		{
			$categories = getCategories($_GET['id'],$startResults,$resultsPerPage);
			$no = substr_count($_GET['id'], ',')+1;
		}
		
		if(!empty($categories))
		{
		?>
		<div class="row">
			<div class="col-md-12">
				<div class="table-responsive">
				<table class="table table-bordered">
					<tr class="danger">
						<td><?php language('en'); language(' '); language('title'); ?></td>
						<td><?php language('ar'); language(' '); language('title'); ?></td>
						<td><?php language('image'); ?></td>
						<td><?php language('edit'); ?></td>
						<td><?php language('delete'); ?></td>
					</tr>
				<?php					
					for($i=0;$i<sizeof($categories);$i++) {
						if(substr_count($categories[$i]['childto'], ',') == $no){
				?>
					<tr id="tr-<?php echo $categories[$i]['id']; ?>">
						<td><a href="categories.php?id=<?php echo $categories[$i]['childto']; ?>"><?php echo $categories[$i]['titleen']; ?></a></td>
						<td><a href="categories.php?id=<?php echo $categories[$i]['childto']; ?>"><?php echo $categories[$i]['titlear']; ?></a></td>
						<td>
							<?php if(is_dir('../uploads/categories/'.$categories[$i]['id'])) { $image[$i] = array_diff(scandir('../uploads/categories/'.$categories[$i]['id']), array('.','..')); ?>			
							<img class="img-responsive" src="../uploads/categories/<?php echo $categories[$i]['id']; ?>/<?php echo $image[$i][2]; ?>" width="30%"><?php } ?>
							<!--<form enctype="multipart/form-data"  action="" method="POST"><input type="hidden" name="id" value="<?php echo $categories[$i]['id']; ?>" /><input type="file" name="file" class="upload list-label" onchange="this.form.submit();" /></form>-->
						</td>
						<td><a href="categories.php?oldid=<?php echo $categories[$i]['id']; ?>&titleen=<?php echo $categories[$i]['titleen']; ?>&titlear=<?php echo $categories[$i]['titlear']; ?>"><i style="color:green;" class="groupdel glyphicon glyphicon-edit"></i></a></td>
						<td>
							<i id="<?php echo $categories[$i]['id'];?>" style="color:red;" class="categorydel glyphicon glyphicon-remove-circle"></i>
							<div id="categories-<?php echo $categories[$i]['id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-sm">
									<div class="modal-content">
										<div class="modal-header">
											<?php language('deletecategorymodal'); ?>
											<br>
        								</div>
										<div class="modal-body">
										<center>
											<button class="btn btn-danger" onclick="deletecategory('<?php echo $categories[$i]['id'];?>','<?php echo $categories[$i]['childto'];?>')" data-dismiss="modal"><?php language('agree'); ?></button>
											<button class="btn btn-success" data-dismiss="modal" aria-hidden="true"><?php language('no'); ?></button>
										</center>
										</div>
									</div>
								</div>
							</div>
						</td>
					</tr>
				<?php } } ?>
				</table>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-4<?php if($lang_file == 'ar') echo ' col-md-push-8'; ?>">
			</div>
			<div class="col-md-8<?php if($lang_file == 'ar') echo ' col-md-pull-4'; ?>">
				<nav>
					<ul class="pagination">
						<?php if($totalPages > 1) { ?><li><a href="?page=1<?php if(isset($_GET['id']) && $_GET['id'] != '') echo '&id='.$_GET['id'] ?>"><?php language("first"); ?></a></li><?php } ?>
						<?php if($page > 3) { ?><li>
							<a href="?page=<?php echo $page-2; ?><?php if(isset($_GET['id']) && $_GET['id'] != '') echo '&id='.$_GET['id'] ?>" aria-label="Previous">
								<span aria-hidden="true">&laquo;</span>
							</a>
						</li><?php } ?>
						<?php if($page > 1) { ?><li><a href="?page=<?php echo $page-1; ?><?php if(isset($_GET['id']) && $_GET['id'] != '') echo '&id='.$_GET['id'] ?>"><?php echo $page-1; ?></a></li><?php } ?>
						<?php if($totalPages > 1) { ?><li><a href="?page=<?php echo $page; ?><?php if(isset($_GET['id']) && $_GET['id'] != '') echo '&id='.$_GET['id'] ?>"><?php echo $page; ?></a></li><?php } ?>
						<?php if($page < $totalPages) { ?><li><a href="?page=<?php echo $page+1; ?><?php if(isset($_GET['id']) && $_GET['id'] != '') echo '&id='.$_GET['id'] ?>"><?php echo $page+1; ?></a></li><?php } ?>
						<?php if($page < $totalPages-1) { ?><li>
							<a href="?page=<?php echo $page+2; ?><?php if(isset($_GET['id']) && $_GET['id'] != '') echo '&id='.$_GET['id'] ?>" aria-label="Next">
								<span aria-hidden="true">&raquo;</span>
							</a>
						</li><?php } ?>
						<?php if($totalPages > 1) { ?><li><a href="?page=<?php echo $totalPages; ?><?php if(isset($_GET['id']) && $_GET['id'] != '') echo '&id='.$_GET['id'] ?>"><?php language("last"); ?></a></li><?php } ?>
					</ul>
				</nav>
			</div>
		</div>
		
		<?php } else language("nocategories"); ?>
	</div>
</div>