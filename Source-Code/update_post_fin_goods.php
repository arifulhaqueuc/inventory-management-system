<?php
include("dbconnection.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
$serial=$_POST['serial'];
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

$data=mysql_query("UPDATE factory.fingoods 
	  				 SET ref_no = '$ref_no',
						 client_name = '$client_name',
						 order_no = '$order_no',
						 order_date = '$order_date',
						 prod_name = '$prod_name',
						 length = '$length',
						 width = '$width',
						 height = '$height',
						 ply = '$ply',
						 totarea = '$totarea' 
						 unitprice = '$unitprice',
						 quantity = '$quantity',
						 grandtot = '$grandtot' 
					WHERE fingoods.serial =$serial");
						 
						 
//*if($data)echo"<h3>Data Updated</h3>";*//
echo "<script>location.replace('view_fin_goods.php')</script>";

?>
</body>
</html>
