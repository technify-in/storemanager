
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
      <form action="add_product.php" method="GET">
        <center><h2>Product</h2></center>

        <div class="small_box">
              <div class="lft" >product name</div>
            <div class="rgt"><input name="name" type='text' class="name" required></div><br>
          <div id="sku">
            <div class="lft" >sku</div>
            <div class="rgt"><input name="sku" type='text' class="sku" required> <div class="add_css"> + </div></div> <br>
          </div>
       
          <div id="imei">
          
              <div class="lft">imei</div>
              <div class="rgt" > <input name="imei" type='text' class="imei" ><div class="add_imei"> + </div></div><br>
</div>
   <div id="sno">
       
              <div class="lft">s no</div>
              <div class="rgt"><input name="sno" type='text' class="sno" required><div class="add_sno"> + </div></div><br>
   </div> 
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
              
              <div class="tabs2">
   <div class="tab new_tab">
       <input type="radio" id="tab-1" name="type" value="A" checked>
       <label for="tab-1">A</label>
       
   </div>
    
   <div class="tab new_tab">
       <input type="radio" id="tab-2" name="type"  value="B" >
       <label for="tab-2">B</label>
       
   </div>
    
    <div class="tab new_tab">
       <input type="radio" id="tab-3" name="type"  value="C" >
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
  $(".sku").autocomplete({
		source: "search/sku_new_product.php",
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


$('.add_css ').click( function(){
	w=$('<input/>',{ type:"text",
			class:"sku",
			value:$($('.sku')[0]).val()	});
	x=$('<div>',{
	class:"rgt"});
	x.append(w);
xx=$('<div>',{
	class:"add_css sub_css"})
	.html(" ");
	x.append(xx);
	y=$('<div>',{
	class:"lft"})
	.html("sku");
	w.val($($('.sku')[0]).val());
	$('#sku').append(y);
	$('#sku').append(x);
	$('#sku').append("<br/>");});



$('.add_imei').click( function(){
	w=$('<input/>',{ type:"text",
			class:"imei",
			value:$($('.imei')[0]).val()	});
	x=$('<div>',{
	class:"rgt"});
	x.append(w);
xx=$('<div>',{
	class:"add_imei sub_css"})
	.html(" ");
	x.append(xx);
	y=$('<div>',{
	class:"lft"})
	.html("imei");
	w.val($($('.imei')[0]).val());
	$('#imei').append(y);
	$('#imei').append(x);
	$('#imei').append("<br/>");});



$('.add_sno ').click( function(){
	w=$('<input/>',{ type:"text",
			class:"sno",
			value:$($('.sno')[0]).val()	});
	x=$('<div>',{
	class:"rgt"});
	x.append(w);
xx=$('<div>',{
	class:"add_sno sub_css"})
	.html(" ");
	x.append(xx);
	y=$('<div>',{
	class:"lft"})
	.html("sno");
	w.val($($('.sno')[0]).val());
	$('#sno').append(y);
	$('#sno').append(x);
	$('#sno').append("<br/>");});







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
          
    $(".sku").focusout(
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
		        $(".name").val(res[0][0])
		        $(".name").prop('readonly', true);
		        $(".name").attr('style', "color:lightgrey");
		       }
		       else{
		       	 $(".name").prop('readonly', false);
		        $(".name").attr('style', "color:black");
		       }
		}
              }
            xmlhttp.open("POST","search/name_comp.php?term="+$(".SKU").val(),true);
            xmlhttp.send();
            }
          );
         
         
 $(".dp").focusout(
            function(){
            
            
            dp=Number($('.dp').val());
            tax=Number($('.vat').val());
         
            
 		$('.mrp').val( (dp + ( tax * 0.01 * dp ) + 0.1 * ( tax * 0.01 * dp )).toFixed(2)   );
 
            }
          );
         

         
 $(".vat").focusout(
            function(){
 	      
            
            dp=Number($('.dp').val());
            tax=Number($('.vat').val());
         
            
 	
 		$('.mrp').val( (dp + ( tax * 0.01 * dp ) + 0.1 * ( tax * 0.01 * dp )).toFixed(2)   );
 
            }
          );
         


         
 $(".mrp").focusout(
            function(){
 	      
            
            mrp=Number($('.mrp').val());
            tax=Number($('.vat').val());
         
            
 		
 		$('.dp').val(  (( mrp * 1000 ) / ( tax * 11  +  1000  )).toFixed(2) ) ;
 
            }
          );
         
          

});



</script>
