<?php
include("dbconnection.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>

<head>
<?php include("header.php");?>
<style type="text/css">
.style24 {font-size: 16px; font-weight: bold; color: #FFCC66; }
.style26 {color: #009933; font-weight: bold;}
</style>
<title>ESAR IMS Issue Item</title></head>

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
<div class="headerplace">You are here >> Issue Item >> <a href="issue_item.php">Issue an Item</a></div>
	<div class="headercontent">
	<div id="tabs">
		<!--	<script type="text/javascript">
			$(function()
			{
				// Tabs
				$('#tabs').tabs();
			});
		</script>-->
		<style type="text/css">
			/*demo page css*/
			ul#icons {margin: 0; padding: 0;}
			ul#icons li {margin: 2px; position: relative; padding: 2px 0; cursor: pointer; float: left;  list-style: none;}
			ul#icons span.ui-icon {float: left; margin: 0 4px;}
		</style>
			<!--<ul>
				<li><a href="#tabs-1">Customer Type: Individual</a></li>
				<li><a href="#tabs-2">Customer Type: Company</a></li>
			</ul>-->
			<div id="tabs-1"> 
			<script type="text/javascript">

	function startCalc()
{
  interval = setInterval("calc()",1);
}
function calc()
{
 unitprice = document.autoSumForm.unitprice.value;
 quantity = document.autoSumForm.quantity.value; 
 document.autoSumForm.grandtot.value = (unitprice * 1) * (quantity * 1)	;
}

function stopCalc()
{
  clearInterval(interval);
}
</script>
			<p>
	<form name="autoSumForm" action="add_issue_item.php" method="post">
   <table id="indextable" border="1">
     <tr><td align="left"><span class="style24">Parameter</span></td>
     <td><span class="style24">Value</span></td></tr>
<tr>
  <td>Ref. No. </td>
  <td><label><input type="text" name="issuecode"/></label></td></tr>
<tr>
  <td>Supplier Name</td>
  <td><label><input name="suppname" type="text"/></label></td></tr>
<tr>
  <td>Challan No. </td>
  <td><label><input name="chalno" type="text"/></label></td></tr>
  <tr>
    <td>Issue Date </td>
    <td><label><input name="issuedate" type="text" id="demo1" maxlength="25" size="25"/>
			<a href="javascript:NewCal('demo1','ddmmmyyyy')">
			<img src="images/Pentho~1.jpg" width="20" height="16"></a></label></td></tr>
  <tr>
    <td>Item Type </td>
    <td><label><select name="itemtype" size="1">
  <option selected="import">Imported</option>
  <option value="local">Local Purchase</option>  
  </select></label></td></tr>
  <tr> <td>Item Name </td>
      <td><label><input type="text" name="itemname"/></label></td></tr>
  <tr> <td>Brand Name </td>
     <td><label><input type="text" name="brandname"/></label></td></tr>
<tr>
  <td>Unit Price (BDT) </td>
  <td><label><input type="text" name="unitprice" onFocus="startCalc();" onBlur="stopCalc();" maxlength="15"/></label></td></tr>
<tr>
  <td>Quantity (kg/pac/sheet) </td>
  <td><label><input type="text" name="quantity" onFocus="startCalc();" onBlur="stopCalc();"  maxlength="15"/></label></td></tr>
<tr>
  <td>Grand Total (BDT)</td>
  <td><label><input name="grandtot" type="text"  maxlength="15"/></label></td></tr>
<tr>
  <td>&nbsp;</td>
  <td><label><input type="submit" name="Submit" value="Issue the Item"/>
  </label></td>
</tr>

</table>
</form>
</div>			
	
	<div class="clearer"><span></span></div>

<?php include("footer.php");?>
</div>

</body>

</html>