<?php
ob_start();
include ("connection.php");
include ("user_manager.php");
include ("../storeAdmin/modules/product/product_manager.php");

	define("DBSERVER","205.178.146.103");
	define("DBUSER","allforanimals");
	define("DBPASSW","Marfusha2011");
	define("DBNAME","shelterpets");
	
/*	define("DBSERVER","localhost");
	define("DBUSER","root");
	define("DBPASSW","");
	define("DBNAME","db_store");*/
	
	$connect = new database();
	$user = new usermanager();
	$product = new productmanager();
?>