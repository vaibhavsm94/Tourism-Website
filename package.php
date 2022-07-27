<html>
<style type="text/css">
input,select{
	border-radius:10px;
	font-size:15px;
}
</style>
<script type="text/javascript">

</script>

<style>
body{
	background-size: cover;
}
.box{
border: 1px solid black;
}
.sy {
    background-color: #f44336;
    border: none;
    color: white;
    padding: 12px 28px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
	border-radius: 8px;
}
.sy {
    background-color: white; 
    color: black; 
    border: 2px solid #f44336;
}

.sy:hover {
    background-color: #f44336;
    color: white;
}
</style>
<body background="img\wt7.jpg">

<form action = "packages.php" method = "POST">

<fieldset  style="width:250px">
<legend><b><center>Packages</center></b></legend>
<table cellpadding=10>
<tr><td><b>Destination:</b></td><td><select id="acity" name = "city_name">
<option value = "select city">Select Destination City</option>
<?php
$con=mysql_connect('localhost','root','') or die(mysql_error());
 mysql_select_db('mmt') or die(mysql_error());

 session_start();
 $result = mysql_query("select distinct destn from package");
while( $row = mysql_fetch_assoc($result)){
	$city = $row['destn'];
	echo "<option value='$city' >$city</option>";
}
 ?>
</select></td></tr>
</table>
<br/>
<center><input type="Submit" name = "Packages" class="sy"></center>
</fieldset>


</form>
</body>

</html>