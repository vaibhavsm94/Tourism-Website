<html>
<body>

<form action="" method="POST">

Enter Source: <input type="text" name="source">

Enter Destination: <input type="text" name="source">

<input type="submit" name="pack" value="Book">

</form>

<?php

$imgData = file_get_contents($filename);
$size = getimagesize($filename);
mysql_connect("localhost", "$username", "$password");
mysql_select_db ("$dbname");
$sql = sprintf("INSERT INTO testblob
    (image_type, image, image_size, image_name)
    VALUES
    ('%s', '%s', '%d', '%s')",
    mysql_real_escape_string($size['mime']),
    mysql_real_escape_string($imgData),
    $size[3],
    mysql_real_escape_string($_FILES['userfile']['name'])
    );
mysql_query($sql)

