<?php

$db = mysqli_connect('presence.cmw5zmeeepxi.us-east-1.rds.amazonaws.com', 'presence', 'presence', 'presencedb')
    OR die(mysql_error());

// Query
$query = sprintf("SELECT * FROM user WHERE username='%s' AND password='%s'",
       mysqli_real_escape_string($_POST['username']),
       mysqli_real_escape_string($_POST['password']);
            
       $result = mysqli_query($db,$query);
       $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
      
       $count = mysqli_num_rows($result);
                 
                 if($count == 1){
                     echo "Logged in";
                 }else{
                     echo "yeah no";
                 }
            
?>
   
