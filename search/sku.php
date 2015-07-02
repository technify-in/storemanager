<?php

require('../db.php');


if (isset($_GET['term'])){
	$return_arr = array();
	//echo "==".$_GET['term']."==";
	try {
	    $conn = new PDO("mysql:host=".DB_SERVER.";port=8889;dbname=".DB_NAME, DB_USER, DB_PASSWORD);
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	//echo "SELECT distinct SKU FROM stockitemtypes WHERE type='$_GET[term]'";
	    $stmt = $conn->prepare("SELECT distinct SKU FROM stockitemtypes WHERE type='$_GET[term]'");
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
