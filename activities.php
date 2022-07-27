<!DOCTYPE html>
<html>
<style type="text/css">
body {
	background-size: cover;
    background-repeat: no-repeat;
    padding-top: 0px;
}
input,select{
	border-radius:10px;
	font-size:20px;
}
#cost{
	color:white;
	font-size:25px;
}

#event{
	width:350px;
	height:280px;
}
#title{
	//position:relative;
	//left:-80px;
	//top:0px;
	align:right;
}
img{
	border:2px solid white;
}
a:link, a:visited {
    color: silver;
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
echo "<span style = \"font-size:40px; background-color:grey;padding:8px\">Places to have fun in </span><br /><br />";
?>
<form action = "activities.php" method = "POST">
<select id="acity" name = "city_name" onchange = "this.form.submit()">
<?php 
$result = mysql_query("select distinct city from activity");
while( $row = mysql_fetch_assoc($result)){
	$city = $row['city'];
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
$result = mysql_query("select distinct type from activity where city ='$city_name'");
$city_img = 'img/'.$city_name.'1.jpg';
?>
<style>
  body { background-image: url('<?php echo $city_img?>'); 
  //opacity:0.5;
}
</style>
<?php
 while( $row = mysql_fetch_assoc($result)){
	$type = $row['type'];
	echo "<span style = \"font-size:35px;background-color:grey;padding:2px\">$type</span>";
	$q = mysql_query("select * from activity where type = '$type'");
	echo "<table><tr>";
	while($r = mysql_fetch_assoc($q)){
		$title = $r['title'];
		$img = $r['img'];
		$price = $r['cost'];
		$id = $r['id'];
		echo "<td><div id = \"event\">
				<a href=an_event.php?id2=$id><img src = $img width = 270 height = 200><br/></a>
				<a href=an_event.php?id2=$id><span id = \"title\" style = \"font-size:20px;\">$title</span></a><br/>
				<span id = \"cost\">Rs. $price</span><br/>
			  </div></td>";		
	}
	echo "</tr></table><hr/>";
}
 ?>
</body>
</html>