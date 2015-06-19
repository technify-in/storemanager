
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
      <form action="bill.php" method="GET">
        <center><h2>Sales</h2></center>

        <div class="small_box">
        <u><h3 style="font-weight:normal">Customer details</h3></u> <br/>
        
        <?php
        
        
              $qry="SELECT * FROM `customers` where mobile='$_REQUEST[contact]' ;";

		
   	 	$result = mysql_query($qry) or die(mysql_error());

	
	        $array = mysql_fetch_assoc($result);
		
		if(isset($array['name'])){
		print "<div class=\"lft\" >Name: </div>".$array['name'] . "<br/>";
		print "<div class=\"lft\" >Address: </div>".$array['address'] . "<br/>";

		print "<div class=\"lft\" >Mobile: </div>".$array['mobile'] . "<br/>";
		
		print "<div class=\"lft\" >Email: </div>".$array['email'] . "<br/><br/>";
		print "<input name=\"id\" type='text' class=\"id\" value='$array[id]' ><br/>";

			}
		
		else{
		print $_REQUEST['name'] . "<br/>";
		print "<input name=\"name\" type='text' class=\"name\" value='$_REQUEST[name]' ><br/>";

		print $_REQUEST['address'] . "<br/>";
		print "<input name=\"address\" type='text' class=\"address\" value='$_REQUEST[address]' ><br/>";

		print $_REQUEST['contact'] . "<br/>";
		print "<input name=\"contact\" type='text' class=\"contact\" value='$_REQUEST[contact]' ><br/>";

		print $_REQUEST['email'] . "<br/>";
		print "<input name=\"email\" type='hidden' class=\"email\" value='$_REQUEST[email]' ><br/>";
	
	}

		$id = split(";;",$_REQUEST['id']);
		
              	$id=$id[1];
              	
              $qry="SELECT * FROM `products` where id='$id' ;";

		
   	 	$result = mysql_query($qry) or die(mysql_error());

	
	        $array = mysql_fetch_assoc($result);
		
	
		print '<br/> <u><h3 style="font-weight:normal">Product details</h3></u> <br/>';
	
		print "<div class=\"lft\" >Name: </div>".$array['name'] . "<br/>";
		print "<div class=\"lft\" >SKU: </div>".$array['sku'] . "<br/>";

		print "<div class=\"lft\" >IMEI: </div>".$array['imei'] . "<br/>";
		
		print "<div class=\"lft\" >S.No: </div>".$array['sno'] . "<br/>";
		print "<div class=\"lft\" >MRP: </div>".$array['mrp'] . "<br/>";	
		print "<div class=\"lft\" >Tax: </div>".$array['tax'] . "<br/>";	
		print "<input name=\"pid\" type='hidden' class=\"pid\" value='$array[id]' ><br/>";
	
		



		
		
		
		
		
		
        
        ?>
        
       
             <div class="lft" > method</div>
            <div class="rgt"><input name="method" type="text" class="method" value="<?php print $_REQUEST['type'] ?>"required></div><br>
        
      <div class="lft" > remarks</div>
  	  <div class="rgt">   <textarea name="remarks" >Enter text here...</textarea> </div><br>

        
          <center><input type="submit" value="Generate Bill"></center>
      </form>




<link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery-ui.js"></script>
<script type="text/javascript">
$(function() {

	//autocomplete
  $(".contact").autocomplete({
		source: "search/contact.php",
		minLength: 1
	});
 $(".id").autocomplete({
		source: "search/p_details.php",
		minLength: 1
	});

 

$(".contact").focusout(

            function(){

              var xmlhttp;
            if (window.XMLHttpRequest)
              {// code for IE7+, Firefox, Chrome, Opera, Safari
              xmlhttp=new XMLHttpRequest();
              }
            else
              {// code for IE6, IE5
              xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
              }
            xmlhttp.onreadystatechange=function()
              {
              if (xmlhttp.readyState==4 && xmlhttp.status==200)
                {
                  var res=JSON.parse(xmlhttp.responseText);
		
			if(    (res[0]['name'] != null)  &&  (res[0]['name'] != "")  ){
			
			 $(".name").val(res[0]['name'])
		        $(".name").prop('readonly', true);
		        $(".name").attr('style', "color:lightgrey");
		  
		  }
		  else{
		  
		      $(".name").prop('readonly', false);
		        $(".name").attr('style', "color:black");
		  
		  
		  }
		  
		       if(    (res[0]['email'] != null)  &&  (res[0]['email'] != "")  ){
			
			
		        $(".email").val(res[0]['email'])
		        $(".email").prop('readonly', true);
		        $(".email").attr('style', "color:lightgrey");
		        }

		  else{
		  
		      $(".email").prop('readonly', false);
		        $(".email").attr('style', "color:black");
		  
		  
		  }
		     
		     
		     
		       if(    (res[0]['address'] != null)  &&  (res[0]['address'] != "")  ){
			
		     
		        $(".address").val(res[0]['address'])
		        $(".address").prop('readonly', true);
		        $(".address").attr('style', "color:lightgrey");
		       }
		  else{
		  
		      $(".address").prop('readonly', false);
		        $(".address").attr('style', "color:black");
		  
		  
		  }
		       
		  
		       
		        
		     //  }
		      /// else{
		       //	 $(".sku").prop('readonly', false);
		      //  $(".sku").attr('style', "color:black");
		       
		       //}
		       
		       
		}
              }
            xmlhttp.open("POST","fetch/user_details.php?term="+$(".contact").val(),true);
            xmlhttp.send();


            }



          );
          
          
          

});



</script>
