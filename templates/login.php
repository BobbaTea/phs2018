
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
<link rel="stylesheet" href="../static/css/login.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>
<body>
<div class="container">
<h1 class = "white-text">Login</h1>
<form action="loginvalidate.php" method="POST">
    <input type="text" name="username" placeholder="Username"><br><br>
    <input type="password" name="password" placeholder="Password">
    <input type="submit" class="z-depth-5 btn-large waves-effect waves-light btn-floating btn-large" style="width: 25%;">
</form>
</div>
</body>


</html>
