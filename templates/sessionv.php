<?php
function session_verify(){

if($_COOKIE["login_user"]!=""){

return true;

}else{

return false;

}
}
?>
