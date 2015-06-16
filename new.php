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
            <div class="rgt"><input name="name" type='text' class="name" ></div><br>
            <div class="lft" >sku</div>
            <div class="rgt"><input name="sku" type='text' class="sku" ></div><br>
              <div class="lft">imei</div>
              <div class="rgt" > <input name="imei" type='text' class="imei"></div><br>
              <div class="lft">s no</div>
              <div class="rgt"><input name="sno" type='text' class="sno" ></div><br>
              <div class="lft">dp</div>
              <div class="rgt"><input name="dp" type='text' class="dp" ></div><br>
              <div class="lft">vat</div>
              <div class="rgt"><input name="vat" type='text' class="vat"></div><br>
              <div class="lft">price</div>
              <div class="rgt"><input name="mrp" type='text' class="mrp"></div><br>
              <div class="lft">quantity</div>
              <div class="rgt"><input name="qty" type='text' class="qty"></div><br>
              <div class="lft">type</div>
              <div class="rgt">  <select name="type" class="pr_type">
		<option value="A">A</option>
		<option value="B">B</option>
		<option value="C">C</option>
	</select>
              
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

  $(".sku").autocomplete({
		source: "search/sku.php",
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





});



</script>
