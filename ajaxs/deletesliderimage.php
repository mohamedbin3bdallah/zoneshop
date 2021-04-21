<?php
if(isset($_POST['path'],$_POST['thpath']))
{	
	unlink($_POST['path']);
	//unlink($_POST['thpath']);
	exit;
}
?>