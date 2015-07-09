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
