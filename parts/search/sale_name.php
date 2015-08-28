<?php

require('../mysql.php');

if (isset($_GET['term'])){
	$return_arr = array();

	$qry="SELECT CONCAT( `products`.`id`,':', `products`.`sku`,':', `products`.`imei`,':', `products`.`sno`,':', `products`.`pid`,':', `products`.`name`,':', `products`.`tax`,':', `products`.`dp`,':', `products`.`mrp`,':', `products`.`vat_bill_id`,':', `products`.`stock_type`,':', `products`.`sold` ) h FROM `products` JOIN (select id, CONCAT( `id`,':', `sku`,':', `imei`,':', `sno`,':', `pid`,':', `name`,':', `tax`,':', `dp`,':', `mrp`,':', `vat_bill_id`,':', `stock_type`,':', `sold` ) con from products) t where t.id = products.id AND t.con LIKE '%$_GET[term]%' ";
	$db = new Db();
	$res = $db -> select(2,$qry);
//	print_r($res[1]);


	foreach ($res[1] as $value) {
	$return_arr[]=$value['h'];
	}

    echo json_encode($return_arr);
}


?>
