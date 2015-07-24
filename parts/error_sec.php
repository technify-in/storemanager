<?php

if(isset($_SESSION['error'])){
$e=$_SESSION['error'];
unset($_SESSION['error']);
}
else{
	header("Location:index.php");
	die(0);
}
 ?>


<?php
// print $e;

switch ($e) {
	case 'cnf':
		echo "<b>config file error</b><br />find the config file variable in <br />mysql.php file and fix it";
		break;
	case 'dbe':
		echo "<b>mysql connection error</b><br />connection error occured error code:$_SESSION[code] <br />contact administrator";
		break;
	case 'inp':
		echo "<b>erro Inserting Product</b><br />".$_SESSION['mess']." <br />contact administrator";
		break;
  case 1:
		//header("Location:index.php");
		die(0);
    break;
  case 2:
    echo "i equals 2";
    break;
}


 ?>
