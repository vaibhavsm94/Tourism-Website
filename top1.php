<html>
<style type="text/css">
ul {
    list-style-type: none;
    margin: 0;
	position: absolute;
    right: 0px;
    width: 200px;
    padding: 0px;
    background-color: #444;
	border-radius:20px;
}

li {
    float: right;
}

li a {
    display: inline-block;
    color: white;
    text-align: right;
    padding: 14px 16px;
    text-decoration: none;
	border-radius:20px;
}

li a:hover {
    background-color: #111;
	border-radius:20px;
}
img {
	color: white;
    padding: 0px 0px;
	border-radius:20px;
}

</style>
</head>
<body style="background-color:orange">
<table border=0>
<tr>
<td>
<a href="home1.html" target="main"> <img src="img\mmtr.jpg" height="100%" width="100%"> </a>
</td>
<td>

<ul>
  <li><a class="active" href="logout.php" target="_top">LogOut</a></li>
  <li><a href="profile.php" target="_top"><?php session_start(); 
												echo $_SESSION['username'];
												?>
											</a></li>
</ul>
</td>
</tr>
</table>
</body>
</html>