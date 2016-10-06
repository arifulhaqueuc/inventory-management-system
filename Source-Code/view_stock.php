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
<title>Lubna Power</title>
<link rel="stylesheet" type="text/css" href="pro_dropdown_2.css" />
<link rel="stylesheet" type="text/css" href="csshorizontalmenu.css" />
<link type="text/css" rel="stylesheet" href="jquery-ui-1.8.4.custom.css"/>	
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.8.4.custom.min.js"></script>

<script type="text/javascript" src="js/csshorizontalmenu.js"></script>
<script language="javascript" type="text/javascript" src="js/datetimepicker.js"></script>
<style type="text/css">
<!--
.style14 {font-size: 14px}
.style17 {font-size: 14px; font-weight: bold; color: #FFFFFF; }
.style24 {font-size: 16px; font-weight: bold; color: #FFCC66; }
.style25 {color: #FFFFFF; font-size: 14px;}
.style26 {color: #009933; font-weight: bold;}
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
include("menu.php");
?>	<div class="headercontent">

			<div id="tabs-1">
	<p>
   <table align="center" border="1" width="90%">
   <thead><tr><th><span class="style24">L/C No.</span></th><th><span class="style24">Withdrawn <br>Amount</span></th><th><span class="style24">Bank</span></th><th><span class="style24">L/C Opening Date</span></th><th><span class="style24">Shippment Arival Date</span></th><th><span class="style24">Tax</span></th><th><span class="style24">VAT</span></th><th><span class="style24">AIT</span></th><th><span class="style24">Advertisement</span></th><th><span class="style24">Printing</span></th><th><span class="style24">Sundry</span></th></tr></thead>
<?php

	$query = mysql_query("SELECT * from stock");

	while($data = mysql_fetch_array($query)) { ?>
	<tbody>
	<tr>
<!--	<td><?php echo $data['serial'];?></td>	    -->
	<td><?php echo $data['lcno'];?></td>	    
	<td><?php echo $data['withamount'];?></td>	    
	<td><?php echo $data['bank'];?></td>	    
	<td><?php echo $data['issuedate'];?></td>	    
	<td><?php echo $data['arivaldate'];?></td>
	<td><?php echo $data['tax'];?></td>	    
	<td><?php echo $data['vat'];?></td>	    
	<td><?php echo $data['ait'];?></td>	    
	<td><?php echo $data['ad'];?></td>	    
	<td><?php echo $data['printing'];?></td>	    
	<td><?php echo $data['sundry'];?></td>	    
	</tr>
	</tbody>
	
<?php } ?>
</table>

</div>
<!--	<div id="tabs-2">



</div>-->
<p>
	</div>
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