<div class="row">
	<?php include("../designs/headers/profilemenu.php"); ?>
	<div class="col-md-10 <?php if($lang_file == 'ar') echo 'col-md-pull-2'; ?>">
	<h2><label><?php language('pages'); ?></label></h2><br><br>
	
		<h4><label style="color: #0c5d97;"><?php language('newpage'); ?></label></h4>
		<div class="row">
			<div class="col-md-12">
				<div class="table-responsive">
				<form enctype="multipart/form-data" method="POST" action="">
				<?php if(isset($_GET['oldid']) && $_GET['oldid'] != '') { ?><input type="hidden" name="oldid" value="<?php echo $_GET['oldid']; ?>" /><?php } ?>
				<table class="table table-bordered">					
					<tr>
						<td class="info"><?php language('pageurl'); ?></td>
						<td class="warning"><input type="text" name="pageurl" value="<?php if(isset($cpage['pageurl'])) echo $cpage['pageurl']; ?>" maxlength="255" class="form-control" required="required" /></td>
					</tr>
					<tr>
						<td class="info"><?php language('en'); language(' '); language('title'); ?></td>
						<td class="warning"><input type="text" name="titleen" value="<?php if(isset($cpage['titleen'])) echo $cpage['titleen']; ?>" maxlength="255" class="form-control" required="required" /></td>
					</tr>
					<tr>
						<td class="info"><?php language('ar'); language(' '); language('title'); ?></td>						
						<td class="warning"><input type="text" name="titlear" value="<?php if(isset($cpage['titlear'])) echo $cpage['titlear']; ?>" maxlength="255" class="form-control" required="required" /></td>
					</tr>
					<tr>
						<td class="info"><?php language('en'); language(' '); language('description'); ?></td>
						<td class="warning"><textarea name="descriptionen" rows="5" class="form-control" required="required"><?php if(isset($cpage['descriptionen'])) echo $cpage['descriptionen']; ?></textarea></td>
					</tr>
					<tr>
						<td class="info"><?php language('ar'); language(' '); language('description'); ?></td>						
						<td class="warning"><textarea name="descriptionar" rows="5" class="form-control" required="required"><?php if(isset($cpage['descriptionar'])) echo $cpage['descriptionar']; ?></textarea></td>
					</tr>
					<tr>
						<td class="info"><?php language('en'); language(' '); language('keywords'); ?></td>
						<td class="warning"><textarea name="keywordsen" rows="5" class="form-control" required="required"><?php if(isset($cpage['keywordsen'])) echo $cpage['keywordsen']; ?></textarea></td>
					</tr>
					<tr>
						<td class="info"><?php language('ar'); language(' '); language('keywords'); ?></td>						
						<td class="warning"><textarea name="keywordsar" rows="5" class="form-control" required="required"><?php if(isset($cpage['keywordsar'])) echo $cpage['keywordsar']; ?></textarea></td>
					</tr>
					<tr>
						<td class="info"></td>
						<td class="warning"><input type="submit" name="savepage" class="btn btn-success" /></td>
					</tr>
				</table>
				</form>
				</div>
			</div>
		</div>
	
	<br><br><h4><label style="color: #0c5d97;"><?php language('pages'); ?></label></h4>
		<?php
		$pages = getPages($startResults,$resultsPerPage);
		if(!empty($pages))
		{
		?>
		<div class="row">
			<div class="col-md-12">
				<div class="table-responsive">
				<table class="table table-bordered">
					<tr class="danger">
						<td><?php language('pageurl'); ?></td>
						<td><?php language('en'); language(' '); language('title'); ?></td>
						<td><?php language('ar'); language(' '); language('title'); ?></td>
						<td><?php language('en'); language(' '); language('description'); ?></td>
						<td><?php language('ar'); language(' '); language('description'); ?></td>
						<td><?php language('en'); language(' '); language('keywords'); ?></td>
						<td><?php language('ar'); language(' '); language('keywords'); ?></td>
						<td><?php language('edit'); ?></td>
						<td><?php language('delete'); ?></td>
					</tr>
				<?php for($i=0;$i<sizeof($pages);$i++) { ?>
					<tr id="tr-<?php echo $pages[$i]['id']; ?>">
						<td><?php echo $pages[$i]['pageurl']; ?></td>
						<td><?php echo $pages[$i]['titleen']; ?></td>
						<td><?php echo $pages[$i]['titlear']; ?></td>
						<td><?php echo $pages[$i]['descriptionen']; ?></td>
						<td><?php echo $pages[$i]['descriptionar']; ?></td>
						<td><?php echo $pages[$i]['keywordsen']; ?></td>
						<td><?php echo $pages[$i]['keywordsar']; ?></td>
						<td><a href="pages.php?oldid=<?php echo $pages[$i]['id']; ?>"><i style="color:green;" class="glyphicon glyphicon-edit"></i></a></td>
						<td>
							<i id="<?php echo $pages[$i]['id'];?>" style="color:red;" class="pagedel glyphicon glyphicon-remove-circle"></i>
							<div id="pages-<?php echo $pages[$i]['id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-sm">
									<div class="modal-content">
										<div class="modal-header">
											<?php language('deletepagemodal'); ?>
											<br>
        								</div>
										<div class="modal-body">
										<center>
											<button class="btn btn-danger" onclick="deletepage('<?php echo $pages[$i]['id'];?>')" data-dismiss="modal"><?php language('agree'); ?></button>
											<button class="btn btn-success" data-dismiss="modal" aria-hidden="true"><?php language('no'); ?></button>
										</center>
										</div>
									</div>
								</div>
							</div>
						</td>
					</tr>
				<?php } ?>
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
						<?php if($totalPages > 1) { ?><li><a href="?page=1"><?php language("first"); ?></a></li><?php } ?>
						<?php if($page > 3) { ?><li>
							<a href="?page=<?php echo $page-2; ?>" aria-label="Previous">
								<span aria-hidden="true">&laquo;</span>
							</a>
						</li><?php } ?>
						<?php if($page > 1) { ?><li><a href="?page=<?php echo $page-1; ?>"><?php echo $page-1; ?></a></li><?php } ?>
						<?php if($totalPages > 1) { ?><li><a href="?page=<?php echo $page; ?>"><?php echo $page; ?></a></li><?php } ?>
						<?php if($page < $totalPages) { ?><li><a href="?page=<?php echo $page+1; ?>"><?php echo $page+1; ?></a></li><?php } ?>
						<?php if($page < $totalPages-1) { ?><li>
							<a href="?page=<?php echo $page+2; ?>" aria-label="Next">
								<span aria-hidden="true">&raquo;</span>
							</a>
						</li><?php } ?>
						<?php if($totalPages > 1) { ?><li><a href="?page=<?php echo $totalPages; ?>"><?php language("last"); ?></a></li><?php } ?>
					</ul>
				</nav>
			</div>
		</div>
		
		<?php } else language("nopages"); ?>
	</div>
</div>