
<?php
require('../connect.php');


      $qry="select `id`, `sku`, `imei`, `sno`, `pid`, `name`, `tax`, `dp`, `mrp`, `vat_bill_id`, `p_condition`, `stock_type` FROM `products`";

    $result = mysql_query($qry) or die(mysql_error());


$x=array("id"=>"id","sku"=>"sku","imei"=>"imei","sno"=>"sno","pid"=>"pid","name"=>"name","tax"=>"tax","dp"=>"dp","mrp"=>"mrp","vat_bill_id"=>"vat_bill_id","p_condition"=>"p_condition","stock_type"=>"stock_type");

$jsonData = array();
while ($array = mysql_fetch_assoc($result)) {
    $jsonData[] = $array;
}

array_unshift($jsonData,$x);
echo json_encode($jsonData)


?>


