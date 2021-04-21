<?php
unset($_COOKIE['admin']); setcookie('admin'); setcookie('admin',"");
echo header('location: index.php');
?>