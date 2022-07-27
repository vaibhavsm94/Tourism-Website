<html>
<body bgcolor="silver">


<?php
$con=mysql_connect('localhost','root','') or die(mysql_error());
 mysql_select_db('mmt') or die(mysql_error());
 
session_start();

echo "<br /><br />Hi <h3><b>". $_SESSION['adminname']."</b></h3>";
?>

<form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload: 
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>

<br />
<br />
<br />
<center>

<form action="" method="POST">

<input type="submit" value="Logout" name="logout">

</form>

</center>

<?php

$con=mysql_connect('localhost','root','') or die(mysql_error());
 mysql_select_db('mmt') or die(mysql_error());
 
if(isset($_POST['logout']))
{
	session_start();
	session_unset();
	session_destroy();

	header('Location: index.html');
}

?>
</body>
</html>


