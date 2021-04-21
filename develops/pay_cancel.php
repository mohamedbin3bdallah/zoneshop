<?php

include('libs/lang.php');
include('libs/systemandpage.php');
include('libs/cart.php');
include('libs/pay_cancel.php');
include('libs/footer.php');
$contact = getContact();
$about = getAbout($lang_file);

$western_arabic = array('0','1','2','3','4','5','6','7','8','9');
$eastern_arabic = array('٠','١','٢','٣','٤','٥','٦','٧','٨','٩');

$system = getSystem();
$cpage = getPage(basename($_SERVER["SCRIPT_FILENAME"]),$lang_file);
$ipaddress = hash('sha256', $_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT'], FALSE);

$flcategories = getFLevelCategories($lang_file);

?>