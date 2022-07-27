<html>
<head>
<link rel="shortcut icon" href="img\mmt.jpg" type="image/jpg">
<title> Login - MakeMyTrip </title>

<script type="text/javascript">	
	function Pword(i)
	{
		i.type="password";
	}
	function validate(i)
	{
		var urn=document.getElementById("un").value;
		var psw=document.getElementById("pw").value;
		if(urn=="Enter your EmailId/Phone Number" & psw=="Enter your Password")
		{
			alert("Enter Username And Password....!!");
		}
		else if(urn=="Enter your EmailId/Phone Number")
		{
			alert("Enter username....!!");
		}
		else if(psw=="Enter your Password")
		{
			alert("Enter password....!!");
		}
		else if(psw.length<8)
		{
			alert("Invalid Password");
		}
		else
		{
			window.open("index.html","_parent");
		}
	}
	function inputFocus(i)
	{
		if(i.value==i.defaultValue){ i.value=""; i.style.color="#000"; }
		}
		function inputBlur(i)
	{
		if(i.value==""){ i.value=i.defaultValue; i.style.color="lightgrey";}
	}
	function inputBlur1(i)
	{
		if(i.value==""){i.type="text"; i.value=i.defaultValue; i.style.color="lightgrey";}
	}
</script>


</head>

<body align="center" background="img\wt3.jpg">

<img src="img\mmtr.jpg">
<br/><br/>
<form method="POST" action="">

<fieldset>
<legend><h3><b>User Login</b></h3></legend>
<table border=0 align="center">
<tr><td>
	Username:</td><td><input style="color:lightgrey"id="un"type="text" onfocus="inputFocus(this)" onblur="inputBlur(this)" value="Enter your EmailId/Phone Number" size="30" name="un"></td></tr>
	<tr><td><br/></td></tr>
<tr><td>Password:</td><td><input style="color:lightgrey"id="pw"type="text" onfocus="inputFocus(this)" onblur="inputBlur1(this)" onclick="Pword(this)" value="Enter your Password" size="30" name="pass"></td></tr>
</table>

<br/>
	<input type="Submit" value="Submit" onclick="validate(this)" name="submit">
</fieldset>

</form>	

</br>
New User? <a href="signup.html" target="_self"> <b>SignUp </b></a>

<?php
session_start();
$con=mysql_connect('localhost','root','') or die(mysql_error());
 mysql_select_db('mmt') or die(mysql_error());
if(isset($_POST['submit']))
{
 
 $name=$_POST['un'];
 $pswd=$_POST['pass'];
 if($name!=''&&$pswd!='')
 {
   $query="select * from user where email='$name' and password='$pswd'";
   $q=mysql_query($query,$con);
   $res=mysql_fetch_array($q);
   if($res['user_type']=="user"){
   $qa=$res['firstname'];
    while(mysql_num_rows($q) == 1)
   {
     $name1=$res['firstname'];	
	 $name2=$res['email'];
	$_SESSION['username']=$name1;
	$_SESSION['email']=$name2;
    header('Location: index1.php');
   }
   }
   else
   {
	$qa=$res['firstname'];
    while(mysql_num_rows($q) == 1)
   {
     $name11=$res['firstname'];	
	 $name22=$res['email'];
	$_SESSION['adminname']=$name11;
	$_SESSION['adminemail']=$name22;
    header('Location: admin.php');
   }
   }  
}
}
?>

</body>
</html>

