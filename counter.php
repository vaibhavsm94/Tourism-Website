<html>
<body>
<img src="img/b1.jpg">

<?php

$datei = fopen("countlog.txt","r");
$count = fgets($datei,1000);
fclose($datei);
$count=$count + 1 ;
echo "$count" ;
echo " hits" ;
echo "\n" ;


$datei = fopen("countlog.txt","w");
fwrite($datei, $count);
fclose($datei);

?>
</body>
</html>