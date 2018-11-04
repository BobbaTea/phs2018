<?php

echo $_COOKIE['login_user'];
$handle = "@realDonaldTrump";
$hello = $_COOKIE['login_user'];
exec("python3 /var/www/html/BackEnd/Classification.py ".$handle." ". $hello);
echo "python3 /var/www/html/BackEnd/Classification.py ".$handle." ". $hello;
//header('Location: analysis.php'); 


?>
