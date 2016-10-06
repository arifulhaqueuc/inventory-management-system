<?php
include("dbconnection.php");
?>

<?php
$query = mysql_query("SELECT * from fingoods order by serial");
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
<title>ESAR IMS View Finished Goods</title></head>

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
<div class="headerplace">You are here >> Finished Goods >> <a href="view_fin_goods.php">View Records</a></div>

	<div class="headercontent">
	<div id="tabs">
			<div id="tabs-1">
	<p>
   <table align="center" border="1" width="95%">
	<tr>
   <th><span class="style29">Order Date</span></span></th>
   <th><span class="style29">Ref. No.</span></span></th>
   <th><span class="style29">Client<br>Name</span></span></th>
   <th><span class="style29">Order No.</span></span></th>
 
   <th><span class="style29">Product Name</span></span></th>
   <th><span class="style29">lenght</span></span></th>
   <th><span class="style29">Width</span></span></th>
   <th><span class="style29">Height</span></span></th>
   <th><span class="style29">Ply Size</span></span></th>
   <th><span class="style29">Total Area</span></span></th>
   <th><span class="style29">Unit Price<br>(BDT)</span></span></th>
   <th><span class="style29">Quantity<br>(kg/pac/sheet)</span></span></th>
   <th><span class="style29">Grand Total<br>(BDT)</span></span></th>
   <th><span class="style29">Update</span></span></th>
   </tr>
<?php

	while($data = mysql_fetch_array($query)) { ?>
	<tbody>
	<tr>
	<td><?php echo $data['order_date'];?></td>	    
	<td><?php echo $data['ref_no'];?></td>	    
	<td><?php echo $data['client_name'];?></td>	    
	<td><?php echo $data['order_no'];?></td>	    	
	<td><?php echo $data['prod_name'];?></td>
	<td><?php echo $data['length'];?></td>	    
	<td><?php echo $data['width'];?></td>	    
	<td><?php echo $data['height'];?></td>	
	<td><?php echo $data['ply'];?></td>	
	<td><?php echo $data['totarea'];?></td>	
	<td><?php echo $data['unitprice'];?></td>	    
	<td><?php echo $data['quantity'];?></td>
	<td><?php echo $data['grandtot'];?></td>

		<td align="center"><div align="center"><a href="update_fin_goods.php?id=<?php echo $data['serial'];?>">
	  <img src="images/Tool_animated.gif" alt="update" width="26" height="14" /></a></div></td>    

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