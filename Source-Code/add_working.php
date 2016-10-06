<?php
include("dbconnection.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Add New Customer Type: Company</title>
</head>

<body>


<?php
$ref_no=$_POST['ref_no'];
$client_name=$_POST['client_name'];
$order_no=$_POST['order_no'];
$order_date=$_POST['order_date'];
$item_name=$_POST['item_name'];
$unitprice=$_POST['unitprice'];
$quantity=$_POST['quantity'];
$grandtot=$_POST['grandtot'];

$data="Insert into working(ref_no,client_name,order_no,order_date,item_name,unitprice,quantity,grandtot)			 
values ('$ref_no','$client_name','$order_no','$order_date','$item_name','$unitprice','$quantity','$grandtot')";

$insert= mysql_query($data);
if($insert)
{
include_once('add_working_item.php');
}

?>

</body>
</html>



