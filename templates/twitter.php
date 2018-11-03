<?php

shell_exec("python3 BackEnd/Classification.py ".$handle." ".$_COOKIE['id'].";" );
header('Location: analysis.php'); 


?>
