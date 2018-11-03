<?php
$link = mysql_connect('presence.cmw5zmeeepxi.us-east-1.rds.amazonaws.com', 'presence', 'presence')
    OR die(mysql_error());

// Query
$query = sprintf("SELECT * FROM users WHERE user='%s' AND password='%s'",
            mysql_real_escape_string($_POST['username']),
            mysql_real_escape_string($_POST['password']);
            
            
            
?>
