<html>
<head>
<style>
a {
    text-decoration: none;
}
a:link, a:visited {
    color: black;
}
a:hover {
    color: red;
}
</style>
</head>

<body style="background-color:rgb(220,230,250)">

<?php
$con=mysql_connect('localhost','root','') or die(mysql_error());
 mysql_select_db('mmt') or die(mysql_error());

 session_start();
if(isset($_POST['Hotels']))
{ 
	$city=$_POST['citylist'];
	

    $count=$_POST['rooms'];
	
	$_SESSION['checkin']=$_POST['checkin'];
	$_SESSION['checkout']=$_POST['checkout'];
	$_SESSION['rooms']=$count;
	
 if($city!='')
 {
	 
     $result = mysql_query("select * from hotel where city='$city'");
 
      echo "<table border=2 cellspacing=2 cellpadding=5>
      <thead>
        <tr>
		  <th>Hotel ID</th>
          <th>Hotel Name</th>
          <th>Area</th>
          <th>City</th>
          <th>Cost</th>
		  <th>Review</th>
          </tr>
      </thead>
      <tbody>";
  
      while( $row = mysql_fetch_assoc($result) ){
		  $i=$row['id'];
		if($count <= $row['no_of_rooms']){
            echo
            "<tr>
			  <td>{$row['id']}</td>	
              <td><a href=hotel2.php?nm=$i>{$row['name']}</a></td>
              <td>{$row['area']}</td>
              <td>{$row['city']}</td>
              <td>{$row['cost']}</td>
			  <td><a href=hotelr.php?nm=$i>Click Here</a></td>
              </tr>\n";
          }
		else
		{	
		} 
	  }
 }
else
{
	echo '<script>alert("Choose a city name");</script>';
} 
}
?>
</table>



</body>
</html>