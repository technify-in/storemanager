<?php


require('../db.php');


if (isset($_GET['term'])){
	$return_arr = array();

	try {
	    $conn = new PDO("mysql:host=".DB_SERVER.";port=8889;dbname=".DB_NAME, DB_USER, DB_PASSWORD);
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	    $stmt = $conn->prepare("SELECT  bill_date,vid FROM vbill WHERE vat_bill_id=$_GET[term]");
	    $stmt->execute();

	    while($row = $stmt->fetch()) {
	        $return_arr[] =  $row;
	    }

	} catch(PDOException $e) {
	    echo 'ERROR: ' . $e->getMessage();
	}


    /* Toss back results as json encoded array. */
    echo json_encode($return_arr);
}


?>
