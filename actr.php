<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="stylesheet.css">
<style type="text/css">

div{
	 background-color: lightgrey;
    width: 500px;
    padding: 25px;
    border: 6px solid grey;
    margin: 25px;
}
</style>
</head>
<body background="img/re.png">

<?php
$con=mysql_connect('localhost','root','') or die(mysql_error());
 mysql_select_db('mmt') or die(mysql_error());
 
$id=$_GET['namm'];

$resul=mysql_query("select r.email,r.review,r.rating from activity_review r where r.a_id='$id' ");

while($r=mysql_fetch_assoc($resul))
{
	$mail=$r['email'];
	$rt=$r['rating'];
	$resu = mysql_query("select u.firstname,u.lastname from user u where u.email='$mail'");
	$re=mysql_fetch_assoc($resu);
	$i=0;
	echo "<center><div><p><b><font size=3>Rating:</font></b>";
	while($i<$rt)
	{
		echo "<img src='img/star5.jpg' width=25dp height=28dp/>";
		$i=$i+1;
	}	
	echo "</p>";
	
	
	echo '<b><font size=5>'.$re['firstname'].' '.$re['lastname'].'</font></b> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp'.$mail.'<br /><br />';
	
	echo $r['review']."<br /></div></center>";
	
}

?>


</body>
</html>

