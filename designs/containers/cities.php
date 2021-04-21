<div class="row">
	<?php include("../designs/headers/profilemenu.php"); ?>
	<div class="col-md-10 <?php if($lang_file == 'ar') echo 'col-md-pull-2'; ?>">
	<h2><label><?php language('cities'); ?></label></h2><br><br>
	
		<h4><label style="color: #0c5d97;"><?php language('newpage'); ?></label></h4>
		<div class="row">
			<div class="col-md-12">
				<div class="table-responsive">
				<form enctype="multipart/form-data" method="POST" action="">
				<?php if(isset($_GET['oldid']) && $_GET['oldid'] != '') { ?><input type="hidden" name="oldid" value="<?php echo $_GET['oldid']; ?>" /><?php } ?>
				<table class="table table-bordered">					
					<tr>
						<td class="info"><?php language('title'); ?></td>
						<td class="warning"><input type="text" name="title" value="<?php if(isset($city['title'])) echo $city['title']; ?>" maxlength="255" class="form-control" required="required" /></td>
					</tr>
					<tr>
						<td class="info"><?php language('shipping'); ?></td>
						<td class="warning"><input type="text" name="shipping" value="<?php if(isset($city['shipping'])) echo $city['shipping']; ?>" pattern="[-+]?([0-9]*\.[0-9]+|[0-9]+)" title="<?php language('pricematch'); ?>" maxlength="50" class="form-control" required="required" /><?php echo $system['currency'.$lang_file]; ?></td>
					</tr>
					<tr>
						<td class="info"></td>
						<td class="warning"><input type="submit" name="savecity" class="btn btn-success" /></td>
					</tr>
				</table>
				</form>
				</div>
			</div>
		</div>
	
	<br><br><h4><label style="color: #0c5d97;"><?php language('cities'); ?></label></h4>
		<?php
		$cities = getCities($startResults,$resultsPerPage);
		if(!empty($cities))
		{
		?>
		<div class="row">
			<div class="col-md-12">
				<div class="table-responsive">
				<table class="table table-bordered">
					<tr class="danger">
						<td><?php language('title'); ?></td>
						<td><?php language('shipping'); ?></td>
						<td><?php language('edit'); ?></td>
						<td><?php language('delete'); ?></td>
					</tr>
				<?php for($i=0;$i<sizeof($cities);$i++) { ?>
					<tr id="tr-<?php echo $cities[$i]['id']; ?>">
						<td><?php echo $cities[$i]['title']; ?></td>
						<td><?php echo $cities[$i]['shipping'].' '.$system['currency'.$lang_file]; ?></td>
						<td><a href="cities.php?oldid=<?php echo $cities[$i]['id']; ?>"><i style="color:green;" class="glyphicon glyphicon-edit"></i></a></td>
						<td>
							<i id="<?php echo $cities[$i]['id'];?>" style="color:red;" class="citydel glyphicon glyphicon-remove-circle"></i>
							<div id="cities-<?php echo $cities[$i]['id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-sm">
									<div class="modal-content">
										<div class="modal-header">
											<?php language('deletecitymodal'); ?>
											<br>
        								</div>
										<div class="modal-body">
										<center>
											<button class="btn btn-danger" onclick="deletecity('<?php echo $cities[$i]['id'];?>')" data-dismiss="modal"><?php language('agree'); ?></button>
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
		
		<?php } else language("nodata"); ?>
	</div>
</div>