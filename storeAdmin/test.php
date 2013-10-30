<?php
$Date = "2013-10-23";
//echo date('Y-m-d', strtotime($Date. ' - 14 days'));

   $now = time(); // or your date as well
     $your_date = strtotime("2013-10-9");
     $datediff = $now - $your_date;
     echo floor($datediff/(60*60*24));
?>