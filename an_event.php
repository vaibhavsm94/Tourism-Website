<html>
<head>
<style type = "text/css">
#title{
	font-size:40px;
}
#cost{
	float:right;
}
.head{
	font-weight:bold;
	font-size:30px;
}
#brief{
	font-style:italic;
	font-size:20px;
}
#table{
	padding:0px;
	font-family:cursive;
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
.sx {
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
.sx {
    background-color: white; 
    color: black; 
    border: 2px solid #f44336;
}

.sx:hover {
    background-color: #f44336;
    color: white;
}
</style>
</head>

<?php
	session_start();
	if(!(isset($_SESSION['id'])) || $_SESSION['id']==""){
		$id = $_GET['id2'];
		$_SESSION['id'] = $id;
	}
	else{
		$id = $_SESSION['id'];
		unset($_SESSION['id']);
		$_SESSION['id'] = "";
	}
	$conn=mysql_connect("localhost","root","");
	mysql_select_db("mmt");
	$query = "SELECT * from activity where id = '$id'";
	
	$result = mysql_query($query);
	if($result == FALSE){
		echo "error";
	}
	$row = mysql_fetch_array($result);
	$img = $row['img'];
	$title = $row['title'];
	$cost = $row['cost'];
	$brief = $row['brief'];
	$desc = $row['discription'];
	$inc = $row['Inclusions'];
	$venue = $row['Venue'];
	$timings = $row['timings'];
	$duration = $row['duration'];
	echo "<table id = \"table\" border = \"1\" cellspacing = \"0\">
			<tr>
				<td>
					<img src = $img width = 600 height = 430><br/>
					<span id = \"title\">$title<br /><form action = \"actr.php?namm=$id\" method = \"POST\">
						<input type = \"submit\" value = \"Reviews\" name = \"rev\" class=\"sx\" >
					</form></span>
					
					<p><span id = \"brief\">$brief</span></p>
				</td>
				<td>
					<span class = \"head\">Description:</span><br/>$desc<hr/>
					<p><span class = \"head\">Inclusions:</span><br/>$inc</p><hr/>
					<p><span class = \"head\">Venue:<br/></span>$venue</p><hr/>
					<p><span class = \"head\">Timings:<br/></span>$timings</p><hr/>
					<p><span class = \"head\">Duration:<br/></span>$duration</p><hr/>
					<p><span class = \"head\">Price:<br/></span>$cost</p></hr>
					
					<form action = \"book.php\" method = \"POST\">
						<input type = \"submit\" value = \"BOOK\" name = \"book\" class=\"sy\">
					</form>
				</td>
			</tr>
		</table>";
		
?>

</html>