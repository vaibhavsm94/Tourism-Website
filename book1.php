<html>
<style>
.sy {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 12px 28px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
	border-radius: 8px;
}
.one
{
	color:white;
}
</style>
<body background="img/re.png">
<table>
<form action = "success1.php" method = "POST">
<?php
	if(isset($_POST['bok'])){
		echo "<tr><td><h2><b><span class=\"one\">Booking Date:</span></b></h2></td><td><input id = \"in\" type=\"date\" name=\"date\"></td></tr>
				<tr><td><h2><b><span class=\"one\">No. of People:</span></b></h2></td><td><input type=\"number\" name = \"number\" min=\"1\" max=\"10\" id=\"people\" size=\"1\"></td></tr>
				</table>
				<input type = \"submit\" name = \"booked\" value = \"Confirm booking\" class=\"sy\"></form>
			</table>";
	}
?>
</body>
</html>