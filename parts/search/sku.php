<?php

require('../mysql.php');

if (isset($_GET['term'])){
	$return_arr = array();

	$qry="SELECT distinct SKU FROM stockitemtypes WHERE type LIKE '%$_GET[term]%' AND SKU is not NULL ";
	$db = new Db();
	$res = $db -> select(2,$qry);
//	print_r($res[1]);


	foreach ($res[1] as $value) {
	$return_arr[]=$value['SKU'];
	}

    echo json_encode($return_arr);
}


?>
