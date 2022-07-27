<html>
<style type="text/css">
input,select{
	border-radius:10px;
	font-size:25px;
}
.sy {
    background-color: #008CBA;
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
    border: 2px solid #008CBA;
}

.sy:hover {
    background-color: #008CBA;
    color: white;
}
</style>
<script type="text/javascript">

</script>

<style>
.box{
border: 1px solid black;
}
</style>
<body background="img\actvm.jpg">

<form action = "activities.php" method = "POST">

<fieldset  style="width:320px">
<legend><b><center>Activity</center></b></legend>
<table cellpadding=10>
<tr><td><b>City Name:</b></td><td><select id="acity" name = "city_name">
<option value = "select city">Select City</option>
<?php
$con=mysql_connect('localhost','root','') or die(mysql_error());
 mysql_select_db('mmt') or die(mysql_error());

 session_start();
 $result = mysql_query("select distinct city from activity");
while( $row = mysql_fetch_assoc($result)){
	$city = $row['city'];
	echo "<option value='$city' >$city</option>";
}
 ?>
</select></td></tr>
</table>
<br/>
<center><input type="Submit" name = "Activities" class="sy"></center>
</fieldset>


</form>
</body>

</html>