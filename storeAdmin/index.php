<?php
session_start();
include("../classes/db_inc.php");
if(!isset($_SESSION['userid']))
	header('location:login.php');
$obj=$_GET['obj'];
?>
<!DOCTYPE html>
<head>
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="css/style.css">
<title>CMS</title>
</head>

<body>
<!--<h1>Welcome Here...</h1>
<a href="logout.php">Logout</a>-->
<div class="top_bar"><a href="logout.php">ВЫЙТИ</a></div>
<div class="wrap">
	<div class="lt_cnt">
    	<ul>
        	<li><span>УПРАВЛЕНИЕ</span>
            	<ul>
                	<li><a href="index.php" <?php if(!isset($obj) && ($obj=='')){?>class="active" <?php } ?>>Товары</a></li>
                    <li><a href="index.php?obj=commingsoon" <?php if(isset($obj) && ($obj=='commingsoon')){?> class="active" <?php } ?>>Категории</a></li>
                </ul>
            </li>
            <li style="margin-top:10px;"><span style="line-height:30px;">БАННЕРЫ</span>
            	<ul>
                	<li><a href="#">Главный горизонтальный</a></li>
                    <li><a href="#">Футер</a></li>
                </ul>
            </li>
        </ul>
    </div>
  <div class="rt_cnt">
  	<div class="hdr">
   <?php include("includes/notification.php");   ?>
    </div>
   <?php
					  if(isset($_GET['obj']) && ($_GET['obj'])!=="")
					  {
						include($_GET['obj']).".php";
					  }
					  else
					  {
						include("home.php");
					  }
					?>
  </div>
    <div class="clear"></div>
</div>
<div class="footer">Copyright</div>
</body>
</html>