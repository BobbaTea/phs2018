<?php
set_time_limit(240);
$handle = "@realDonaldTrump";
$hello = $_COOKIE['login_user'];
$shellx = "python3 /var/www/html/BackEnd/Classification.py ".$handle." ". $_COOKIE['login_user'];
exec($shellx);
echo $shellx;
//header('Location: analysis.php'); 
?>
