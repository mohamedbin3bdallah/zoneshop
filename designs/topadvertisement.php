<?php
include_once('libs/advertisementsfront.php');
$top = getRowFromTable('*','ads','where location like "top"','');
if(!empty($top) && $top['image'] != '') {
?>
<div class="contact" dir="rtl" style="padding:0px; margin-top: 5px; margin-bottom: 35px;" <?php if(isset($_COOKIE['lang']) && $_COOKIE['lang'] != 'ar') echo ' dir="ltr"'; ?>>
	<div class="container">
		<center><a href="<?php echo $top['link']; ?>" target="_blank"><img class="img-responsive" src="uploads/advertisements/top/<?php echo $top['image']; ?>"></a></center>
	</div>
</div>
<?php
}
?>