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
		        $(".address").attr('style', "color:lightgrey");     }
		        $(".email").attr('style', "color:black");    }
		       if(    (res[0]['address'] != null)  &&  (res[0]['address'] != "")  ){
		        $(".address").val(res[0]['address'])
		        $(".address").prop('readonly', true);
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
