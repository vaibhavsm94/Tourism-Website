<html>
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="stylesheet.css">
<style>

</style>	
	
  </head>
  <body background="img/review11.jpg">

<form action="" method="POST">
  <div>
    <p>
     <font color="white"><b> Rating  </b></font><br />
      <span class="starRating">
        <input id="rating5" type="radio" name="ratin" value="5">
        <label for="rating5">5</label>
        <input id="rating4" type="radio" name="ratin" value="4">
        <label for="rating4">4</label>
        <input id="rating3" type="radio" name="ratin" value="3" checked>
        <label for="rating3">3</label>
        <input id="rating2" type="radio" name="ratin" value="2">
        <label for="rating2">2</label>
        <input id="rating1" type="radio" name="ratin" value="1">
        <label for="rating1">1</label>
      </span>
    </p></div><br />
<textarea rows=24 cols=80 name="rev">
Please write your review here
</textarea>
<br />
<b><input type="submit" name="hreview"></b>
</form>



<?php
$con=mysql_connect('localhost','root','') or die(mysql_error());
 mysql_select_db('mmt') or die(mysql_error());
 
$id=$_GET['namm'];
if(isset($_POST['hreview']))
{
 
	$q=mysql_query("select e.email,e.activity_id from booked_activity e where e.activity_id='$id'");
	$qo=mysql_fetch_assoc($q);
	$hotel=$qo['activity_id'];
	$mail=$qo['email'];
	$r=$_POST['rev'];
	$rt=$_POST['ratin'];
	
   $query="insert into activity_review(a_id,email,review,rating) values('$hotel','$mail','$r','$rt')";
   $q=mysql_query($query,$con);
   echo "<script>alert(\"Your review has been submitted.THANK YOU!!\");</script>";
   

   echo "<a href=\"javascript:history.go(-2)\">GO BACK</a>";
    


   
}
?>

</body>
</html>