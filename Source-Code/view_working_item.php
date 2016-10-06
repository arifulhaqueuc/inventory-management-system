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
-->
</style>
<script type="text/javascript">
function startCalc()
{
  interval = setInterval("calc()",1);
}
function calc()
{
 inamount = document.autoSumForm.inamount.value;
 outfloor = document.autoSumForm.outfloor.value; 
 infromfloor = document.autoSumForm.infromfloor.value; 
  document.autoSumForm.balance.value = (inamount * 1) - (outfloor * 1)- (infromfloor * 1);
}

function stopCalc()
{
  clearInterval(interval);
}

function sendToParties()
{
window.open('child_parties.php','_blank','resizable=yes,width='+(screen.width-1000)+',height='+(screen.height-500)+'');
}
</script>
<title>ESAR IMS View Issued Items</title></head>

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
<div class="headerplace">You are here >> Working in Progress >> <a href="view_working_item.php">View Working Item Records</a></div>

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
   <thead><tr>
   <th><span class="style29">Order Date</span></span></th>
   <th><span class="style29">Ref. No.</span></span></th>
   <th><span class="style29">Client Name</span></span></th>
   <th><span class="style29">Order No.</span></span></th>
 
   <th><span class="style29">Item Name</span></span></th>
   <th><span class="style29">Unit Price<br>(BDT)</span></span></th>
   <th><span class="style29">Quantity<br>(kg/pac/sheet)</span></span></th>
   <th><span class="style29">Grand Total<br>(BDT)</span></span></th>
   </tr></thead>
<?php

	$query = mysql_query("SELECT * from working");

	while($data = mysql_fetch_array($query)) { ?>
	<tbody>
	<tr>
	<td><?php echo $data['order_date'];?></td>	    
	<td><?php echo $data['ref_no'];?></td>	    
	<td><?php echo $data['client_name'];?></td>	    
	<td><?php echo $data['order_no'];?></td>	    

	<td><?php echo $data['item_name'];?></td>
	<td><?php echo $data['unitprice'];?></td>	    
	<td><?php echo $data['quantity'];?></td>
	<td><?php echo $data['grandtot'];?></td>
	</tr>
	</tbody>
	
<?php } ?>
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