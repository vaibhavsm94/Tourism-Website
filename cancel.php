<?php

$con=mysql_connect('localhost','root','') or die(mysql_error());
 mysql_select_db('mmt') or die(mysql_error());
 

$id=$_GET['name'];

$result = mysql_query("delete from booked_rooms where bookid='$id'");

echo "Your booking has been cancelled successfully";


?>