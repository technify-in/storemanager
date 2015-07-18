<?php
(session_id() == '')?session_start():$y=0;
if(isset($_SESSION['username'])){
  $username = $_SESSION['username'];
  $logged=1;
}
else{
  $logged=0;
  $username=0;
}
?>
