
<?php
require('../db.php');


      $qry="select `id`, `name`, `contactperson`, `address`, `phone`, `email`, `tin` from distributors";

    $result = mysql_query($qry) or die(mysql_error());


$x=array("id"=>"id","name"=>"name","contactPerson"=>"contactPerson","address"=>"address","mobile"=>"mobile","email"=>"email","tin"=>"tin");

$jsonData = array();
while ($array = mysql_fetch_assoc($result)) {
    $jsonData[] = $array;
}

array_unshift($jsonData,$x);
echo json_encode($jsonData)


?>


