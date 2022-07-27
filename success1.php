<html>
<body>

<b>BOOKED SUCCESSFULLY</b>

<?php
session_start();
if(isset($_POST['booked'])){
		$con=mysql_connect('localhost','root','') or die(mysql_error());
		mysql_select_db('mmt') or die(mysql_error());
		$mail = $_SESSION['email'];
		$date = $_POST['date'];
		$no = $_POST['number'];
		$id = $_SESSION['id1'];
		$query = "insert into booked_package(email,package_id,no_of_people,date) values('$mail','$id','$no','$date')";
		$result = mysql_query($query);
		if($result){	
			echo "<script type=\"text/javascript\">window.open(\"index1.php\",\"_top\");</script>";
		}
		else{
			echo "error";
		}	
	}


?>
</body>
</html>