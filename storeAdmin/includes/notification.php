<?php
$result=$product->getallproduct_1();
$num=$connect->fetchNum($result);

$latest_date=$product->getallactiveproducte_bydate();
$row=$connect->fetchObject($latest_date);
?>
<?php
if($num<6)
{
?>
<img src="images/warning.png" width="37" height="38" style="float:left"><p>
<span>YOU NEED TO UPDATE PRODUCTS</span><br>
    Date of the last update is <?=$row->date_published?></p>
<?php
}
else if($num>6)
{
			$last_date=strtotime($row->date_published);
			$now = time(); // or your date as well
			$datediff = $now - $last_date;
			$days_count=floor($datediff/(60*60*24));
			if($days_count<14)
			{
				?>
                    <img src="images/notification.png" width="37" height="38" style="float:left"><p>
<span>YOU ARE IN TOP SHAPE Green Sign </span><br>
    Date of the last update is <?=$row->date_published?>, you have <?=$num?> active new products in the store</p>
                <?php
			}
			else if($days_count>14 && $days_count<30)
			{
				?>
                <img src="images/alert.png" width="37" height="38" style="float:left"><p>
<span>update due in 3 days</span><br>
    Date of the last update is <?=$row->date_published?>, you should prepare for new advertizing cycle</p>
                <?php
			}
			else
			{
				?>
                 <img src="images/warning.png" width="37" height="38" style="float:left"><p>
<span>YOU NEED TO UPDATE PRODUCTS</span><br>
    Date of the last update is <?=$row->date_published?></p>
                <?php
			}
}
?>