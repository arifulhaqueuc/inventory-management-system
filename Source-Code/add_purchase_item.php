<?php
include("dbconnection.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

</head>

<body>


<?php

$purchase_code=$_POST['purchase_code'];
$supplier_name=$_POST['supplier_name'];
$challan_no=$_POST['challan_no'];
$purchase_date=$_POST['purchase_date'];
$item_type=$_POST['item_type'];
$item_name=$_POST['item_name'];
$brand_name=$_POST['brand_name'];
$unit_price=$_POST['unit_price'];
$quantity=$_POST['quantity'];
$grand_tot=$_POST['grand_tot'];

$data="Insert into purchaseitem(purchase_code,supplier_name,challan_no,purchase_date,item_type,item_name,brand_name,unit_price,quantity,grand_tot)			 
values ('$purchase_code','$supplier_name','$challan_no','$purchase_date','$item_type','$item_name','$brand_name','$unit_price','$quantity','$grand_tot')";

$insert= mysql_query($data);
if($insert)
{
include_once('purchase_item.php');
}

?>

</body>
</html>



