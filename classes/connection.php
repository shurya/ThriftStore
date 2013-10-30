<?php

class database{
	var $connection;
	function database(){
		$this->connection=mysql_connect(DBSERVER,DBUSER,DBPASSW)or die(mysql_error());
		mysql_select_db(DBNAME);
		}
	
	function escapeMysql($x)
	{
		return mysql_real_escape_string($x);	
	}
	
	function exeQuery($sql){

		$res=mysql_query($sql);
		return $res;
		}
		
	function fetchRow($res){
		return mysql_fetch_row($res);
		}	
	function  fetchObject($res){
		return mysql_fetch_object($res);
		}	
	function  fetchArray($res){
		return mysql_fetch_array($res);
		
		}
	function  fetchNum($res){
		return mysql_num_rows($res);
		
		}	
	function getId(){
		return mysql_insert_id();
		}
	function affectedRows($res){
		//return msql_affected_rows($res);
		}
	function close(){
		mysql_close($this->connection);
	}	
}
?>