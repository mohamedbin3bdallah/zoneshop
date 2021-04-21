<div class="row">
	<?php include("../designs/headers/profilemenu.php"); ?>
	<div class="col-md-10 <?php if($lang_file == 'ar') echo 'col-md-pull-2'; ?>">
	<h2><label><?php language('users'); ?></label></h2><br><br>
	
		<h4><label style="color: #0c5d97;"><?php //language('newadmin'); ?></label></h4>
		<div class="row">
			<div class="col-md-12">
				<div class="table-responsive">
				<?php if(isset($_GET['oldid']) && $_GET['oldid'] != '') { ?>
				<form enctype="multipart/form-data" method="POST" action="">
				<input type="hidden" name="oldid" value="<?php echo $_GET['oldid']; ?>" />
				<table class="table table-bordered">
					<tr>
						<td class="info"><?php language('username'); ?></td>
						<td class="warning"><input type="text" name="username" value="<?php if(isset($user['username'])) echo $user['username']; ?>" maxlength="250" class="form-control" required="required" disabled /></td>
					</tr>
					<tr>
						<td class="info"><?php language('email'); ?></td>
						<td class="warning"><input type="email" name="email" value="<?php if(isset($user['email'])) echo $user['email']; ?>" maxlength="100" class="form-control" required="required" disabled /></td>
					</tr>
					<tr>
						<td class="info"><?php language('active'); ?></td>
						<td class="warning"><input type="checkbox" name="active" <?php if(isset($user['active']) && $user['active'] == 1) echo 'checked'; ?>></td>
					</tr>
					<tr>
						<td class="info"></td>
						<td class="warning"><input type="submit" name="saveuser" class="btn btn-success" /></td>
					</tr>
				</table>
				</form>
				<?php } ?>
				</div>
			</div>
		</div>
	
	<br><br><h4><label style="color: #0c5d97;"><?php language('users'); ?></label></h4>
		<?php
		$users = getUsers($startResults,$resultsPerPage);
		if(!empty($users))
		{
		?>
		<div class="row">
			<div class="col-md-12">
				<div class="table-responsive">
				<table class="table table-bordered">
					<tr class="danger">
						<td><?php language('username'); ?></td>
						<td><?php language('email'); ?></td>
						<td><?php language('active'); ?></td>
						<td><?php language('edit'); ?></td>
						<td><?php language('delete'); ?></td>
					</tr>
				<?php for($i=0;$i<sizeof($users);$i++) { ?>
					<tr id="tr-<?php echo $users[$i]['id']; ?>">
						<td><?php echo $users[$i]['username']; ?></td>
						<td><?php echo $users[$i]['email']; ?></td>
						<td><input type="checkbox" name="active" <?php if($users[$i]['active'] == 1) echo 'checked'; ?> disabled></td>
						<td><a href="users.php?oldid=<?php echo $users[$i]['id']; ?>"><i style="color:green;" class="glyphicon glyphicon-edit"></i></a></td>
						<td>
							<i id="<?php echo $users[$i]['id'];?>" style="color:red;" class="userdel glyphicon glyphicon-remove-circle"></i>
							<div id="users-<?php echo $users[$i]['id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-sm">
									<div class="modal-content">
										<div class="modal-header">
											<?php language('deleteausermodal'); ?>
											<br>
        								</div>
										<div class="modal-body">
										<center>
											<button class="btn btn-danger" onclick="deleteuser('<?php echo $users[$i]['id'];?>')" data-dismiss="modal"><?php language('agree'); ?></button>
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