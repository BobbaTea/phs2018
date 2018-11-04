<?php
set_time_limit(240);
if (php_sapi_name() == "cli") {
    $handle = "@realDonaldTrump";
$_COOKIE['login_user']=1;
$shellx = "python3 Classification.py ".$handle." ". $_COOKIE['login_user'];
exec($shellx);
echo $shellx;
} else {

  exec('php twitter.php');

  // Not in cli-mode
}

//header('Location: analysis.php'); 
?>
