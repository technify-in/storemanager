<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
date_default_timezone_set('Asia/Kolkata');
ini_set('include_path', 'parts');
// create sesstion, fetch user info and set logged and role variables
 require 'session.php';
(isset($_REQUEST['msg']))?$msg=$_REQUEST['msg']:$msg=0;

?>
