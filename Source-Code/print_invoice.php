<?php
include("dbconnection.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>

<head>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1"/>
<meta name="description" content="description"/>
<meta name="keywords" content="keywords"/> 
<meta name="author" content="author"/> 
<title>Lubna Power-Invoice</title>
<!--<link rel="stylesheet" type="text/css" href="pro_dropdown_21.css" />-->
<link rel="stylesheet" type="text/css" href="csshorizontalmenu1.css" />
<!--<link type="text/css" rel="stylesheet" href="jquery-ui-1.8.4.custom1.css"/>	-->

<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.8.4.custom.min.js"></script>
<script type="text/javascript" src="js/csshorizontalmenu.js"></script>
<script language="javascript" type="text/javascript" src="js/datetimepicker.js"></script>
<style type="text/css">
<!--
.style141 {font-size: 14px}
.style171 {font-size: 14px; font-weight: bold; color: #FFFFFF; }
.style241 {font-size: 16px; font-weight: bold; color: #FFCC66; }
.style251 {color: #FFFFFF; font-size: 14px;}
-->
</style>
<script language="Javascript1.2">
<!--

function printpage() 
{
window.print();
}

//-->
</script>

</head>

<body onLoad="printpage()">
<div class="container">
<?php 
//include("header.php");
?>
<style type="text/css">
<!--
.style2 {
	color: #000000;
	font-size: 14px;
}
.style3 {font-size: 30px}
.style4 {
	color: #000000;
	font-weight: bold;
}
-->
</style>

	<div class="header">
	<div class="title">
	<div class="logo1"><img src="images/imagddhdhdes.jpg" height="100" width="100"/></div>
		<div class="logo1des style2">
			<span class="style3">LUBNA POWER</span>		<br>
			<span class="style4">H # 45, Rd # 9A 
            <br>
            Apt-A3, Dhanmondi, Dhaka-1207.
		    <br>
		    Cell: 01714-161599<br>
	    e-mail:tareqkhan02@gmail.com</span></div>
	</div>
	<br>
	<table width="100%"><tr><th width="50%">S/N:</th><th width="50%">Date:</th></tr></table>
	</div>

	<div class="headercontent">
	<div id="tabs">
		<!--	<script type="text/javascript">
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
			<ul>
				<li><a href="#tabs-1">Sales Quotation for Customer Type: Individual</a></li>
				<li><a href="#tabs-2">Sales Quotation for Customer Type: Company</a></li>
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
			<br>
			<form name="autoSumForm">
   <table align="center" border="1" id="indextable" width="60%">
   <tr><td align="left" width="25%"><strong>Parameter</strong></td><td width="25%"><strong>Value</strong></td></tr>

<tr><td>Customer</td><td><label><?php echo $_POST["cominfo"]; ?></label></td></tr>
<tr><td>Item Description</td><td><label><?php echo $_POST["goods"]; ?></label></td></tr>
<tr><td>Unit Price (BDT) </td><td><label><?php echo $_POST["unitprice"]; ?></label></td></tr>
<tr><td>Quantity</td><td><label><?php echo $_POST["quantity"]; ?></label></td></tr>
<tr><td>Grand Total (BDT)</td><td><label><?php echo $_POST["grandtot"]; ?></label></td></tr>
</table>
</form>
</div>
	<!--	<div id="tabs-2">
<p>			
<script type="text/javascript">

	function startCalc1()
{
  interval1 = setInterval("calc1()",1);
}
function calc1()
{
 unitprice1 = document.autoSumForm1.unitprice1.value;
 quantity1 = document.autoSumForm1.quantity1.value; 
 document.autoSumForm1.grandtot1.value = (unitprice1 * 1) * (quantity1 * 1)	;
}

function stopCalc1()
{
  clearInterval(interval1);
}

</script>
						<form name="autoSumForm">
   <table align="center" border="1" width="50%" id="indextable">
   <tr><td align="left"><span class="style24">Parameter</span></td><td><span class="style24">Value</span></td></tr>

<tr><td>Customer</td><td><label><?php echo $_POST["cominfo"]; ?></label></td></tr>
<tr><td>Item Description</td><td><label><?php echo $_POST["goods"]; ?></label></td></tr>
<tr><td>Unit Price (BDT) </td><td><label><?php echo $_POST["unitprice1"]; ?></label></td></tr>
<tr><td>Quantity</td><td><label><?php echo $_POST["quantity1"]; ?></label></td></tr>
<tr><td>Grand Total (BDT)</td><td><label><?php echo $_POST["grandtot1"]; ?></label></td></tr>
<tr><td></td><td><label><input name="submit" type="submit" value="Place Quotation" /></label></td></tr>
</table>
</form>
</div>-->
</div>
<p>	</div>
	<!--<div class="main_right">

		<div class="padded">
			
			<h1>Etiam placerat</h1>
			<p>Fusce porta pede nec eros. Maecenas ipsum sem, interdum non, aliquam vitae, interdum nec, metus. Maecenas ornare lobortis risus. Donec mattis <a href="index.html">quam aliquam</a> risus. Nulla non felis sollicitudin urna blandit egestas. Integer et libero varius pede tristique ultricies. Cras nisl. Proin quis massa semper felis euismod ultricies.</p>

			<h1>Maecenas</h1>
			<p>Fusce porta pede nec eros. Maecenas ipsum sem, interdum non, aliquam vitae, interdum nec, metus. Maecenas ornare lobortis risus.</p>
			
			<h1>Lobortis</h1>
			<p>Interdum nec, metus. Maecenas ornare lobortis risus. Donec mattis quam aliquam risus. Nulla non felis sollicitudin urna blandit egestas. Integer et libero <a href="index.html">varius pede</a> tristique ultricies. Cras nisl. Proin quis massa semper felis euismod ultricies.</p>

		</div>

	</div>-->

	<!--<div class="subnav">

		<h1>Something</h1>
		<ul>
			<li><a href="index.html">pellentesque</a></li>
			<li><a href="index.html">sociis natoque</a></li>
			<li><a href="index.html">semper</a></li>
			<li><a href="index.html">convallis</a></li>
		</ul>

		<h1>Another thing</h1>
		<ul>
			<li><a href="index.html">consequat molestie</a></li>
			<li><a href="index.html">sem justo</a></li>
			<li><a href="index.html">semper</a></li>
			<li><a href="index.html">sociis natoque</a></li>
		</ul>

		<h1>Third and last</h1>
		<ul>
			<li><a href="index.html">sociis natoque</a></li>
			<li><a href="index.html">magna sed purus</a></li>
			<li><a href="index.html">tincidunt</a></li>
			<li><a href="index.html">consequat molestie</a></li>
		</ul>

	</div>-->
		
	<!--<div class="main">

		<div class="padded">

			<h1>Porttitor posuere</h1>
			<p class="meta">October 24th, 2006 by Duis porttitor</p>

			<p>In hac habitasse platea dictumst. Duis porttitor. Sed vulputate elementum nisl. Vivamus et mi at arcu mattis iaculis. Nullam posuere tristique tortor. In bibendum. Aenean ornare, <a href="index.html">nunc eget pretium</a> porttitor, sem est pretium leo, non euismod nulla dui non diam. Pellentesque dictum faucibus leo. Vestibulum ac ante. Sed in est.</p>

			<blockquote><p>Sed sodales nisl sit amet augue. Donec ultrices, augue ullamcorper posuere laoreet, turpis massa tristique justo, sed egestas metus magna sed purus.</p></blockquote>
			
			<p>Aliquam risus justo, mollis in, laoreet a, consectetuer nec, risus. Nunc blandit sodales lacus. Nam luctus semper mi. In eu diam.</p>

			<p>Fusce porta pede nec eros. Maecenas ipsum sem, interdum non, aliquam vitae, interdum nec, metus. Maecenas ornare lobortis risus. Etiam placerat varius mauris. Maecenas viverra. Sed feugiat. Donec mattis <a href="index.html">quam aliquam</a> risus. Nulla non felis sollicitudin urna blandit egestas. Integer et libero varius pede tristique ultricies. Cras nisl. Proin quis massa semper felis euismod ultricies.
			</p>


			<h1>Adipiscing</h1>
			<p class="meta">September 31st, 2006 by Mauris</p>

			<p>Aliquam risus justo, mollis in, laoreet a, consectetuer nec, risus. Nunc blandit sodales lacus. Nam luctus semper mi. In eu diam. Phasellus rutrum elit vel nisi. Cras mauris nulla, egestas quis, cursus at, venenatis ac, ante. Fusce accumsan enim et arcu. Duis sagittis libero at lacus. Suspendisse lacinia nulla eget urna.</p>

			<ul>
				<li>Tristique</li>
				<li>Aenean</li>
				<li>Pretium</li>
			</ul>

			<p>In hac habitasse platea dictumst. Duis porttitor. Sed vulputate elementum nisl. Vivamus et mi at arcu mattis iaculis. Nullam posuere tristique tortor. In bibendum. Aenean ornare, nunc eget pretium porttitor, sem est pretium leo, non euismod nulla dui non diam. Pellentesque dictum faucibus leo. Vestibulum ac ante. Sed in est. Sed sodales nisl sit amet augue. Donec ultrices, augue ullamcorper posuere laoreet, turpis massa tristique justo, sed egestas metus magna sed purus. Fusce eleifend, dui ut posuere auctor, justo elit posuere sapien, at blandit enim quam fringilla mi.</p>
				
		</div>

	</div>-->
	
	<div class="clearer"><span></span></div>

	<div class="footer">
		
		<span class="left">Lubna Power &copy; 2010 English U.K. </span>
		
		<span class="right">This is a computer generated invoice so no signature required </a></span>
		
		<div class="clearer"><span></span></div>

	</div>

</div>

</body>

</html>