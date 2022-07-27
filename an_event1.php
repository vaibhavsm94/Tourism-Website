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
	if(!(isset($_SESSION['id1'])) || $_SESSION['id1']==""){
		$id = $_GET['idi'];
		$_SESSION['id1'] = $id;
	}
	else{
		$id = $_SESSION['id1'];
		unset($_SESSION['id1']);
		$_SESSION['id1'] = "";
	}
	$conn=mysql_connect("localhost","root","");
	mysql_select_db("mmt");
	$query = "SELECT * from package where id = $id";
	$result = mysql_query($query);
	$row = mysql_fetch_array($result);
	$img = $row['img'];
	$img1 = $row['img1'];
	$title = $row['title'];
	$cost = $row['cost_per_person'];
	$desc = $row['description'];
	$duration = $row['duration'];
	echo "<table id = \"table\" border = \"1\" cellspacing = \"0\">
			<tr>
				<td>
					<img src = $img width = 600 height = 430><br/>
					<span id = \"title\">$title <br /><form action = \"holr.php?naam=$id\" method = \"POST\">
						<input type = \"submit\" value = \"Reviews\" name = \"rev\" class=\"sx\" >
					</form></span>
					
				</td>
				<td>
					<span class = \"head\">Description:</span><br/><pre><span style = \"font-size:15px;font-family:cursive;\">$desc</span></pre><hr/>
					<p><span class = \"head\">Duration:<br/></span>$duration</p><hr/>
					<p><span class = \"head\">Price:<br/></span>Rs $cost/-</p></hr>
					
					<form action = \"book1.php\" method = \"POST\">
						<input type = \"submit\" value = \"BOOK\" name = \"bok\" class=\"sy\">
					</form>
				</td>
			</tr>
		</table>";
		
?>

</html>