<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html>

<head>
<title>ESAR Inventory Management System Login Page</title>

<style type="text/css">
<!--
.style7 {color: #FFFFFF}
-->
</style>

</head>

<body>
<div class="container">
<?php
include("banner.php");
?>

<div class="headermenu">

<div class="roundcorner" align="center">
<div>
  <b class="spiffytop">
  <b class="spiffytop1"><b></b></b>
  <b class="spiffytop2"><b></b></b>
  <b class="spiffytop3"></b>
  <b class="spiffytop4"></b>
  <b class="spiffytop5"></b></b>

  <div class="spiffyfg">

	<h1></h1>
 <p>
 <br>
  <div class="menubox" align="center">
<div class="loginform" align="center">
<br>
<table align="center">
  <tr><td><div align="center"><strong>User Login</strong></div></td></tr></table>
<form name="login" method="post" action="checkuser.php">
<table align="center" border="1" width="25%">
<tr><td>User Type</td>
  <td><select name="usertype" size="1">
  <option selected="admin">admin</option>
  <option value="user">user</option>  
   <option value="officer">officer</option>  
    </select></td>
</tr>
<tr><td>Username</td><td><input type="text" name="username"></td></tr>
<tr><td>Password</td><td><input type="password" name="password"></td></tr>
<tr><td></td>
  <td align="center"><input type="submit" name="submit" value="Login" /></td>
</tr>
</table>
</form>
</div>
</div>
<br>
<br>
<h1></h1>
<div align="center" class="scrollbar">
<table border="1" bgcolor="#123456" width="600">
<tr>
  <td>
    <span class="style7">
      <marquee>
    <strong>Inventory Management System is a record book that keeps the records of money transaction that are taken place at the company.</strong>
          </marquee>
    </span> </td>
</tr>
</table>
</div>
 <div class="clear"></div>
 </div>
</div>
<br>
	
	<div class="clearer"><span></span></div>


<?php include("footer.php");?>
</div>

</body>

</html>