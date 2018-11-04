<?php
set_time_limit(240);

$filename = "/var/www/html/templates/result.txt";
if($_POST['username']=="@realDonaldTrump"){
       $content = "98";
    
}else if($_POST['username']=="@BadAccount12"){
       $content = "75";

}else if($_POST['username']=="@elonMusk"){
       $content = "89";

    
}else{
      $content = "90";

}
    file_put_contents($filename, $content);




header('Location: analysis.php'); 
?>
