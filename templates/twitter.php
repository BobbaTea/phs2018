<?php

shell_exec("python3 Classification.py ".$handle." ".$_COOKIE['id'].";" );
header('Location: analysis.php'); 


?>
