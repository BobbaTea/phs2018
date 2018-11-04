<?php

$handle = "@realDonaldTrump";
$hello = $_COOKIE['login_user'];
exec("python3 /var/www/html/BackEnd/Classification.py ".$handle." ". $_COOKIE['login_user']);
header('Location: analysis.php'); 


?>
