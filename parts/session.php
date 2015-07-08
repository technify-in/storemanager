<?php
if(session_id() == '') {
    session_start();
}
if (isset($_SESSION['username'])){
  $username = $_SESSION['username'];
  $logged=1;
}
else{
$logged=0;
}


date_default_timezone_set('Asia/Kolkata');

?>
