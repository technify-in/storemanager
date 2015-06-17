<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/main.css">

<?php
date_default_timezone_set('Asia/Kolkata');
session_start();
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



<div class="main_box">
<a class="list-group-item" href="dashboard.php"><i class="fa fa-home fa-fw"></i>&nbsp; Home</a>
      <form action="add.php" method="GET">
        <center><h2>product</h2></center>

        <div class="small_box">
              <div class="lft" >product name</div>
            <div class="rgt"><input name="name" type='text' class="name" required></div><br>
            <div class="lft" >sku</div>
            <div class="rgt"><input name="sku" type='text' class="sku" required></div><br>
              <div class="lft">imei</div>
              <div class="rgt" > <input name="imei" type='text' class="imei" ></div><br>
              <div class="lft">s no</div>
              <div class="rgt"><input name="sno" type='text' class="sno" required></div><br>
              <div class="lft">dp</div>
              <div class="rgt"><input name="dp" type='text' class="dp" required></div><br>
              <div class="lft">vat</div>
              <div class="rgt"><input name="vat" type='text' class="vat" ></div><br>
              <div class="lft">price</div>
              <div class="rgt"><input name="mrp" type='text' class="mrp" required></div><br>
              <div class="lft">quantity</div>
              <div class="rgt"><input name="qty" type='text' class="qty"></div><br>
              <div class="lft">type</div>
              <div class="rgt"> 
              
              <div class="tabs">
   <div class="tab">
       <input type="radio" id="tab-1" name="type" checked>
       <label for="tab-1">A</label>
       
   </div>
    
   <div class="tab">
       <input type="radio" id="tab-2" name="type">
       <label for="tab-2">B</label>
       
   </div>
    
    <div class="tab">
       <input type="radio" id="tab-3" name="type">
       <label for="tab-3">C</label>
   
   </div>
    
</div>


              
              
              
              
              </div><br>
            </div>

          <center><input type="submit"></center>
      </form>
</div>


<link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery-ui.js"></script>
<script type="text/javascript">
$(function() {

	//autocomplete
  $(".name").autocomplete({
		source: "search/name.php",
		minLength: 1
	});

 

  $(".sno").autocomplete({
		source: "search/sno.php",
		minLength: 1
	});

  $(".dp").autocomplete({
  		source: "search/dp.php",
  		minLength: 1
  	});

  $(".vat").autocomplete({
    		source: "search/vat.php",
    		minLength: 1
    	});
  $(".mrp").autocomplete({
      		source: "search/mrp.php",
      		minLength: 1
      	});

  $(".imei").autocomplete({
        		source: "search/imei.php",
        		minLength: 1
        	});


$(".name").focusout(

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
		
			if((res[0][0] !="") && ( res[0][0] != null) ){
		        $(".sku").val(res[0][0])
		        $(".sku").prop('readonly', true);
		        $(".sku").attr('style', "color:lightgrey");
		        
		       }
		       else{
		       	 $(".sku").prop('readonly', false);
		        $(".sku").attr('style', "color:black");
		       
		       }
		}
              }
            xmlhttp.open("POST","search/sku.php?term="+$(".name").val(),true);
            xmlhttp.send();


            }



          );
          
          
          

});



</script>
