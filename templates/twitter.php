

<?php
$handle = "@realDonaldTrump";
$hello = $_COOKIE['login_user'];
$shellx = "python3 /var/www/html/BackEnd/info.py ".$handle." ". $_COOKIE['login_user'];
$shelly = "python3 /var/www/html/BackEnd/Classification.py ".$handle." ". $_COOKIE['login_user'];
exec($shellx);
exec($shelly);
echo $shellx;
echo $shelly;
//header('Location: analysis.php'); 
?>

