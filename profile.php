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

<script>

function valid()
{
	return confirm("Are you sure to cancel your booking");
}

</script>

<body background="img/b4.png">


<?php
$con=mysql_connect('localhost','root','') or die(mysql_error());
 mysql_select_db('mmt') or die(mysql_error());
 
session_start();

echo "<br />Hi <h3><b>". $_SESSION['username']."</b></h3>";

echo "<br /><b>Here are your bookings: </b>";
echo "<br /><br /><b>Hotels</b><br /><br />";

$mail=$_SESSION['email'];

$res =  mysql_query("select h.name,h.area,h.city,r.checkin,r.checkout,r.no_of_rooms,r.bookid from hotel h,booked_rooms r where r.email='$mail' and r.hotel_id=h.id");
 
      echo "<table border=2 cellspacing=0 cellpadding=15px>
      <thead>
        <tr>
          <th>Hotel Name</th>
		  <th>Area</th>
		  <th>City</th>
          <th>Checkin</th>
		  <th>Checkout</th>
		  <th>No of Rooms</th>
		  <th>Review/Cancel</th>
          </tr>
      </thead>
      <tbody>";
	  $i=0;
      while($row = mysql_fetch_assoc($res))
	  {
		      $i=$row['bookid'];
			  $date = date('Y-m-d');
			  $check=strtotime($row['checkout']);
			  $d=strtotime($date);  
		  
		   
	
            echo
            "<tr>	
              <td>{$row['name']}</td>
			  <td>{$row['area']}</td>
			  <td>{$row['city']}</td>
              <td>{$row['checkin']}</td>
              <td>{$row['checkout']}</td>
			  <td><center>{$row['no_of_rooms']}</center></td>";
			  if($d > $check)
			{
			  echo"<td><a href=review.php?name=$i>Review</a></td>"; 
			  
			} 
		   else
		   {
			   
			  echo"<td><a href=cancel.php?name=$i onClick=\"return valid()\">Cancel</a></td>";
			   
		   }
		   echo"</tr>\n";
			  
	  } 
	  echo "</table>\n";
	  
	  
	  echo "<br /><br /><b>Holiday Packages</b><br /><br />";

$resu =  mysql_query("select h1.title,h1.duration,h1.destn,h1.cost_per_person,r1.no_of_people,r1.date,r1.package_id from package h1,booked_package r1 where r1.email='$mail' and r1.package_id=h1.id");
 
      echo "<table border=2 cellspacing=0 cellpadding=15px>
      <thead>
        <tr>
          <th>Package Name</th>
		  <th>Duration</th>
		  <th>Destination City</th>
		  <th>Cost per person</th>
		  <th>No of people</th>
		  <th>Review/Cancel</th>
          </tr>
      </thead>
      <tbody>";
	  $i1=0;
      while($roww = mysql_fetch_assoc($resu))
	  {
		      $i1=$roww['package_id'];
			  $date1 = date('Y-m-d');
			  $check1=strtotime($roww['date']);
			  $d1=strtotime($date1);  
		  
		   
	
            echo
            "<tr>	
              <td>{$roww['title']}</td>
			  <td>{$roww['duration']}</td>
			  <td>{$roww['destn']}</td>
              <td>{$roww['cost_per_person']}</td>
			  <td><center>{$roww['no_of_people']}</center></td>";
			  if($d1 > $check1)
			{
			  echo"<td><a href=review1.php?naam=$i1>Review</a></td>"; 
			  
			} 
		   else
		   {
			   
			  echo"<td><a href=cancel1.php?naam=$i1 onClick=\"return valid()\">Cancel</a></td>";
			   
		   }
		   echo"</tr>";
			  
	  } 
	  echo "</table>\n";
	  
	  
	  	  echo "<br /><br /><b>Activity</b><br /><br />";

$resul =  mysql_query("select h2.title,h2.duration,h2.city,h2.cost,r2.no_of_people,r2.date,r2.activity_id from activity h2,booked_activity r2 where r2.email='$mail' and r2.activity_id=h2.id");
 
      echo "<table border=2 cellspacing=0 cellpadding=15px>
      <thead>
        <tr>
          <th>Activity Name</th>
		  <th>Duration</th>
		  <th>City</th>
		  <th>Cost per person</th>
		  <th>No of people</th>
		  <th>Review/Cancel</th>
          </tr>
      </thead>
      <tbody>";
	  $i2=0;
      while($rowww = mysql_fetch_assoc($resul))
	  {
		      $i2=$rowww['activity_id'];
			  $date2 = date('Y-m-d');
			  $check2=strtotime($rowww['date']);
			  $d2=strtotime($date2);  
		  
		   
	
            echo
            "<tr>	
              <td>{$rowww['title']}</td>
			  <td>{$rowww['duration']}</td>
			  <td>{$rowww['city']}</td>
              <td>{$rowww['cost']}</td>
			  <td><center>{$rowww['no_of_people']}</center></td>";
			  if($d2 > $check2)
			{
			  echo"<td><a href=review2.php?nnam=$i2>Review</a></td>"; 
			  
			} 
		   else
		   {
			   
			  echo"<td><a href=cancel2.php?nnam=$i2 onClick=\"return valid()\">Cancel</a></td>";
			   
		   }
		   echo"</tr>";
			  
	  } 
	  echo "</table>\n";

?>
</body>
</html>