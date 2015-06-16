<?php
/////////////////////session checking and processing////////////////////
session_start();
require('connect.php');
//3.1.4 if the user is logged in Greets the user with message
if (isset($_SESSION['username'])){
  $username = $_SESSION['username'];
  $uid=$_SESSION['uid'];
  if(isset($_REQUEST['msg'])){
    echo "<p style=\"float:right;display:block;width:100%;height:30px;text-align:right\">".$_REQUEST['msg']." " . $username . " ";
  }
  else{
  echo "<p style=\"float:right;display:block;width:100%;height:30px;text-align:right\">Hi " . $username . "";
  }
echo "<a href='logout.php'> Logout</a></p>";
    }
  else{

    header('Location: index.php?msg=invalid login');
    }

/////////////////////////////////////////////////////////////////////////////
?>

<!-- ------------------- styling ------------------------- -->

<style>
.main_box{
  margin-left: auto;
   margin-right: auto;
   width: 500px;
   min-height:400px;
   background-color: #f0f0f0;
   padding:50px;


}

.petition{
  padding:10px;
  border: 0.5 solid grey;
  background:white;
  margin-bottom:20px;
}

.p_title{
  margin:3px;

  display:block;
}

.like{
  width:50px;
  height:50px;
  float:right;
}
.count{
  float:left;

}

.t_like{
  height:20px;

}

.add{
  width:100px;
  float:right;
  margin-bottom:20px;
  margin-top:-40px;
  color:grey;
  cursor:hand;
}


.add:hover{
  width:100px;
  float:right;
  margin-bottom:20px;
  margin-top:-40px;
  color:black;
}


.headings{
  height:60px;
}

a{
  text-decoration:none;
  color:grey;
}
a:hover{
  text-decoration:none;
  color:black;
}

</style>

<!-- ------------------- page ------------------------- -->

<div class="main_box">
<div class="headings">
<center><h2>Vat bills</h2></center>
<div class="add" > <a href="new.php">add product + </a></div>
</div>
<?php

define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '123');
define('DB_NAME', 'store');


	$return_arr = array();

	try {
	    $conn = new PDO("mysql:host=".DB_SERVER.";port=8889;dbname=".DB_NAME, DB_USER, DB_PASSWORD);
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	    $stmt = $conn->prepare('SELECT  * FROM vbill ');
	    $stmt->execute();

	    while($row = $stmt->fetch()) {

		$stmt2 = $conn->prepare('SELECT  * FROM products where vat_bill_id=\''.$row['vat_bill_id'].'\'');
	    	$stmt2->execute();
		$total=0;
		$product="";
		while($row2 = $stmt2->fetch()){
		$total+=$row2['dp'];
		$product.=$row2['name'] . "[" . $row2['imei'] . "]  ";
			}
    $t='    <div class="petition" >'.
          '<div class="p_title"><b style="border-bottom:1px solid grey">'.

          $row['vat_bill_id'].

          '</b></div>'.

        '  <div class="p_detail">'.
          "".$product."".
        '  </div>';
       $t.= '<div class="t_like"><div class="count"> Amount:'.$total.'</div>  <div class="like"><form action="show.php"><input type="hidden" name="pid" value="1"><input type="hidden" name="uid" value="admin"><input type="submit" value="show">  </form>  </div></div>';
        
        $x=0;
        $t=$t.'</div>';

        echo $t;

	    }


	} catch(PDOException $e) {
	    echo 'ERROR: ' . $e->getMessage();
	}



?>

</div>

<!-- ------------------- script ------------------------- -->

<script type="text/javascript">

</script>
