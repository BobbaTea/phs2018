
<?php
   include("sessionv.php");
   if( session_verify()==true){
header('Location: analysis.php'); 
}
?>

<!DOCTYPE html>

<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>
<body>
<form action="loginvalidate.php" method="POST">
  
    <input type="text" name="username" placeholder="Username"><br><br>
    <input type="password" name="password" placeholder="Password">
    <input type="submit">
</form>
</body>


</html>
