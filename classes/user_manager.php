<?php
class usermanager extends database
{
	function loginuser($email,$password)
	{
		$email= $this->escapeMysql($email);
		$password= $this->escapeMysql($password);
		$sql="select * from ilvl_user where useremail='$email' and userpassword='$password'";
		$res=$this->exeQuery($sql);	
		if($this->fetchNum($res))
		{
			$res=$this->fetchObject($res);
			$_SESSION['userid']=$res->userid;
			$_SESSION['name']=$res->full_name;
			return true;
		}
		else
		{
			return false;
		}
	}
}
?>