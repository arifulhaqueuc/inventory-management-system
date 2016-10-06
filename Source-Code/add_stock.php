<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>

<head>
<title>Lubna Power: Add New Stock</title>
<link rel="stylesheet" type="text/css" href="pro_dropdown_2.css" />
<link rel="stylesheet" type="text/css" href="csshorizontalmenu.css" />
<link type="text/css" rel="stylesheet" href="jquery-ui-1.8.4.custom.css"/>	
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.8.4.custom.min.js"></script>

<script type="text/javascript" src="js/csshorizontalmenu.js"></script>
<script language="javascript" type="text/javascript" src="js/datetimepicker.js"></script>


<style type="text/css">
.style24 {font-size: 16px; font-weight: bold; color: #FFCC66; }
.style26 {color: #009933; font-weight: bold;}
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
</head>

<body>
<div class="container">
<?php 
include("header.php");
?>
<?php
include("banner.php");
?>
<?php
include("whole_menu_admin.php");
?>

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
		<!--	<ul>
				<li><a href="#tabs-1">Customer Type: Individual</a></li>
				<li><a href="#tabs-2">Customer Type: Company</a></li>
			</ul>-->
			<div id="tabs-1">
			<p>
			<form name="addstock" action="addstockdata.php" method="post">
   <table align="center" border="1" width="70%" id="indextable">
   <tr><td align="left" width="45%"><strong><span class="style24">Parameter</span></strong></td>
   <td><strong><span class="style24">Value</span></strong></td></tr>

<tr>
  <td>L/C No.</td>
  <td><label><input type="text" name="lcno"/></label></td></tr>

<tr>
  <td>Withdrawn Amount </td>
  <td><label><input type="text" name="withamount"/></label></td></tr>

<tr>
  <td>Bank </td>
  <td><label><input type="text" name="bank"/></label></td></tr>


<tr>
  <td>Opening Date</td>
  <td><label><input name="issuedate" type="text" id="demo1" maxlength="25" size="25"/>
			<a href="javascript:NewCal('demo1','ddmmmyyyy',true,12)">
			<img src="images/Seven_segment_display-animated.gif" width="20" height="16"></a></label></td></tr>
<tr>
  <td>Shippment Arival Date</td>
  <td><label><input name="arivaldate" type="text" id="demo2" maxlength="25" size="25"/>
			<a href="javascript:NewCal('demo2','ddmmmyyyy',true,12)">
			<img src="images/Seven_segment_display-animated.gif" width="20" height="16"></a></label></td></tr>
			
<tr>
  <td>Tax </td>
  <td><label><input type="text" name="tax"/></label></td></tr>

<tr>
  <td>VAT</td>
  <td><label><input type="text" name="vat"/></label></td></tr>

<tr>
  <td>AIT </td>
  <td><label><input type="text" name="ait"/></label></td></tr>

<tr>
  <td>Advertisement</td>
  <td><label><input type="text" name="ad"/></label></td></tr>

<tr>
  <td>Printing / Stationary</td>
  <td><label><input type="text" name="printing"/></label></td></tr>

<tr>
  <td>Sundry Expenses </td>
  <td><label><input type="text" name="sundry"/></label></td></tr>

<tr><td></td><td><label><input name="submit" type="submit" value="Submit" /> 
						<input name="reset" type="reset" value="Erase"/></label></td></tr>
</table>
</form>
</div>
			<!--<div id="tabs-2">
			
			<form name="newparty" action="funddataentry.php" method="post">
   <table align="center" border="1" width="450">
   <tr><td align="left" width="45%"><strong>Parameter</strong></td>
   <th>Value</th>
   </tr>
<tr>
  <td>Company Name</td>
  <td><input type="text" name="" value="" maxlength="" size=""/></td></tr>
<tr>
  <td>Mail Address</td>
  <td><textarea name="" value="" maxlength="" size=""></textarea></td></tr>
  <tr>
    <td>Phone No. </td>
    <td><input type="text" name="" value="" maxlength="" size=""/></td></tr>
  <tr>
  <td>e-mail Address</td>
  <td><input type="text" name="" value="" maxlength="" size=""/></td></tr>
<tr>
  <td>Contact Person</td>
  <td><input type="text" name="" value="" maxlength="" size=""/></td></tr>
<tr>
  <td>Contact Person's Phnone No.</td>
  <td><input type="text" name="" value="" maxlength="" size=""/></td></tr>
<tr>
  <td>Contact Person's e-mail Address</td>
  <td><input type="text" name="" value="" maxlength="" size=""/></td></tr>

<tr><td align="left"></td><td align="center"><input name="submit" type="submit" value="Submit" /> 
											<input name="reset" type="reset" value="Erase"/></td></tr>
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

<?php include("footer.php");?>

</div>

</body>

</html>