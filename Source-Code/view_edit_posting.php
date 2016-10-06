<?php
include("dbconnection.php");
?>

<?php
$query = mysql_query("SELECT * from genposting order by serial");
?>
<?php

/*
$qsearch=$_GET['refno'];
$query = mysql_query("SELECT * from genposting where refno like '%$qsearch%'");

$date1=$_GET['date1'];
$date2=$_GET['date2'];
$query_new=mysql_query("select fundsource from genposting where issuedate between '$date1' and '$date2'");

*/
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>

<head>
<?php 
include("header.php");
?>
<style type="text/css">
<!--
.style30 {color: #FF0000}
.style31 {color: #FFCC00}
-->
</style>
<title>ESAR RTC View All Transactions</title></head>

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
	<div class="headerplace">
	You are here <blink>>></blink> General Posting <blink>>></blink> <strong>View All Transactions</strong>
	</div>

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
			<div class="search">
<!--
<form name="qsearch" action="<?php $_SERVER['PHP_SELF']; ?>" method="get">
Search by Ref. No.
<input name="refno" type="text" value="Enter Ref no" size="25" /> 
<input name="search_ref" type="submit" value="Search" />
Search by Date
<input name="date1" type="date" value="Enter Start Date" size="25" /> 
<input name="date2" type="text" value="Enter End Date" size="25" />
<input name="search_date" type="submit" value="Search" />
</form>

		</div>
-->
<p>
<table border="1">
<tr>
<th><span class="style31">Ref. No.</span></th>
<th><span class="style31">Source <br>
  of Fund</span></th>
<th><span class="style31">Disburse.<br>
  Through</span></th>
<th><span class="style31">Disburse.<br>
  Against</span></th>
<th><span class="style31">Withdrawn<br>
  Amount<br>
  (BDT)</span></th>
<th><span class="style31">Refund<br>
  Amount<br>
  BDT)</span></th>
<th><span class="style31">Due <br>
  Refund<br>
  Amount<br>
  (BDT)</span></th>
<th><span class="style31">Issue Date</span></th>
<th><span class="style31">Refund Date</span></th>
<th><span class="style31">Due Refund<br>
  Date</span></th>
<th><span class="style31">Update</span></th>
<th><span class="style30">Delete</span></th>
</tr>


<?php

	while($data = mysql_fetch_array($query)) { ?>
	<tbody>
	<tr>

	<td><?php echo $data['refno'];?></td>	    
	<td><?php echo $data['fundsource'];?></td>
	<td><?php echo $data['disthrough'];?></td>
	<td><?php echo $data['disagain'];?></td> 
	<td><?php echo $data['withamount'];?></td>
	<td><?php echo $data['refundamount'];?></td>
	<td><?php echo $data['dueamount'];?></td>
	<td><?php echo $data['issuedate'];?></td>
	<td><?php echo $data['refunddate'];?></td>
	<td><?php echo $data['duerefund'];?></td>
	<td align="center"><div align="center"><a href="update_posting.php?id=<?php echo $data['serial'];?>">
	  <img src="images/Tool_animated.gif" alt="update" width="26" height="14" /></a></div></td>    
	<td align="center"><div align="center"><a href="delete_posting.php?id=<?php echo $data['serial'];?>">
	  <img src="images/Vent.gif" alt="Delete" width="26" height="14" /></a></div></td>   
	</tr>
	</tbody>
	
<?php } ?>
<!--</table>
<p>
</div>
</div>
	</div>
	

<table border="1">
<tr><th><span class="style31">Source <br>  of Fund</span></th></tr>
-->
<?php 
	/*
	while($data = mysql_fetch_array($query_new)) { ?>
	<tbody>
	<tr>
	<td><?php echo $data['fundsource'];?></td>
	</tr>
	</tbody>
   
<?php } */?>
</table>
	
	
<div class="clearer"><span></span></div>

<?php include("footer.php");?>

</div>

</body>

</html>