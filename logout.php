<?php
unset($_COOKIE['uid']); setcookie('uid'); setcookie('uid',"");
echo header('location: index.php');
?>