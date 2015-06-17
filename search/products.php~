
<?php
require('../connect.php');


      $qry="select * from products";

    $result = mysql_query($qry) or die(mysql_error());



$jsonData = array();
while ($array = mysql_fetch_assoc($result)) {
    $jsonData[] = $array;
}
echo json_encode($jsonData)





?>


