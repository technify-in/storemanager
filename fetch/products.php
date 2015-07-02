
<?php
require('../db.php');


      $qry="select `id`, `sku`, `imei`, `sno`, `pid`, `name`, `tax`, `dp`, `mrp`, `vat_bill_id`, `stock_type` FROM `products` where `sold` != '1' ";

    $result = mysql_query($qry) or die(mysql_error());


$x=array("id"=>"id","sku"=>"sku","imei"=>"imei","sno"=>"sno","pid"=>"pid","name"=>"name","tax"=>"tax","dp"=>"dp","mrp"=>"mrp","vat_bill_id"=>"vat_bill_id","stock_type"=>"stock_type");

$jsonData = array();
while ($array = mysql_fetch_assoc($result)) {
    $jsonData[] = $array;
}

array_unshift($jsonData,$x);
echo json_encode($jsonData)


?>


