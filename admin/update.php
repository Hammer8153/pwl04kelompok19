<?
include "../inc/config.php";

$sku	=$_POST['sku'];
$name	=$_POST['name'];
$img	=$_POST['img'];
$price	=$_POST['price'];
$paypal	=$_POST['paypal'];

mysql_query($update);
$update = "update products set name = '$name',
								img = '$img',
								price = '$price',
								paypal = '$paypal'";

?>