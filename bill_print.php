<?php
session_start();
date_default_timezone_set('Asia/Kolkata');

require('connect.php');
//3.1.4 if the user is logged in Greets the user with message
if (isset($_SESSION['username'])){
  $username = $_SESSION['username'];
  if(isset($_REQUEST['msg'])){
    }
  else{
  }
    }
  else{
    header('Location: index.php?msg=invalid login');
    }
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/main.css">



        <div class="small_box2">
	<img src="images/apple.png" alt="apple" height=100px width=100px style="padding:0px;margin:0px" ><br/><br/>
 	<h3 style="font-weight:normal">Purple Scratch iStore</h3>
	SCO 90, New Leela BhaWan<br/>
	opp dominos, Patiala, 147001<br/>
 	<br/><br/>
 	info@applify.in<br/>
	info@applify.in<br/><br/>
 	 	
 	<hr style="border-bottom:none"/><br/>
     
	
	 
<?php

        $qry="SELECT * FROM `sales` where id='$_REQUEST[id]' ;";

		
   	 	$result = mysql_query($qry) or die(mysql_error());

	
	        $array = mysql_fetch_assoc($result);
	
		

		$date = date_create($array['datetime']);
		
		$d = date_format($date, 'F d,Y H:i') . "\n<br/><br/>";

          
             $qry5="SELECT * FROM `customers` where id='$array[cid]' ;";
	
		
   	 	$result5 = mysql_query($qry5) or die(mysql_error());

	
	        $array5 = mysql_fetch_assoc($result5);
		
		
		$d .= $array5['mobile'] . "<br/>";
		
      $qry6="SELECT * FROM `products` where id='$array[pid]' ;";
		
		
   	 	$result6 = mysql_query($qry6) or die(mysql_error());

	
	        $array6 = mysql_fetch_assoc($result6);
		
		$d .= '<br/><hr style="border-bottom:none"/><br/>';
	
		$d .= $array6['name'] . "<br/>";
		$d .= "<div class=\"lft\" >SKU: </div><div class='rgtt' >$array6[sku] </div><br/>";
		$d .= "<div class=\"lft\" >IMEI: </div><div class='rgtt' >$array6[imei]</div> <br/>";		
		$d .= "<div class=\"lft\" >S.No: </div><div class='rgtt' >$array6[sno]</div> <br/>";
		$d .= "<div style='float:right'> ₹$array6[mrp]</div><br/>";	
		$d .= "<div style='float:right'><div class=\"lft\" >Tax:($array6[tax]%) </div>₹".$array6['tax']*$array6['mrp']/100  . "</div><br/>";	

		$d .= '<br/><hr style="border-bottom:none"/><br/>';
		$d .= "<div style='float:right'><div class=\"lft\" style='width:auto' >Grand Total:</div>₹". (($array6['tax']*$array6['mrp']/100) + $array6['mrp'])  . "</div><br/>";	



print $d;
?>



</div>
        




