<html>
<head>
<meta name="generator" content="HTML Tidy for Linux/x86 (vers 25 March 2009), see www.w3.org">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" type="text/css">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jtot/jquery.dynatable.js"></script>
<script type="text/javascript" src="js/jquery.jsontotable.min.js"></script>
<script type="text/javascript" src="js/jquery.sieve.min.js"></script>
<script type="text/javascript" src="js/jquery.quick.pagination.min.js"></script>

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
?><?php
echo"<center><p>";
$date = new DateTime();
echo date_format($date, 'd/m/Y H:i:s');


echo"</p>";
?>

</center>
<title></title>
</head>
<body>
<div class="content_box">
	<div class="tabs">
		<div class="tab"><input type="radio" id="tab-1" name="tab-group-1"checked>
	 		<label style="margin-left:20px;" class="dummy" for="tab-1">Products</label>
				<div class="content">
					<div class="add_pro"> <a class="list-group-item" href="new.php"><i class="fa fa-plus fa-fw"></i>&nbsp; Add Product</a>
					</div>
					<div id="data-table-outer" class="jsontotable">
						<div id="data-table" class="jsontotable"></div>
					</div>
				</div>
		</div>

	<div class="tab"><input type="radio" id="tab-2" name="tab-group-1">
	<label class="dummy" for="tab-2">Distributors</label>
	<div class="content">
		
			<div class="add_pro2">
			 <a class="list-group-item2" href="new_dist.php"><i class="fa fa-plus fa-fw"></i>&nbsp; Add distributor</a>
			</div>
			<div id="data-table-outer2" class="jsontotable">
			<div id="data-table2" class="jsontotable"></div>
						</div>	
		
		
	</div>
	</div>
	<div class="tab"><input type="radio" id="tab-3" name="tab-group-1">
	<label class="dummy" for="tab-3">Sales</label>
	<div class="content">You made it this far?!</div>
	</div>
	</div>
</div>
<!--  script =================                 -->
<script type="text/javascript">


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
                $($('#data-table').children()[0]).append($(".add_pro"))
                
                }
              }


            xmlhttp.open("POST","fetch/products.php" ,true);
            xmlhttp.send();

         

	// for distributor------------------------------------
	
	      var xmlhttp2;
              var res2;
            if (window.XMLHttpRequest)
              {// code for IE7+, Firefox, Chrome, Opera, Safari
              xmlhttp2=new XMLHttpRequest();
              }
            else
              {// code for IE6, IE5
              xmlhttp2=new ActiveXObject("Microsoft.XMLHTTP");
              }
            xmlhttp2.onreadystatechange=function()
              {
              if (xmlhttp2.readyState==4 && xmlhttp2.status==200)
                {
                  var res2 = JSON.parse(xmlhttp2.responseText);
                  var input2 = JSON.stringify(res2);
                  $.jsontotable(input2, { id: "#data-table2", header: true });
             
                 $($('table')[1]).sieve();
                $('#data-table2').width($($('table')[1]).width());
                $($('#data-table2').children()[0]).addClass("searchbar");
                $($('#data-table2').children()[0]).append($(".add_pro2"))
              
             
                }
              }


            xmlhttp2.open("POST","fetch/distributors.php" ,true);
            xmlhttp2.send();

            


	}



          );

         
</script>
</body>
</html>
