$(".name").autocomplete({
  source: "search/name.php",
  minLength: 1
});

$(".sku").autocomplete({
  source: "search/sku.php",
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






// implement the change functions

$('.qty').change(function(){
  if($(this).val()>1){
    $('.imei').prop("disabled",true);
  }
  else{
    $('.imei').prop("disabled",false);
  }
});

$('.imei').change(function(){
  if($(this).val()==""){
    $('.qty').prop("disabled",false);
  }
  else{
    $('.qty').val("1");
    $('.qty').prop("disabled",true);
  }
});
