<?php
if(isset($_COOKIE['admin']) && $_COOKIE['admin'] == 1)
{
	include('../libs/adminlang.php');
	include('../develops/products.php');
	if($lang_file == "ar")
	echo '<html xml:lang="ar" lang="ar" dir=rtl xmlns="http://www.w3.org/1999/xhtml">';
?>
<!DOCTYPE html>
<html lang="en" >
<head>
<?php include('../designs/head.php'); ?>
<link href="../css/multiuserselect.css" rel="stylesheet">
<script>
  window.onmousedown = function (e) {
    var el = e.target;
    if (el.tagName.toLowerCase() == 'option' && el.parentNode.hasAttribute('multiple')) {
        e.preventDefault();

        // toggle selection
        if (el.hasAttribute('selected')) el.removeAttribute('selected');
        else el.setAttribute('selected', '');

        // hack to correct buggy behavior
        var select = el.parentNode.cloneNode(true);
        el.parentNode.parentNode.replaceChild(select, el.parentNode);
    }
}
</script>
<script type="text/javascript" src="../js/products.js"></script>
</head>
<body>
<div class="container">
<?php include('../designs/containers/products.php'); ?>
</div>
</body>
</html>
<?php
} else echo header('location:../index.php'); ?>