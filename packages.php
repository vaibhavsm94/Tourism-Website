<!DOCTYPE html>
<html>
<style type="text/css">
body {
	background-size: cover;
    background-repeat: no-repeat;
    padding-top: 5px;
}
input,select{
	border-radius:10px;
	font-size:20px;
}
#cost{
	color:white;
	font-size:18px;
}

#event{
	width:300px;
	height:310px;
}
#title{
	align:right;
}
img{
	border:2px solid white;
}
a:link, a:visited {
    color: black;
}
a:hover {
    color: red;
}
</style>
<script>

</script>
<body >

<?php
$con=mysql_connect('localhost','root','') or die(mysql_error());
 mysql_select_db('mmt') or die(mysql_error());

 session_start();
 $city_name = $_POST['city_name'];
 
echo "<span style = \"font-size:30px; background-color:grey;padding:8px\">Places to visit in </span><br /><br />";
?>
<form action = "packages.php" method = "POST">
<select id="acity" name = "city_name" onchange = "this.form.submit()">
<?php 
$result = mysql_query("select distinct destn from package");
while( $row = mysql_fetch_assoc($result)){
	$city = $row['destn'];
	if($city != $city_name){
		echo "<option value='$city' >$city</option>";
    }
	else{
		echo "<option value='$city' selected = selected>$city</option>";
	}
}
?>
</select>
</form>
<hr/>
<?php
 if(isset($_POST['city_name']))
{
	$city_name = $_POST['city_name'];
}
else{
	echo "Variable not set";
}
	
#echo $city_name;
$result = mysql_query("select title from package where destn ='$city_name'");
$city_img = 'img/'.$city_name.'1.jpg';
?>
<style>
  body { background-image: url('<?php echo $city_img?>'); 
}
</style>
<?php
 while( $row = mysql_fetch_assoc($result)){
	$type = $row['title'];
	echo "<span style = \"font-size:35px;background-color:grey;padding:2px\">$type</span>";
	$q = mysql_query("select * from package where title = '$type'");
	echo "<table><tr>";
	while($r = mysql_fetch_assoc($q)){
		$title = $r['title'];
		$img = $r['img'];
		$img1 = $r['img1'];
		$desc = $r['description'];
		$price = $r['cost_per_person'];
		$id = $r['id'];
		echo "<td><div id = \"event\">
				<a href=an_event1.php?idi=$id><img src = $img width = 320 height = 250><br/></a>
				<a href=an_event1.php?idi=$id><span id = \"title\" style = \"font-size:18px;\">$title</span></a><br/>
				<span id = \"cost\">Rs. $price</span><br/>
			  </div></td>";
		
	}
	echo "</tr></table><hr/>";
}

 ?>

</body>
</html>