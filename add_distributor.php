<?php
require('connect.php');


if( (isset($_REQUEST['name']) && isset($_REQUEST['cp']) && isset($_REQUEST['mobile'])) &&  (isset($_REQUEST['phone']) && isset($_REQUEST['tin']) && isset($_REQUEST['add'])) && (isset($_REQUEST['email']) )){
      $qry="INSERT INTO `distributors`".
      " (`name`, `contactperson`, `mobile`, `phone`, `email`, `address`, `tin` )".
      " VALUES ('$_REQUEST[name]', '$_REQUEST[cp]', '$_REQUEST[mobile]',  '$_REQUEST[phone]', '$_REQUEST[email]', '$_REQUEST[add]', '$_REQUEST[tin]');";


    $result = mysql_query($qry) or die(mysql_error());

	if($result){
	      header('Location: dashboard.php?msg=<span style="color:green">distributor added</span>');
    	}

	else{
  		header('Location: dashboard.php?msg=<span style="color:red">error adding distributor</span>');
	}


  }

else{
  header('Location: dashboard.php?msg=<span style="color:red">error adding distributor</span>');
}



?>
