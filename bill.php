
<?php
session_start();
date_default_timezone_set('Asia/Kolkata');

require('connect.php');
//3.1.4 if the user is logged in Greets the user with message
if (isset($_SESSION['username'])){
  $username = $_SESSION['username'];
  if(isset($_REQUEST['msg'])){
    }
    }
  else{
    header('Location: index.php?msg=invalid login');
    }
?>

<?php

	require('connect.php');

	if(isset($_REQUEST['id'])){
		$cid=$_REQUEST['id'];
	}
	else{
	
	
	
		$name=$_REQUEST['name'];
		$add=$_REQUEST['address'];
		$mobile=$_REQUEST['contact'];
		$email=$_REQUEST['email'];

	      $qry="INSERT INTO `customers`".
      		" (`name`, `address`, `mobile`, `email`)".
      		" VALUES ('$_REQUEST[name]', '$_REQUEST[address]', '$_REQUEST[contact]', '$_REQUEST[email]');";


    		$result = mysql_query($qry) or die(mysql_error());
		if($result){//header('Location: dashboard.php?msg=<span style="color:green">product added</span>');
		}
		else{header('Location: dashboard.php?msg=<span style="color:red">error generating bill</span>');}

  		$qry3="select id FROM `customers` where mobile='".$_REQUEST['contact']."'";
	
   		 $result3 = mysql_query($qry3) or die(mysql_error());


		$array3 = mysql_fetch_array($result3);
		$cid=$array3['id'];
		
  	
  	}
  	
		 $qry="INSERT INTO `sales`".
      		" (`pid`, `cid`, `mode`, `remarks`)".
      		" VALUES ('$pid', '$cid', '$_REQUEST[method]', '$_REQUEST[remarks]');";


    		$result = mysql_query($qry) or die(mysql_error());
		$bid = mysql_insert_id();

		if($result){//header('Location: dashboard.php?msg=<span style="color:green">product added</span>');
		}
		else{header('Location: dashboard.php?msg=<span style="color:red">error generating bill</span>');}



  	foreach($_REQUEST[pid] as $pid)
  	{
  	
  		      $qry2="update products set sold='1' where id=$pid;";


    		$result2 = mysql_query($qry2) or die(mysql_error());
		if($result2){//header('Location: dashboard.php?msg=<span style="color:green">product added</span>');
		}
		else{header('Location: dashboard.php?msg=<span style="color:red">error generating bill</span>');}
		
		  $qry2="update products set pid='$bid' where id=$pid;";


    		$result2 = mysql_query($qry2) or die(mysql_error());
		if($result2){//header('Location: dashboard.php?msg=<span style="color:green">product added</span>');
		}
		else{header('Location: dashboard.php?msg=<span style="color:red">error generating bill</span>');}
		
	}		
	
	      
		
		
	

?>


<?php
header("Location: bill_print.php?id=$bid");

?>




