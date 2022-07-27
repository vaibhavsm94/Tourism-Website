<?php

$con=mysql_connect('localhost','root','') or die(mysql_error());
 mysql_select_db('mmt') or die(mysql_error());
 

$id=$_GET['nnam'];

$result = mysql_query("delete from booked_activity where activity_id='$id'");

echo "Your booking has been cancelled successfully";

echo "<a href=\"javascript:history.go(-2)\">GO BACK</a>";
?>