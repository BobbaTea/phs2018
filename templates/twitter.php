<?php
$handle = "@realDonaldTrump";
$shell = "python3 /var/www/html/BackEnd/Classification.py ".$handle." ".$_COOKIE['login_user'];
shell_exec("python3 /var/www/html/BackEnd/Classification.py ".$handle." ".$_COOKIE['login_user'] );
echo $shell;
//header('Location: analysis.php'); 


?>
