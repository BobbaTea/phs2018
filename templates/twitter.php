<?php
set_time_limit(240);
if (php_sapi_name() == "cli") {
exec('php twitter.php');
} else {
  $handle = "@realDonaldTrump";
$hello = $_COOKIE['login_user'];
$shellx = "python3 Classification.py ".$handle." ". $_COOKIE['login_user'];
exec($shellx);
echo $shellx;
    // Not in cli-mode
}

//header('Location: analysis.php'); 
?>
