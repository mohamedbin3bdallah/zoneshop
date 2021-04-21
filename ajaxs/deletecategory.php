<?php
function delTree($dir)
{
	$files = array_diff(scandir($dir), array('.','..')); 
    foreach ($files as $file) { 
    (is_dir("$dir/$file")) ? delTree("$dir/$file") : unlink("$dir/$file"); 
    }
    rmdir($dir);
}

if(isset($_POST['id'],$_POST['childto']))
{	
	$id = $_POST['id'];
	$childto = $_POST['childto'].',';
	include("../libs/config.php");
	include("../libs/opendb.php");
	$result = mysql_query("select count(*) as count from categories where childto LIKE '$childto%'");
	$row = mysql_fetch_array($result);
	if($row['count'] == 0)
	{
		$stmt = mysql_query("delete from categories where id = '$id'");
		if(is_dir('../uploads/categories/'.$_POST['id'])) delTree('../uploads/categories/'.$_POST['id']);
		echo 1;
	}
	else echo 'This Category Has SubCategory';
	include("../libs/closedb.php");
   exit;
}
?>