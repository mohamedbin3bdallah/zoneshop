<?php
	include('../libs/addtocart.php');
	if(isset($_POST['addtocart']))
	{
		unset($_POST['addtocart']);
		if(isset($_POST['quantity'],$_POST['productid']))
		{
			$product = getProductByID($_POST['productid']);
			if($product['id'] != '')
			{
					if($_POST['quantity'] >= 1 && $_POST['quantity'] <= $product['quantity'])
					{
						$ipaddress = hash('sha256', $_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT'], FALSE);
						if(isset($_COOKIE['uid']))
						{
							if(countUserCart($_COOKIE['uid']))
							{
								$checkIpCartProduct = checkIpCartProduct($product['id'],$_COOKIE['uid']);
								if($checkIpCartProduct == 0)
								{
									insertUserCart($product['id'],$product['titleen'],$product['titlear'],$product['price'],$_POST['quantity'],$product['price']*$_POST['quantity'],$_COOKIE['uid']);
									updateProductQuantity($product['id'],$product['quantity']-$_POST['quantity']);
									header('Location: ../products.php');
								}
								else
								{
									updateUserCart($checkIpCartProduct,$_POST['quantity'],$product['price']*$_POST['quantity']);
									updateProductQuantity($product['id'],$product['quantity']-$_POST['quantity']);
									header('Location: ../products.php');
								}
							}
							else header('Location: ../index.php');
						}
						else
						{
							if(countIpCart($ipaddress))
							{
								$checkIpCartProduct = checkIpCartProduct($product['id'],$ipaddress);
								if($checkIpCartProduct == 0)
								{
									insertIPCart($product['id'],$product['titleen'],$product['titlear'],$product['price'],$_POST['quantity'],$product['price']*$_POST['quantity'],$ipaddress);
									updateProductQuantity($product['id'],$product['quantity']-$_POST['quantity']);
									header('Location: ../products.php');
								}
								else
								{
									updateUserCart($checkIpCartProduct,$_POST['quantity'],$product['price']*$_POST['quantity']);
									updateProductQuantity($product['id'],$product['quantity']-$_POST['quantity']);
									header('Location: ../products.php');
								}
							}
							else header('Location: ../index.php');
						}
					}
					else header('Location: ../index.php');
			}
			else header('Location: ../index.php');
		}
		else header('Location: ../index.php');
	}
	else header('Location: ../index.php');
?>