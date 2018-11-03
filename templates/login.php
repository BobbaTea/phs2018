
<?php
   include("sessionv.php");
   if( session_verify()==true){
header('Location: analysis.php'); 
}
?>

<!DOCTYPE html>

<html>
<head></head>
<body>
<form action="loginvalidate.php" method="POST">
  
    <input type="text" name="username" placeholder="Username"><br><br>
    <input type="password" name="password" placeholder="Password">
    <input type="submit">
</form>
</body>


</html>
