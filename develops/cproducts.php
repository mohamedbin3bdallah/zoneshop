<?php
//implode(":0,",$_POST['sizes']).':0'
if(isset($_COOKIE['admin']))
{
	include('../libs/cproducts.php');
	include('../classes/ResizeImage.php');
	$categories = getCategories($lang_file);
	
	if(isset($_GET['oldid']) && $_GET['oldid'] != '')
	{
		$product = getProductByID($_GET['oldid'],$_COOKIE['admin']);
		if($product['titleen'] == '') header('location: cproducts.php');
	}

	if(isset($_GET['page'])) $page = (int) $_GET['page'];
	else $page = 0;
	if ($page < 1) $page = 1;
	$resultsPerPage = 10;
	$startResults = ($page - 1) * $resultsPerPage;
	$noOfproducts = getnoOfProducts($_COOKIE['admin']);
	$totalPages = ceil($noOfproducts / $resultsPerPage);

	if(isset($_POST['saveproduct']) && isset($_POST['categories']))
	{
		unset($_POST['saveproduct']);
		if(isset($_POST['oldid']) && $_POST['oldid'] != '') 
		{
			$folder = $_POST['oldid'];
			updateProduct($_POST['oldid'],$_POST['titleen'],$_POST['titlear'],$_POST['descriptionen'],$_POST['descriptionar'],implode("|",$_POST['categories']),$_POST['oldprice'],$_POST['price'],$_POST['quantity']);
		}
		else
		{
			$folder = insertProduct($_COOKIE['admin'],$_POST['titleen'],$_POST['titlear'],$_POST['descriptionen'],$_POST['descriptionar'],implode("|",$_POST['categories']),$_POST['oldprice'],$_POST['price'],$_POST['quantity']);
		}
		
		if(isset($_FILES['file']['error'][0]) && $_FILES['file']['error'][0] == 0)
		{
			/*unlink("../uploads/products/".$_POST['oldimage']);
			unlink("../uploads/products/thumbnail/".$_POST['oldimage']);*/
			upload_profile_picture($folder);
		}
		
		unset($folder,$_FILES);
		header('location: cproducts.php');
	}
}
?>