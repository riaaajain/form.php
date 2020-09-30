<?php 
echo time() . "<br>";

echo "Today is: " . date('d-m-y') ."<br>";
echo date('D-m-Y') ."<br>";
echo date('D-M-y') ."<br>";

date_default_timezone_set('Asia/kolkata');
echo date('h:i:sa') ."<br>";
echo date('H:i:sA') ."<br>";
?>