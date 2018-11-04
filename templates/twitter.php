

<?php
$handle = "@realDonaldTrump";
$hello = $_COOKIE['login_user'];
$shellx = "python3 /var/www/html/BackEnd/info.py ".$handle." ". $_COOKIE['login_user'];
$shelly = "python3 /var/www/html/BackEnd/Classification.py ".$handle." ". $_COOKIE['login_user'];
$x = shell_exec($shellx);
$y = shell_exec($shelly);
echo $x;
echo $y;
//header('Location: analysis.php'); 
?>

