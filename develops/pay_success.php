<?php
if(isset($_GET['id'],$_GET['phone'],$_GET['address'],$_COOKIE['ipaddress']) && $_COOKIE['cansale'] == 1)
{
include('libs/lang.php');
include('libs/systemandpage.php');
include('libs/cart.php');
include('libs/pay_success.php');
include('libs/footer.php');
$contact = getContact();
$about = getAbout($lang_file);

$western_arabic = array('0','1','2','3','4','5','6','7','8','9');
$eastern_arabic = array('٠','١','٢','٣','٤','٥','٦','٧','٨','٩');

$system = getSystem();
$cpage = getPage(basename($_SERVER["SCRIPT_FILENAME"]),$lang_file);
$ipaddress = $_COOKIE['ipaddress'];

$flcategories = getFLevelCategories($lang_file);

if(isset($_COOKIE['uid']))  $cart = getUserCarttByID($_GET['id'],$_COOKIE['uid']);
else $cart = getCarttByID($_GET['id'],$_COOKIE['ipaddress']);

if(isset($cart) && !empty($cart))
{
	$saleid = mt_rand(1000000000,9999999999);
	insertSale($saleid,$cart['product'],$cart['titleen'],$cart['titlear'],$cart['price'],$cart['quantity'],$cart['total'],$_GET['phone'],$_GET['address'],$_GET['name'],$_GET['city'],$_GET['shipping'],$cart['uid'],$cart['ipaddress']);
	deleteCart($_GET['id']);
	//sendmessage($_COOKIE['business'],$saleid,$cart['titleen'],$cart['titlear'],$cart['total'],$_COOKIE['currency_code'],$_GET['phone'],$_GET['address']);
}
else echo header('Location: pay_cancel.php');
}
else echo header('Location: pay_cancel.php');
?>