<?php
require('connect.php');

print_r($_REQUEST);


if( (isset($_REQUEST['sku']) && isset($_REQUEST['imei']) && isset($_REQUEST['sno'])) &&  (isset($_REQUEST['name']) && isset($_REQUEST['vat']) && isset($_REQUEST['dp'])) && (isset($_REQUEST['mrp']) )){
      $qry="INSERT INTO `products`".
      " (`sku`, `imei`, `sno`, `name`, `tax`, `dp`, `mrp`, `vat_bill_id`, `p_condition` ,`stock_type`)".
      " VALUES ('$_REQUEST[sku]', '$_REQUEST[imei]', '$_REQUEST[sno]',  '$_REQUEST[name]', '$_REQUEST[vat]', '$_REQUEST[dp]', '$_REQUEST[mrp]', '$_REQUEST[con]', '0',  '$_REQUEST[type]');";


    $result = mysql_query($qry) or die(mysql_error());

	if($result){
	      header('Location: dashboard.php?msg=product added');
    	}

	else{
  		header('Location: dashboard.php?msg=error adding product');
	}


  }

else{
  header('Location: dashboard.php?msg=error adding product');
}



?>
