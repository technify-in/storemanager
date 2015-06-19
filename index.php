
<?php
session_start();
date_default_timezone_set('Asia/Kolkata');

require('connect.php');
//3.1.4 if the user is logged in Greets the user with message
if (isset($_SESSION['username'])){
    header('Location: dashboard.php');
    }
  else{
   
    }
?>

<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel='stylesheet' id='fancybox-css'  href='style.css' type='text/css' media='screen' />
<?php
if (isset($_REQUEST['msg']) ){
//3.1.1 Assigning posted values to variables.
$msg = $_REQUEST['msg'];
echo $msg;

}
?>




<div class="main_box" style="margin-top:100px" >
        <center><h2>iStore</h2></center>

        <div class="small_box" >
        

<form action="login.php" method="POST">
<div class="lft" >User Name : </div>
<div class="rgt"><input id="username" type="text" name="username" placeholder="username" /></div><br>
<div class="lft" >Password&nbsp;&nbsp; : </div>
<div class="rgt"><input id="password" type="password" name="password" placeholder="password" /></div><br>


</div>        
             

          <center><input type="submit" name="submit" value="Login" ></center>
          

      </form>
</div>





