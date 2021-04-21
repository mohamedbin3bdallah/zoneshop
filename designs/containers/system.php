<div class="row">
	<?php include("../designs/headers/profilemenu.php"); ?>
	<div class="col-md-10 <?php if($lang_file == 'ar') echo 'col-md-pull-2'; ?>">
	<h2><label><?php language('system'); ?></label></h2><br><br>
		<?php
		$system = getSystem();
		if(!empty($system))
		{
		?>
		<div class="row">
			<div class="col-md-12">
				<div class="table-responsive">
				<table class="table table-bordered">
					<form enctype="multipart/form-data" method="POST" action="">					
					<input type="hidden" name="oldid" value="<?php echo $system['id']; ?>" />					
					<input type="hidden" name="oldimage" value="<?php echo $system['logo']; ?>" />
					<tr>
						<td class="info"><?php language('websitename'); ?></td>
						<td colspan="5" class="warning"><input type="text" name="websitename" value="<?php echo $system['websitename']; ?>" maxlength="100" class="form-control" required="required" /></td>
					</tr>
					<tr>
						<td class="info"><?php language('slogan'); ?></td>
						<td colspan="5" class="warning"><input type="text" name="slogan" value="<?php echo $system['slogan']; ?>" maxlength="255" class="form-control" required="required" /></td>
					</tr>
					<tr>
						<td class="info"><?php language('paiementemail'); ?></td>
						<td colspan="5" class="warning"><input type="email" name="paiementemail" value="<?php echo $system['paiementemail']; ?>" maxlength="255" class="form-control" required="required" /></td>
					</tr>
					<tr id="currency">
						<td class="info"><?php language('currency'); ?></td>
						<td class="info"><?php language('en'); ?></td>
						<td class="warning">
							<!--<input type="text" id="currencyen" name="currencyen" value="<?php echo $system['currencyen']; ?>" maxlength="50" class="form-control" required="required" />-->
							<?php echo $system['currencyen']; ?>
						</td>
						<td class="info"><?php language('ar'); ?></td>
						<td class="warning">
							<!--<input type="text" id="currencyar" name="currencyar" value="<?php echo $system['currencyar']; ?>" maxlength="50" class="form-control" required="required" />-->
							<?php echo $system['currencyar']; ?>
						</td>
						<td class="warning">
							<select id="paypalcurrency" name="paypalcurrency" class="form-control" required="required" >
								<option value="USD" <?php if($system['paypalcurrency'] == 'USD') echo 'selected'; ?>>USD</option>								
							</select>
						</td>
					</tr>
					<tr>
						<td class="info"><?php language('logo'); ?></td>
						<td colspan="2" style="padding-left: 10%;" class="warning"><a href="#" data-toggle="modal" data-target="#logo"><img class="img-responsive" src="../uploads/<?php echo $system['logo']; ?>" style="width:75px;"></a></td>
						<td colspan="3" class="warning"><input type="file" name="file" class="form-control" /></td>
					</tr>
					<tr>
						<td class="info"></td>						
						<td colspan="5" class="warning"><input type="submit" name="savesystem" class="btn btn-success" /></td>
					</tr>
					</form>
				</table>
				</div>
			</div>
		</div>
		
		<div id="logo" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<br>
        			</div>
					<div class="modal-body">
						<img src="../uploads/<?php echo $system['logo']; ?>" class="img-responsive">
					</div>
				</div>
			</div>
		</div>

		<?php } else language("nodata"); ?>
	</div>
</div>