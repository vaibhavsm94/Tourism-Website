<html>
<style>
.two{
	color:white;
}
</style>
<body background="img/re.png">
<div class="two">
<?php
$conn=mysql_connect("localhost","root","");
mysql_select_db("mmt"); 



session_start(); 
if($_SESSION['username']=="")
{
		echo '<script>alert("LogIn Please");</script>';
	   	echo "<script type=\"text/javascript\">window.open(\"login.php\",\"_top\");</script>";
}
else{
  
	$idi =$_GET['nm'];
	$hname=mysql_query("select name from hotel where id='$idi'");
	$name=mysql_fetch_assoc($hname);
	$mail=$_SESSION['email'];
	$coun=$_SESSION['rooms'];
	$cin=$_SESSION['checkin'];
	$cout=$_SESSION['checkout'];
	$query="insert into booked_rooms(email,hotel_id,no_of_rooms,checkin,checkout) values('$mail','$idi','$coun','$cin','$cout')";
	
	$quer="update hotel set no_of_rooms=no_of_rooms-'$coun' where id='$idi'";
	
	mysql_query($query,$conn);
	mysql_query($quer,$conn);
	
	echo "<b>Successfully booked!</b><br />";
	echo "Hotel Name: ".$name['name'] ."<br />Checkin: ".$_SESSION['checkin']."<br />Checkout: ".$_SESSION['checkout'];

}
?>
</div>
</body>
</html>