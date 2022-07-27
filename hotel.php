<!DOCTYPE html>
<html>

<style type="text/css">
body {
    background: url("world-travel.jpg");
    background-size: cover;
    background-repeat: no-repeat;
    padding-top: 0px;
}

input,select{
	font-size:15px;
	border-radius:20px;
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

<script>
function isvalid(){
	
	var indate = document.getElementById("in").value;
	var outdate = document.getElementById("out").value;
	var d = new Date();
	
	var pattern = /(\d{2})\-(\d{2})\-(\d{4})/;
	var dt1 = new Date(indate.replace(pattern,'$3-$1-$2'));
	var dt2 = new Date(outdate.replace(pattern,'$3-$1-$2'));
	if(dt2.getTime() < dt1.getTime()){
		document.getElementById("validity").innerHTML = "Invalid checkin/checkout date";
	}
	else{
		document.getElementById("validity").innerHTML = "";
	}
}
</script>
<body style="background-color:rgb(111,173,204)">

<form action="hotel11.php" method="POST">

<table>
<tr><td><h4><b>City Name:</b></h4></td><td><select name="citylist" >
  <option value="Srinagar" >Srinagar</option>
  <option value="Goa">Goa</option>
  <option value="Mysore">Mysore</option>
  <option value="Darjeeling">Darjeeling</option>
</select></td></tr>



<tr><td><h4><b>Checkin:</b></h4></td><td><input type="date" name="checkin" id="in"></td></tr>
<tr><td><h4><b>Checkout:</b></h4></td><td><input type="date" name="checkout" id="out" onchange = "isvalid()"></td><td><p id = "validity" style = "color:red;"></p></td></tr>
<tr><td><h4><b>Rooms:</b></h4></td><td><input type="number" min="0" id="room" value=1 size=1 name="rooms"></td></tr>
<tr><td><h3><b>Adults:</b></h3></td><td><input type="number" min="0" max="10" id="adult" value="1" size=1></td></tr>
<tr><td><h4><b>Children(below 12yrs):</b></h4></td><td> <input type="number" min="0" max="10" id="child" value="1" size=1></td></tr>

</table>

<input type="submit" name="Hotels" class="sy">
  
</form>

</body>
</html>