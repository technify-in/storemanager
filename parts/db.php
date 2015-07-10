<?php
define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'store3');

$connection = mysql_connect(DB_SERVER, DB_USER, DB_PASSWORD);

if (!$connection){
die("Database Connection Failed" . mysql_error());
}
$select_db = mysql_select_db('store3');
if (!$select_db){
die("Database Selection Failed" . mysql_error());
}

?>
