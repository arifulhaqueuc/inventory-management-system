<?php
include("dbconnection.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Lubna Power:Add New Customer Type-Individual</title>
</head>

<body>


<?php

$issuecode=$_POST['issuecode'];
$suppname=$_POST['suppname'];
$chalno=$_POST['chalno'];
$issuedate=$_POST['issuedate'];
$itemtype=$_POST['itemtype'];
$itemname=$_POST['itemname'];
$brandname=$_POST['brandname'];
$unitprice=$_POST['unitprice'];
$quantity=$_POST['quantity'];
$grandtot=$_POST['grandtot'];

$data="Insert into issueitem(issuecode,suppname,chalno,issuedate,itemtype,itemname,brandname,unitprice,quantity,grandtot)			 
values ('$issuecode','$suppname','$chalno','$issuedate','$itemtype','$itemname','$brandname','$unitprice','$quantity','$grandtot')";

$insert= mysql_query($data);
if($insert)
{
include_once('issue_item.php');
}

?>

</body>
</html>



