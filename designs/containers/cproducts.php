<!--<script type="text/javascript">
tinymce.init({
    selector: "textarea",
	plugins: "textcolor",
	toolbar: "forecolor backcolor",
 });
</script>-->

<div class="row">
	<?php include("../designs/headers/profilemenu.php"); ?>
	<div class="col-md-10 <?php if($lang_file == 'ar') echo 'col-md-pull-2'; ?>">
		<h2><label><?php language('products'); ?></label></h2><br><br>
	
		<h4><label style="color: #0c5d97;"><?php language('newproduct'); ?></label></h4>
		<div class="row">
			<div class="col-md-12">
				<div class="table-responsive">
				<form enctype="multipart/form-data" method="POST" action="">
				<?php if(isset($_GET['oldid']) && $_GET['oldid'] != '') { ?><input type="hidden" name="oldid" value="<?php echo $_GET['oldid']; ?>" /><?php } ?>
				<table class="table table-bordered">
					<tr>
						<td class="info"><?php language('en').language(' ').language('title'); ?></td>
						<td class="warning"><input type="text" name="titleen" value="<?php if(isset($product['titleen'])) echo $product['titleen']; ?>" maxlength="100" class="form-control" title="<?php language('inputmatch'); ?>" required="required" /></td>
					</tr>
					<tr>
						<td class="info"><?php language('ar').language(' ').language('title'); ?></td>
						<td class="warning"><input type="text" name="titlear" value="<?php if(isset($product['titlear'])) echo $product['titlear']; ?>" maxlength="100" class="form-control" title="<?php language('inputmatch'); ?>" required="required" /></td>
					</tr>
					<tr>
						<td class="info"><?php language('en').language(' ').language('description'); ?></td>
						<td class="warning"><textarea name="descriptionen" rows="5" class="form-control"><?php if(isset($product['descriptionen'])) echo $product['descriptionen']; ?></textarea></td>
					</tr>
					<tr>
						<td class="info"><?php language('ar').language(' ').language('description'); ?></td>
						<td class="warning"><textarea name="descriptionar" rows="5" class="form-control"><?php if(isset($product['descriptionar'])) echo $product['descriptionar']; ?></textarea></td>
					</tr>
					<?php if(isset($product['categories'])) { ?>
					<tr>
						<td class="info"><?php language('currectcategories'); ?></td>
						<td class="warning"><?php if(!empty($product['categories'])) { $productcats['categories'] = explode("|", $product['categories']); for($j=0;$j<count($productcats['categories']);$j++) { echo ($j+1).' - '.str_replace(',','/',$productcats['categories'][$j]).'<br>'; } } else language('nocategories'); ?></td>
					</tr>
					<?php } ?>
					<tr>
						<td class="info"><?php language('categories'); ?></td>
						<td class="warning">
							<?php if(!empty($categories)) { ?>
								<ul style="list-style-type:none">
									<?php $k = 1; for($j=0;$j<count($categories);$j++) { ?>
										<?php if(substr_count($categories[$j]['childto'], ',') == 0 && $k == 1) { ?><li><input type="checkbox" name="categories[]" value="<?php echo $categories[$j]['childto']; ?>">&nbsp;<?php echo $categories[$j]['title']; ?></li><?php }
										elseif(substr_count($categories[$j]['childto'], ',') > substr_count($categories[$j-1]['childto'], ',')) { $k = 0; ?><ul style="list-style-type:none"><li><input type="checkbox" name="categories[]" value="<?php echo $categories[$j]['childto']; ?>">&nbsp;<?php echo $categories[$j]['title']; ?></li><?php }
										elseif(substr_count($categories[$j]['childto'], ',') == substr_count($categories[$j-1]['childto'], ',')) { $k = 0; ?><li><input type="checkbox" name="categories[]" value="<?php echo $categories[$j]['childto']; ?>">&nbsp;<?php echo $categories[$j]['title']; ?></li><?php }
										elseif(substr_count($categories[$j]['childto'], ',') < substr_count($categories[$j-1]['childto'], ',')) { $k = 0; for($n=0;$n<=substr_count($categories[$j-1]['childto'], ',')-substr_count($categories[$j]['childto'], ',');$n++) { ?></ul><?php } ?><ul style="list-style-type:none"><li><input type="checkbox" name="categories[]" value="<?php echo $categories[$j]['childto']; ?>">&nbsp;<?php echo $categories[$j]['title']; ?></li><?php } ?>
									<?php } ?>
								</ul>
							<?php } ?>
						</td>
					</tr>
					<tr>
						<td class="info"></td>
						<td class="warning">
						<?php 
						if(isset($_GET['oldid']) && is_dir('../uploads/products/'.$_GET['oldid'])) {
							$productpics = array_diff(scandir('../uploads/products/'.$_GET['oldid']), array('.','..'));
							for($k=2;$k<(count($productpics)+2);$k++)
							{
						?>
							<div id="productimgdel-<?php echo $k; ?>" class="col-md-3">
								<a class="" href="#" data-toggle="modal" data-target="#productimg-<?php echo $k; ?>">
									<img class="img-responsive" src="../uploads/products/<?php echo $_GET['oldid']; ?>/<?php echo $productpics[$k]; ?>" style="width:75px;">								
								</a>
								<i id="<?php echo $k;?>" path="../uploads/products/<?php echo $_GET['oldid']; ?>/<?php echo $productpics[$k]; ?>" thumpath="../uploads/products/<?php echo $_GET['oldid']; ?>/<?php echo $productpics[$k]; ?>" style="color:red;" class="productimgdel glyphicon glyphicon-remove-circle"></i>
							</div>
							<div id="productimg-<?php echo $k; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<br>
        								</div>
										<div class="modal-body">
											<img src="../uploads/products/<?php echo $_GET['oldid']; ?>/<?php echo $productpics[$k]; ?>" class="img-responsive">
										</div>
									</div>
								</div>
							</div>
						<?php } } ?>
						</td>
					</tr>
					<tr>
						<td class="info"><?php language('image'); ?></td>
						<td class="warning"><input type="file" name="file[]" class="form-control" <?php if(!isset($_GET['oldid']) || $_GET['oldid'] == '') { ?> title="<?php language('selectmatch'); ?>" required="required" <?php } ?> multiple /></td>
					</tr>
					<tr>
						<td class="info"><?php language('oldprice'); ?></td>
						<td class="warning"><input type="text" name="oldprice" value="<?php if(isset($product['oldprice'])) echo $product['oldprice']; ?>" pattern="[-+]?([0-9]*\.[0-9]+|[0-9]+)" title="<?php language('oldpricematch'); ?>" maxlength="50" class="form-control" /></td>
					</tr>
					<tr>
						<td class="info"><?php language('price'); ?></td>
						<td class="warning"><input type="text" name="price" value="<?php if(isset($product['price'])) echo $product['price']; ?>" pattern="[-+]?([0-9]*\.[0-9]+|[0-9]+)" title="<?php language('pricematch'); ?>" maxlength="50" class="form-control" required="required" /></td>
					</tr>
					<tr>
						<td class="info"><?php language('quantity'); ?></td>
						<td class="warning"><input type="text" name="quantity" value="<?php if(isset($product['quantity'])) echo $product['quantity']; ?>" pattern="[0-9]*" title="<?php language('quantitymatch'); ?>" maxlength="100" class="form-control" required="required" /></td>
					</tr>
					<tr>
						<td class="info"></td>
						<td class="warning"><input type="submit" name="saveproduct" class="btn btn-success" /></td>
					</tr>
				</table>
				</form>
				</div>
			</div>
		</div>
	
	<h4><label style="color: #0c5d97;"><?php language('products'); ?></label></h4>
		<?php
		$products = getProducts($_COOKIE['admin'],$startResults,$resultsPerPage);
		if(!empty($products))
		{
		?>
		<div class="row">
			<div class="col-md-12">
				<div class="table-responsive">
				<table class="table table-bordered">
					<tr class="danger">
						<td><?php language('en').language(' ').language('title'); ?></td>											
						<td><?php language('ar').language(' ').language('title'); ?></td>
						<td><?php language('views'); ?></td>
						<!--<td><?php //language('en').language(' ').language('description'); ?></td>
						<td><?php //language('ar').language(' ').language('description'); ?></td>-->
						<td width="40%"><?php language('image'); ?></td>
						<td><?php language('oldprice'); ?></td>
						<td><?php language('price'); ?></td>
						<td><?php language('quantity'); ?></td>
						<td><?php language('details'); ?></td>
						<td><?php language('edit'); ?></td>
						<td><?php language('delete'); ?></td>
					</tr>
				<?php for($i=0;$i<sizeof($products);$i++) { ?>
					<tr id="tr-<?php echo $products[$i]['id']; ?>">
						<td><?php echo $products[$i]['titleen']; ?></td>
						<td><?php echo $products[$i]['titlear']; ?></td>
						<td><?php echo $products[$i]['views']; ?></td>
						<!--<td><?php //echo $products[$i]['descriptionen']; ?></td>
						<td><?php //echo $products[$i]['descriptionar']; ?></td>-->
						<td width="40%">
						<?php 
							if(is_dir('../uploads/products/'.$products[$i]['id'])) {
								$pics[$i] = array_diff(scandir('../uploads/products/'.$products[$i]['id']), array('.','..'));
								for($j=2;$j<(count($pics[$i])+2);$j++)
								{
						?>
							<a class="col-md-3" href="#" data-toggle="modal" data-target="#productimage-<?php echo $i.$j; ?>">
								<img class="img-responsive" src="../uploads/products/<?php echo $products[$i]['id']; ?>/<?php echo $pics[$i][$j]; ?>" style="width:75px;">
							</a>
							<div id="productimage-<?php echo $i.$j; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<br>
        								</div>
										<div class="modal-body">
											<img src="../uploads/products/<?php echo $products[$i]['id']; ?>/<?php echo $pics[$i][$j]; ?>" class="img-responsive">
										</div>
									</div>
								</div>
							</div>
							<?php } } ?>
						</td>
						<td><?php echo $products[$i]['oldprice']; ?></td>
						<td><?php echo $products[$i]['price']; ?></td>
						<td><?php echo $products[$i]['quantity']; ?></td>
						<td>
							<a href="#" data-toggle="modal" data-target="#productdetails-<?php echo $products[$i]['id']; ?>"><?php language('details'); ?></a>
							<div id="productdetails-<?php echo $products[$i]['id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-lg">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h2><?php echo $products[$i]['titleen']; ?><h2>
											<br>
        								</div>
										<div class="modal-body">
											<div><h4><?php language('categories'); ?></h4></div>
											<div><?php if(!empty($products[$i]['categories'])) { $productscats[$i]['categories'] = explode("|", $products[$i]['categories']); for($j=0;$j<count($productscats[$i]['categories']);$j++) { echo ($j+1).' - '.str_replace(',','/',$productscats[$i]['categories'][$j]).'<br>'; } } else language('nocategories'); ?></div><br><br><br>
											
											<div><h4><?php language('en').language(' ').language('description'); ?></h4></div>
											<div><?php echo $products[$i]['descriptionen']; ?></div><br><br><br>
											
											<div><h4><?php language('ar').language(' ').language('description'); ?></h4></div>
											<div><?php echo $products[$i]['descriptionar']; ?></div><br><br><br>
										</div>
									</div>
								</div>
							</div>
						</td>					
						<td><a href="cproducts.php?oldid=<?php echo $products[$i]['id']; ?>"><i style="color:green;" class="glyphicon glyphicon-edit"></i></a></td>
						<td>
							<i id="<?php echo $products[$i]['id'];?>" style="color:red;" class="productdel glyphicon glyphicon-remove-circle"></i>
							<div id="product-<?php echo $products[$i]['id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-sm">
									<div class="modal-content">
										<div class="modal-header">
											<?php language('deleteproductmodal'); ?>
											<br>
        								</div>
										<div class="modal-body">
										<center>
											<button class="btn btn-danger" onclick="deleteproduct('<?php echo $products[$i]['id'];?>')" data-dismiss="modal"><?php language('agree'); ?></button>
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
			<div class="col-md-2<?php if($lang_file == 'ar') echo ' col-md-push-10'; ?>">
			</div>
			<div class="col-md-10<?php if($lang_file == 'ar') echo ' col-md-pull-2'; ?>">
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
		
		<?php } else language("noproducts"); ?>
	</div>
</div>