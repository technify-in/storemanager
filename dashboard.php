<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

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
  echo "<p style=\"float:right;display:block;width:100%;height:30px;text-align:right\">Hi " . $username . "";
  echo "This is the Members Area";
  }
echo "<a href='logout.php'>Logout</a></p>";
    }
  else{

    header('Location: index.php?msg=invalid login');
    }
?>


<?php
echo"<center><p>";
$date = new DateTime();
echo date_format($date, 'd/m/Y H:i:s');


echo"</p>";
 ?>



<a href="new.php"></a>
<a class="list-group-item" href="new.php"><i class="fa fa-plus fa-fw"></i>&nbsp; Add Product</a>
</center>
