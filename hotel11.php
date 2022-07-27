<html>
<link rel="stylesheet" href="1.css">
 <script src="1.js"></script> 
  <script src="2.js"></script>
<style type="text/css">
  .item{
	 background-color: lightgrey;
    border: 2px solid grey;
    
}
                  .carousel-inner > .item > img,
                  .carousel-inner > .item > a > img {
                      width: 90%;
					  height:45%;
                      margin: auto;
                  }
				  
				  
</style>

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
 
  
      while( $row = mysql_fetch_assoc($result) ){
		  $i=$row['id'];
		  $img1=$row['img1'];
		  $img2=$row['img2'];
		  $img3=$row['img3'];
		if($count <= $row['no_of_rooms']){
            print "<center><div class='container'>
  <br>
  <div id='myCarousel' class='carousel slide' data-ride='carousel' style='width: 800px; margin: 0 auto;'>
    
    <ol class='carousel-indicators'>
      <li data-target='#myCarousel' data-slide-to='0'></li>
      <li data-target='#myCarousel' data-slide-to='1'></li>
      <li data-target='#myCarousel' data-slide-to='2'></li>
    </ol>

    
    <div class='carousel-inner' role='listbox'>
	
	  <div class='item active'>
        <img src=$img1 alt='MMT' width=700 height=5 >
		<blockquote>
              <b><a href=hotel2.php?nm=$i>{$row['name']}</a></b><br />
              {$row['area']}<br />
              {$row['city']}<br />
              Rs {$row['cost']}/- &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			  <a href=hotelr.php?nm=$i>Review</a> </blockquote>
      </div>
      <div class='item'>
        <img src=$img2 alt='MMT' width=700 height=5 >
		<blockquote>
              <b><a href=hotel2.php?nm=$i>{$row['name']}</a></b><br />
              {$row['area']}<br />
              {$row['city']}<br />
              Rs {$row['cost']}/- &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			  <a href=hotelr.php?nm=$i>Review</a> </blockquote>
      </div>
	  <div class='item'>
        <img src=$img3 alt='MMT' >
		<blockquote>
              <b><a href=hotel2.php?nm=$i>{$row['name']}</a></b><br />
              {$row['area']}<br />
              {$row['city']}<br />
              Rs {$row['cost']}/- &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			  <a href=hotelr.php?nm=$i>Review</a> </blockquote>
      </div> 
      
	  </div>
    <a class='left carousel-control' href='#myCarousel' role='button' data-slide='prev'>
      <span class='glyphicon glyphicon-chevron-left' aria-hidden='true'></span>
      <span class='sr-only'>Previous</span>
    </a>
    <a class='right carousel-control' href='#myCarousel' role='button' data-slide='next'>
      <span class='glyphicon glyphicon-chevron-right' aria-hidden='true'></span>
      <span class='sr-only'>Next</span>
    </a>
  </div>
</div>
</center> ";

 }
		else
		{	
		} 
	  }
 }
else
{
	echo '<script>alert(\"Choose a city name\");</script>';
} 
}

?>
</body>
</html>