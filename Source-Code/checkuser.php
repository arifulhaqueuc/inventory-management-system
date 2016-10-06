<?php
session_start();
include("dbconnection.php");
$type = trim($_POST['usertype']);
$user = trim($_POST['username']);
$pass = trim($_POST['password']);
	if($type=='admin')
	{
		$usertest = mysql_query("Select * from user where usertype='$type' and username = '$user' and password = '$pass'");
		$row = mysql_fetch_object($usertest);
		if(@mysql_num_rows($usertest)>0)
			{
			$_SESSION['username'] = $username;
			include_once ('whole_menu_admin.php');
			}
		else 
			{ 
			include_once('index.php');
			echo "<script>alert ('Sorry! You are not an authorised user.');</script>";
			}
	}
	
	elseif($type=='manager')
	{
		$usertest = mysql_query("Select * from user where usertype='$type' and username = '$user' and password = '$pass'");
		$row = mysql_fetch_object($usertest);
		if(@mysql_num_rows($usertest)>0)
			{
			$_SESSION['username'] = $username;
			include_once ('whole_menu_admin.php');
			}
		else 
			{ 
			include_once('index.php');
			echo "<script>alert ('Sorry! You are not an authorised user.');</script>";
			}
	}
	elseif($type=='officer')
	{
		$usertest = mysql_query("Select * from user where usertype='$type' and username = '$user' and password = '$pass'");
		$row = mysql_fetch_object($usertest);
		if(@mysql_num_rows($usertest)>0)
			{
			$_SESSION['username'] = $username;
			include_once ('whole_menu_officer.php');
			}
		else 
			{ 
			include_once('index.php');
			echo "<script>alert ('Sorry! You are not an authorised user.');</script>";
			}
	}

else
	{ 
	include_once('index.php');
	echo "<script>alert ('Sorry! You are not an authorised user.');</script>";
	}
?>