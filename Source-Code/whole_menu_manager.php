
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>

<head>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1"/>
<meta name="description" content="description"/>
<meta name="keywords" content="keywords"/> 
<meta name="author" content="author"/> 
<title>IMS Main Menu</title>

<style type="text/css">
<!--
.style27 
{
font-size: 16px;
color:#fff;
background-color:#153E7E;
width:100px;
}
.style28 {color: #00FFFF}

-->
</style>

</head>

<body>
<div class="container">
<?php
include("banner.php");
?>

<div class="headermenu">
<?php
include("username.php");
?>


	<h1></h1>
 
  <div class="menubox" align="center">
<br>
  <div class="usertitle style27"><span class="style28"><strong>Main Menu</strong></span></div>
<table width="90%">
<tr>
  <th><span class="style28">Purchase item </span></th>
  <th><span class="style28">Issue Item </span></th>
  <th><span class="style28">Work in Process </span></th>
  <th><span class="style28">Finished Goods </span></th>
  <th><span class="style28">Delivery Status</span></th>
  <th><span class="style28">Reports &amp; Analysis</span></th>
<tr>
<tr>
  <td><a href="purchase_item.php">Entry of Purchase Item </a></td>
 
  <td><a href="issue_item.php">Issue an Item</a></td>
  <td><a href="add_fin_goods.php">Finished Goods Entry </a></td>
  <td><a href=".php">Record Delivery Item </a></td>
  <td><a href="deliverd_prod.php">Deliverd Products</a></td>
  <td><a href="balance_sheet.php">Balance Sheet</a></td>
</tr>
<tr>
  <td><a href="view_purchase_item.php">View All Purchase Item  </a></td>
  <td><a href="view_issue_item.php">View Issued Item List </a></td>
  <td><a href="view_stock.php">Opening Item</a></td>
  <td><a href="view_fin_goods.php">View Records</a></td>
  <td><a href="nondeliverd_prod.php">Non-Deliverd Products</a></td>
<td><a href="profit_loss.php">Profit &amp; Loss Statement</a></td>
</tr>
<tr><td><a href="update_cust.php"></a></td>
<!--<td><a href="update_stock.php">View Working Item List</a></td>-->

<td></td>
<td></td><td></td><td></td>
<td><a href=".php">Generate Balance Sheet </a></td>
</tr>
<tr><td></td><td></td><td></td><td></td><td></td>
<td><a href=".php">Generate P&amp;L Statement </a></td>
</tr>
</table>
<br>
<br>
 <div class="clear"></div>
 </div>
<br>

	<div class="clearer"><span></span></div>

<?php include("footer.php");?>
</div>

</body>

</html>