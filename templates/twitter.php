<?php

shell_exec("python3 /var/www/html/BackEnd/Classification.py ".$handle." ".$_COOKIE['id'].";" );
header('Location: analysis.php'); 


?>
