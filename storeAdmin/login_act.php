<?php
session_start();
include_once("../classes/db_inc.php");
if(isset($_POST['submit']) && ($_POST['submit']=='ЛОГИН'))
{
	$email=$_POST['email'];
	//$password=sha1($_POST['password']);
	$password=sha1($_POST['password']);
	$result=$user->loginuser($email,$password);
	if($result){
		header("location:index.php");}
	else
	{
		$_SESSION['error']='invalid';
		header("location:login.php");
	}
	
}
?>