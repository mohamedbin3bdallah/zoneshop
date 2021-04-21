<div class="row">
	<?php include("../designs/headers/profilemenu.php"); ?>
	<div class="col-md-10 <?php if($lang_file == 'ar') echo 'col-md-pull-2'; ?>">
		<h2><label><?php language('sales'); ?></label></h2><br><br>
		
		<ul class="nav nav-tabs nav-justified">
			<li class="active"><a data-toggle="tab" href="#nondelivered"><?php language('nondelivered'); ?></a></li>
			<li><a data-toggle="tab" href="#delivered"><?php language('delivered'); ?></a></li>
		</ul>
		
		<div class="tab-content">
			<div id="nondelivered" class="tab-pane fade in active">
				<h4 style="color: #0c5d97;"><?php language('nondelivered'); ?></h4>
				<div class="row">
					<?php
					$ndsales = getSales(0,$_COOKIE['admin']);
					if(!empty($ndsales))
					{
					?>
					<div class="col-md-12">
						<div class="table-responsive">
							<table class="table table-bordered">
								<tr class="danger">
									<td><?php language('sale').language(' ').language('number'); ?></td>
									<td><?php language('en').language(' ').language('title'); ?></td>											
									<td><?php language('ar').language(' ').language('title'); ?></td>
									<!--<td><?php language('price'); ?></td>
									<td><?php language('quantity'); ?></td>-->
									<td><?php language('total'); ?></td>
									<!--<td><?php language('color'); ?></td>
									<td><?php language('size'); ?></td>-->
									<td><?php language('phone'); ?></td>
									<td><?php language('address'); ?></td>
									<!--<td><?php language('ipaddress'); ?></td>-->
									<td><?php language('time'); ?></td>
									<td></td>
									<td><?php language('delivered'); ?></td>
								</tr>
							<?php for($i=0;$i<sizeof($ndsales);$i++) { ?>
								<tr class="warning" id="tr-<?php echo $ndsales[$i]['id']; ?>">
									<td><?php echo $ndsales[$i]['saleid']; ?></td>
									<td><?php echo $ndsales[$i]['titleen']; ?></td>
									<td><?php echo $ndsales[$i]['titlear']; ?></td>
									<td><?php echo $ndsales[$i]['total']; ?></td>
									<td><?php echo $ndsales[$i]['phone']; ?></td>
									<td><?php echo $ndsales[$i]['address']; ?></td>
									<td><?php echo $ndsales[$i]['time']; ?></td>
									<td>
										<a href="#" data-toggle="modal" data-target="#salenddetail-<?php echo $i; ?>"><?php language('details'); ?></a>										
										<div id="salenddetail-<?php echo $i; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
											<div class="modal-dialog modal-lg">
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal">&times;</button>
														<h2><?php echo $ndsales[$i]['titleen']; ?><h2>
														<br>
													</div>
													<div class="modal-body">
														<div><h4><?php language('unitprice'); ?></h4></div>
														<div><?php echo $ndsales[$i]['price']; ?></div><br><br><br>

														<div><h4><?php language('quantity'); ?></h4></div>
														<div><?php echo $ndsales[$i]['quantity']; ?></div><br><br><br>
											
														<div><h4><?php language('color'); ?></h4></div>
														<div><?php echo $ndsales[$i]['color']; ?></div><br><br><br>
											
														<div><h4><?php language('size'); ?></h4></div>
														<div><?php echo $ndsales[$i]['size']; ?></div><br><br><br>
													</div>
												</div>
											</div>
										</div>							
									</td>
									<td><input type="checkbox" id="<?php echo $ndsales[$i]['id']; ?>" class="checkdelivered" /></td>
								</tr>
							<?php } ?>
							</table>
						</div>
					</div>
					<?php } else language('nosales'); ?>
				</div>
			</div>
			<div id="delivered" class="tab-pane fade">
				<h4 style="color: #0c5d97;"><?php language('delivered'); ?></h4>
				<div class="row">
					<?php
					$dsales = getSales(1,$_COOKIE['admin']);
					if(!empty($dsales))
					{
					?>
					<div class="col-md-12">
						<div class="table-responsive">
							<table class="table table-bordered">
								<tr class="danger">
									<td><?php language('sale').language(' ').language('number'); ?></td>
									<td><?php language('en').language(' ').language('title'); ?></td>											
									<td><?php language('ar').language(' ').language('title'); ?></td>
									<!--<td><?php language('price'); ?></td>
									<td><?php language('quantity'); ?></td>-->
									<td><?php language('total'); ?></td>
									<!--<td><?php language('color'); ?></td>
									<td><?php language('size'); ?></td>-->
									<td><?php language('phone'); ?></td>
									<td><?php language('address'); ?></td>
									<!--<td><?php language('ipaddress'); ?></td>-->
									<td><?php language('time'); ?></td>
									<td></td>
								</tr>
							<?php for($j=0;$j<sizeof($dsales);$j++) { ?>
								<tr class="warning" id="tr-<?php echo $dsales[$j]['id']; ?>">
									<td><?php echo $dsales[$j]['saleid']; ?></td>
									<td><?php echo $dsales[$j]['titleen']; ?></td>
									<td><?php echo $dsales[$j]['titlear']; ?></td>
									<td><?php echo $dsales[$j]['total']; ?></td>
									<td><?php echo $dsales[$j]['phone']; ?></td>
									<td><?php echo $dsales[$j]['address']; ?></td>
									<td><?php echo $dsales[$j]['dtime']; ?></td>
									<td>
										<a href="#" data-toggle="modal" data-target="#saleddetail-<?php echo $j; ?>"><?php language('details'); ?></a>										
										<div id="saleddetail-<?php echo $j; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
											<div class="modal-dialog modal-lg">
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal">&times;</button>
														<h2><?php echo $dsales[$j]['titleen']; ?><h2>
														<br>
													</div>
													<div class="modal-body">
														<div><h4><?php language('unitprice'); ?></h4></div>
														<div><?php echo $dsales[$j]['price']; ?></div><br><br><br>

														<div><h4><?php language('quantity'); ?></h4></div>
														<div><?php echo $dsales[$j]['quantity']; ?></div><br><br><br>
											
														<div><h4><?php language('color'); ?></h4></div>
														<div><?php echo $dsales[$j]['color']; ?></div><br><br><br>
											
														<div><h4><?php language('size'); ?></h4></div>
														<div><?php echo $dsales[$j]['size']; ?></div><br><br><br>
														
														<div><h4><?php language('sale').language(' ').language('time'); ?></h4></div>
														<div><?php echo $dsales[$j]['time']; ?></div><br><br><br>
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
					<?php } else language('nosales'); ?>
				</div>
			</div>
		</div>		
	</div>
</div>