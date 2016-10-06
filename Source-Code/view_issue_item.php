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
<div class="headerplace">You are here >> Issue Item >> <a href="view_issue_item.php">View All Issued Item</a></div>

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
   <th><span class="style29">Issue Date</span></span></th>
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

	$query = mysql_query("SELECT * from issueitem");

	while($data = mysql_fetch_array($query)) { ?>

	<tr>
	<td><?php echo $data['issuedate'];?></td>	    
	<td><?php echo $data['issuecode'];?></td>	    
	<td><?php echo $data['suppname'];?></td>	    
	<td><?php echo $data['chalno'];?></td>	    
	
	<td><?php echo $data['itemtype'];?></td>
	<td><?php echo $data['itemname'];?></td>
	<td><?php echo $data['brandname'];?></td>
	<td><?php echo $data['unitprice'];?></td>	    
	<td><?php echo $data['quantity'];?></td>
	<td><?php echo $data['grandtot'];?></td>
	</tr>
	
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