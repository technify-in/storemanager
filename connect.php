<?php
$connection = mysql_connect('localhost', 'root', '123');

if (!$connection){
die("Database Connection Failed" . mysql_error());
}
$select_db = mysql_select_db('store3');
if (!$select_db){
die("Database Selection Failed" . mysql_error());
}

?>
