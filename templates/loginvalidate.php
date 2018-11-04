<?php
  define('DB_SERVER', 'presence.cmw5zmeeepxi.us-east-1.rds.amazonaws.com:3306');
   define('DB_USERNAME', 'presence');
   define('DB_PASSWORD', 'presence');
   define('DB_DATABASE', 'presencedb');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   session_start();
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']);  
      $sql = "SELECT id FROM user WHERE username = '$myusername' AND password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      $count = mysqli_num_rows($result);	
      if($count == 1) {
//  $_SESSION['login_user'] = $myusername;
        setcookie("login_user", $row['id']);
        file_put_contents("result.txt", "0");
        header("location: analysis.php");


      }else{
         header("location: login.php");
         echo "Your Login Name or Password is invalid";
         $error = "Your Login Name or Password is invalid";
      }
?>
