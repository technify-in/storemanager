
<?php
session_start();
date_default_timezone_set('Asia/Kolkata');

require('connect.php');
//3.1.4 if the user is logged in Greets the user with message
if (isset($_SESSION['username'])){
  $username = $_SESSION['username'];
  if(isset($_REQUEST['msg'])){
    echo "<p style=\"float:right;display:block;width:100%;height:30px;text-align:right\">".$_REQUEST['msg']." " . $username . " ";
  }
  else{
  echo "<p style=\"float:right;display:block;width:100%;height:30px;text-align:right\">Hi " . $username . " ";
  echo " ";
  }
echo "<a href='logout.php'>Logout</a></p>";
    }
  else{
    header('Location: index.php?msg=invalid login');
    }
?>

<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/main.css">


<div class="main_box">
<a class="list-group-item" href="dashboard.php"><i class="fa fa-home fa-fw"></i>&nbsp; Home</a>


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
  	
  	
  		      $qry2="update products set sold='1' where id=$_REQUEST[pid];";


    		$result2 = mysql_query($qry2) or die(mysql_error());
		if($result2){//header('Location: dashboard.php?msg=<span style="color:green">product added</span>');
		}
		else{header('Location: dashboard.php?msg=<span style="color:red">error generating bill</span>');}
		
		
	
	      
		
		
		 $qry="INSERT INTO `sales`".
      		" (`pid`, `cid`, `mode`, `remarks`)".
      		" VALUES ('$_REQUEST[pid]', '$cid', '$_REQUEST[method]', '$_REQUEST[remarks]');";


    		$result = mysql_query($qry) or die(mysql_error());
		if($result){//header('Location: dashboard.php?msg=<span style="color:green">product added</span>');
		}
		else{header('Location: dashboard.php?msg=<span style="color:red">error generating bill</span>');}


?>


<link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery-ui.js"></script>



       <center><h2>Bill</h2></center>

        <div class="small_box">
        <u><h3 style="font-weight:normal">Customer details</h3></u> <br/>
 
 
<?php

             $qry="SELECT * FROM `customers` where id='$cid' ;";

		
   	 	$result = mysql_query($qry) or die(mysql_error());

	
	        $array = mysql_fetch_assoc($result);
		
		print "<div class=\"lft\" >Name: </div>".$array['name'] . "<br/>";
		print "<div class=\"lft\" >Address: </div>".$array['address'] . "<br/>";

		print "<div class=\"lft\" >Mobile: </div>".$array['mobile'] . "<br/>";
		
		print "<div class=\"lft\" >Email: </div>".$array['email'] . "<br/><br/>";

      $qry="SELECT * FROM `products` where id='$_REQUEST[pid]' ;";

		
   	 	$result = mysql_query($qry) or die(mysql_error());

	
	        $array = mysql_fetch_assoc($result);
		
	
		print '<br/> <u><h3 style="font-weight:normal">Product details</h3></u> <br/>';
	
		print "<div class=\"lft\" >Name: </div>".$array['name'] . "<br/>";
		print "<div class=\"lft\" >SKU: </div>".$array['sku'] . "<br/>";

		print "<div class=\"lft\" >IMEI: </div>".$array['imei'] . "<br/>";
		
		print "<div class=\"lft\" >S.No: </div>".$array['sno'] . "<br/>";
		print "<div class=\"lft\" >MRP: </div>".$array['mrp'] . "<br/>";	
		print "<div class=\"lft\" >Tax: </div>".$array['tax'] . "<br/>";	


?>

</div>



</div>
        




