<?php
include_once('libs/advertisementsfront.php');
$left = getRowFromTable('*','ads','where location like "left"','');
if(!empty($left) && $left['image'] != '') {
?>
	<div class="col-md-3 col-md-pull-9">
		<center><a href="<?php echo $left['link']; ?>" target="_blank"><img class="img-responsive" src="uploads/advertisements/left/<?php echo $left['image']; ?>"></a></center>
	</div>
<?php
}
?>