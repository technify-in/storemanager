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
      <form action="add_distributor.php" method="GET">
        <center><h2>Distributor</h2></center>

        <div class="small_box">
              <div class="lft" >distributor name</div>
            <div class="rgt"><input name="name" type='text' class="" required></div><br>
            <div class="lft" >contact person</div>
            <div class="rgt"><input name="cp" type='text' class="" required></div><br>
              <div class="lft">address</div>
              <div class="rgt" > <input name="add" type='text' class="" ></div><br>
              <div class="lft">mobile</div>
              <div class="rgt"><input name="mobile" type='text' class="" required></div><br>
              <div class="lft">phone</div>
              <div class="rgt"><input name="phone" type='text' class="" ></div><br>
              <div class="lft">email</div>
              <div class="rgt"><input name="email" type='text' class="" ></div><br>
              <div class="lft">tin</div>
              <div class="rgt"><input name="tin" type='text' class="" required></div><br>
        </div>

          <center><input type="submit"></center>
      </form>
</div>


<link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery-ui.js"></script>
<script type="text/javascript">
$(function() {       

});



</script>
