<?php
include("dbconnection.php");
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>

<head>
<?php 
include("header.php");
?>
<style type="text/css">
<!--
.style29 {color: #FFCC00}
.style30 {color: #FFCC33}
-->
</style>
<title>ESAR IMS View Purchased Items</title></head>

<body>
<div class="container">
<?php
include("banner.php");
?>
<?php
include("username.php");
?>
<?php
include("menu.php");
?>
<div class="headerplace">You are here >> Purchase Item >> <a href="view_purchase_item.php">View All Purchased Items</a></div>

	<div class="headercontent">
	<div id="tabs">
			<script type="text/javascript">
			$(function()
			{
				// Tabs
				$('#tabs').tabs();
			});
		</script>
		<style type="text/css">
			/*demo page css*/
			ul#icons {margin: 0; padding: 0;}
			ul#icons li {margin: 2px; position: relative; padding: 2px 0; cursor: pointer; float: left;  list-style: none;}
			ul#icons span.ui-icon {float: left; margin: 0 4px;}
		</style>
				
			<div id="tabs-1">

<p>
   <table align="center" border="1" width="95%">
   <tr>
   <th><span class="style29">Purchase Date</span></span></th>
   <th><span class="style29">Ref. No.</span></span></th>
   <th><span class="style29">Supplier<br>
     Name</span></span></th>
   <th><span class="style29">Challan No.</span></span></th>

   <th><span class="style29">Item Type</span></span></th>
   <th><span class="style29">Item Name</span></span></th>
   <th><span class="style29">Brand Name</span></span></th>
   <th><span class="style29">Unit Price<br>(BDT)</span></span></th>
   <th><span class="style29">Quantity<br>(kg/pac/sheet)</span></span></th>
   <th><span class="style29">Grand Total<br>(BDT)</span></span></th>
   </tr>
<?php

	$query = mysql_query("SELECT * from purchaseitem");

	while($data = mysql_fetch_array($query)) { ?>

	<tr>
	<td><?php echo $data['purchase_date'];?></td>	    
	<td><?php echo $data['purchase_code'];?></td>	    
	<td><?php echo $data['supplier_name'];?></td>	    
	<td><?php echo $data['challan_no'];?></td>	    
	<td><?php echo $data['item_type'];?></td>
	<td><?php echo $data['item_name'];?></td>
	<td><?php echo $data['brand_name'];?></td>
	<td><?php echo $data['unit_price'];?></td>	    
	<td><?php echo $data['quantity'];?></td>
	<td><?php echo $data['grand_tot'];?></td>
	</tr>
	
<?php } ?>
	<tr>
    <td colspan="15">Total Expenses= <?php echo expense(); ?> </td>
    </tr>

</table>
<p>
</div>
</div>
	</div>
	
<div class="clearer"><span></span></div>

<?php include("footer.php");?>

</div>

</body>

</html>

<?php
function expense()
{
$query = "select sum(grand_tot) from `purchaseitem`;";
$result = mysql_query ($query);
$total = mysql_result ($result, 0);

return $total;
}
?>