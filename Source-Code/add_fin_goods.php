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
<title>ESAR IMS Finished Goods Entry</title></head>

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
<div class="headerplace">You are here >> Finished Goods >> <a href="add_fin_goods.php">Finished Goods Entry</a></div>
	<div class="headercontent">
	<div id="tabs">
		<!--	<script type="text/javascript">
			$(function()
			{
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
 
 length = document.autoSumForm.length.value;
 width = document.autoSumForm.width.value; 
height = document.autoSumForm.height.value; 
 document.autoSumForm.totarea.value = (length * 1) * (width * 1)* (height* 1)	;
}

function stopCalc()
{
  clearInterval(interval);
}
</script>
			<p>
	<form name="autoSumForm" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">

   <table id="indextable" border="1" width="50%">
     <tr><td align="left"><span class="style24">Parameter</span></td>
     <td><span class="style24">Value</span></td></tr>
<tr>
  <td>Ref. No. </td>
  <td><label><input type="text" name="ref_no"/></label></td></tr>
<tr>
  <td>Client Name </td>
  <td><label><input type="text" name="client_name"/></label></td></tr>
<tr>
  <td>Order No. </td>
  <td><label><input name="order_no" type="text"/></label></td>
</tr>

<tr>
    <td>Order Date (yyyy-mm-dd)</td>
    <td><label><input name="order_date" type="date"/></label></td>
</tr>


<tr> <td><span class="style24">Product Measurement </span></td></tr>
<tr> <td>Product Name </td>
      <td><label><input type="text" name="prod_name"/></label></td></tr>
<tr> <td>Length </td>
      <td><label><input type="text" name="length" onFocus="startCalc();" onBlur="stopCalc();" maxlength="15"/></label></td></tr>
<tr> <td>Width</td>
      <td><label><input type="text" name="width" onFocus="startCalc();" onBlur="stopCalc();" maxlength="15"/></label></td></tr>
<tr> <td>Height</td>
      <td><label><input type="text" name="height" onFocus="startCalc();" onBlur="stopCalc();" maxlength="15"/></label></td></tr>
<tr> <td>Ply Size </td>
      <td><label><select name="ply" size="1">
  <option selected="3">3</option>
  <option value="5">5</option>    
  <option value="7">7</option>  
  </select></label></td></tr>
<tr>
  <td>Total Area (in sm) </td>
  <td><label><input type="text" name="totarea" maxlength="15"/></label></td></tr>

<tr>
  <td>Unit Price (BDT) </td>
  <td><label><input type="text" name="unitprice" onFocus="startCalc();" onBlur="stopCalc();" maxlength="15"/></label></td></tr>
<tr>
  <td>Quantity (kg/pac/sheet) </td>
  <td><label><input type="text" name="quantity" onFocus="startCalc();" onBlur="stopCalc();"  maxlength="15"/></label></td></tr>
<tr>
  <td>Grand Total (BDT)</td>
  <td><label><input name="grandtot" type="text"  maxlength="15"/></label></td></tr>
<!--
<tr>
    <td>Status</td>
    <td>
      <label>
        <input name="status" type="radio" value="Delivered"/> Delieverd</label>
      <label>
        <input name="status" type="radio" value="Non-Delivered"/> Non-Delivered</label>
	</td>
  </tr>
-->
<tr>
  <td>&nbsp;</td>
  <td><label><input type="submit" name="Submit" value="Process the Item"/></label></td>
</tr>
</table>
</form>


<?php
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

$data="Insert into fingoods(ref_no,client_name,order_no,order_date,prod_name,length,width,height,ply,totarea,unitprice,quantity,grandtot)			 
values ('$ref_no','$client_name','$order_no','$order_date','$prod_name','$length','$width','$height','$ply','$totarea','$unitprice','$quantity','$grandtot')";

$insert= mysql_query($data);
if($insert)
{
include_once('add_fin_goods.php');
}

?>



</div>			
</div>
<p>
	</div>
		
	<div class="clearer"><span></span></div>

<?php include("footer.php");?>
</div>

</body>

</html>