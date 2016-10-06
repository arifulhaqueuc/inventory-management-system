<?php
include("dbconnection.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Add New Customer</title>
</head>

<body>


<?php

$ref_no=$_POST['ref_no'];
$client_name=$_POST['client_name'];
$order_no=$_POST['order_no'];
$order_date=$_POST['order_date'];
$prod_name=$_POST['prod_name'];
$length=$_POST['length'];
$width=$_POST['width'];
$height=$_POST['height'];
$ply=$_POST['ply'];
$totarea=$_POST['totarea'];
$unitprice=$_POST['unitprice'];
$quantity=$_POST['quantity'];
$grandtot=$_POST['grandtot'];
$status=$_POST['status'];

$data="Insert into fingoods(ref_no,client_name,order_no,order_date,prod_name,length,width,height,ply,totarea,unitprice,quantity,grandtot,status)			 
values ('$ref_no','$client_name','$order_no','$order_date','$prod_name','$length','$width','$height','$ply','$totarea','$unitprice','$quantity','$grandtot','$status')";

$insert= mysql_query($data);
if($insert)
{
include_once('add_fin_goods.php');
}

?>

</body>
</html>