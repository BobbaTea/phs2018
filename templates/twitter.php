<?php

$handle = $_POST['handle'];
$hello = $_COOKIE['login_user'];
$shellx = "python3 /var/www/html/BackEnd/Classification.py ".$handle." ". $_COOKIE['login_user'];
exec($shellx);
echo $shellx;
header('Location: analysis.php'); 


?>
