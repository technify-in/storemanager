
<?php
require('../connect.php');


      $qry="select * FROM `customers` where mobile='".$_REQUEST['term']."'";
	
    $result = mysql_query($qry) or die(mysql_error());


$jsonData = array();
$array = mysql_fetch_assoc($result);
$jsonData[] = $array;

echo json_encode($jsonData);


?>


