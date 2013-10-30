<?php
session_start();
/*$password='password';
echo sha1($password);*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CMS:.: Login Here</title>
<link rel="stylesheet" type="text/css" href="css/loginstyle.css"/>
</head>

<body>
<div id="container">
	<div id="login_wrap">
    	<div id="login_box">
        <?php
        if(isset($_SESSION['error']))
			{
				if (isset($_SESSION['error']) && (time() - $_SESSION['error'] > 10))
				{
					session_destroy();
					session_unset();
 				}
				$_SESSION['error'] = time(); 
			?>
            <div id="status">
           	<img src="images/login_error.jpg" width="39" height="40" alt="Login Error" />such user does not exist</div>
            <?php
			}
			else
			{
			?>
        	<div id="status"></div>
            <?php
			}
			?>
            <form name="login" action="login_act.php" method="post" id="login_form">
            <p>
            	<input type="email" name="email" required="required" placeholder="e-mail"/>
            </p>
            <p>
            	<input type="password" name="password" required="required" placeholder="пароль"/>
            </p>
            <p>
            	<input type="submit" name="submit" value="ЛОГИН" />
            </p>
            </form>
        </div>
    </div>
</div>
</body>
</html>