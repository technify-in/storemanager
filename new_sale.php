
<?php
session_start();
date_default_timezone_set('Asia/Kolkata');

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
      <form action="confirm_sale.php" method="GET">
        <center><h2>Sales</h2></center>

        <div class="small_box">
        <u><h3 style="font-weight:normal">Customer details</h3></u> <br/>
        
              <div class="lft" > contact</div>
            <div class="rgt"><input name="contact" type='text' class="contact" required></div><br>

            <div class="lft" >Name</div>          
            <div class="rgt"><input name="name" type='text' class="name" required></div><br>

              <div class="lft">Email</div>
              <div class="rgt" > <input name="email" type='text' class="email" ></div><br>

              <div class="lft">Address</div>
                        <div class="rgt"><input name="address" type='text' class="address" required></div><br>
          
          
        <u><h3 style="font-weight:normal">Product</h3></u><br/>    
      
      		
      		
      		<div class="product_div" >
            <div class="product_pan" >
              <div class="lft">p_detail</div>
              <div class="rgt"><input name="id[]" type='text' class="id" > <div class="add_it" style="float:right">+</div></div><br>
		</div>
             </div>
             
             
             
             
             
              <div class="lft">Payment</div>          
              <div class="rgt"> 
                          <div class="tabs2">
   <div class="tab new_tab">
       <input type="radio" id="tab-1" name="type" value="cash" checked>
       <label for="tab-1">Cash</label>
       
   </div>
    
   <div class="tab new_tab">
       <input type="radio" id="tab-2" name="type"  value="Bajaj" >
       <label for="tab-2">Bajaj Finance</label>
       
   </div>
    
    <div class="tab new_tab">
       <input type="radio" id="tab-3" name="type"  value="Card" >
       <label for="tab-3">Card</label>
   
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
  $(".contact").autocomplete({
		source: "search/contact.php",
		minLength: 1
	});
 $(".id").autocomplete({
		source: "search/p_details.php",
		minLength: 1
	});

function xyz(){
$('.rem_it').click(function(){

$(this).parent().parent().remove();

});
}


$(".add_it").click(function(){

$('.product_div').append(' <div class="product_pan" ><div class="lft">p_detail</div><div class="rgt"><input name="id[]" value="'+ $($('.id')[0]).val() +'" type=\'text\' class="id" > <div class="rem_it" style="float:right">-</div></div><br></div>');
xyz();
$($('.id')[0]).val("");
});


 

$(".contact").focusout(

            function(){
              var xmlhttp;
            if (window.XMLHttpRequest)            {// code for IE7+, Firefox, Chrome, Opera, Safari
              xmlhttp=new XMLHttpRequest();              }
            else             {// code for IE6, IE5
              xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");              }
            xmlhttp.onreadystatechange=function()            {
              if (xmlhttp.readyState==4 && xmlhttp.status==200)              {
                  var res=JSON.parse(xmlhttp.responseText);
		
			if(    (res[0]['name'] != null)  &&  (res[0]['name'] != "")  ){
			
			 $(".name").val(res[0]['name'])
		        $(".name").prop('readonly', true);
		        $(".name").attr('style', "color:lightgrey");		  }
		  else{		  
		      $(".name").prop('readonly', false);
		        $(".name").attr('style', "color:black");}
		         if(    (res[0]['email'] != null)  &&  (res[0]['email'] != "")  ){	
		        $(".email").val(res[0]['email'])
		        $(".email").prop('readonly', true);
		        $(".email").attr('style', "color:lightgrey");        }

		  else{  
		      $(".email").prop('readonly', false);
		        $(".email").attr('style', "color:black");    }  
		       if(    (res[0]['address'] != null)  &&  (res[0]['address'] != "")  ){
		        $(".address").val(res[0]['address'])
		        $(".address").prop('readonly', true);
		        $(".address").attr('style', "color:lightgrey");     }
		  else{
		      $(".address").prop('readonly', false);
		        $(".address").attr('style', "color:black");}    
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
