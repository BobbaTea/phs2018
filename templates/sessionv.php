<?php
function session_verify(){

if($_SESSION["login_user"]!=""){

return true;

}else{

return false;

}
}
?>
