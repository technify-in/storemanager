<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jtot/jquery.dynatable.js"></script>
<script type="text/javascript" src="js/jquery.jsontotable.min.js"></script>
<script type="text/javascript" src="js/jquery.sieve.min.js"></script>


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


<div class="clear">
	<a href="new.php"></a>
	<a class="list-group-item" href="new.php"><i class="fa fa-plus fa-fw"></i>&nbsp; Add Product</a>

</div>
</center>

<h2>Products</h2>


<div id="data-table-outer" class="jsontotable">
<div id="data-table" class="jsontotable">
  
</div>
</div>


<!--  script -----------------                 -->





<script>


$(function(){
              var xmlhttp;
              var res;
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
                  var res = JSON.parse(xmlhttp.responseText);
                  var input = JSON.stringify(res);
                  $.jsontotable(input, { id: "#data-table", header: true });
                  $('table').sieve();
		$('#data-table').width($('table').width())
		$($('#data-table').children()[0]).addClass("searchbar");
		
		
                }
              }


            xmlhttp.open("POST","search/products.php" ,true);
            xmlhttp.send();

            }

          );

         
</script>
