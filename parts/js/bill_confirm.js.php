$('[name="price[]"]').keyup(function(){
var sum=0;

  $.each( $('[name="price[]"]') , function( index, value ) {

  var s =  (parseFloat($($('[name="quantity[]"]')[index]).val()) || 0 ) * (parseFloat($(value).val()) || 0);
$($('.total')[index]).html(s);
  sum+= s || 0 ;

});

$('.grand').html(sum);

});

$('.payment').keyup(function(){

  $('.total_pay').val(  parseFloat( $($('.payment')[0]).val() || 0 ) + parseFloat( $($('.payment')[1]).val() || 0 ) + parseFloat( $($('.payment')[2]).val() || 0 )           );


});

$($('.cash')[0]).change(function(){

if($($('.payment')[0]).is(':disabled')){
  $($('.payment')[0]).prop('disabled', false);


}
else{
  $($('.payment')[0]).prop('disabled', true);
  $($('.payment')[0]).val(0);
}
});

$($('.finance')[0]).change(function(){

if($($('.payment')[1]).is(':disabled')){
  $($('.payment')[1]).prop('disabled', false);



}
else{
  $($('.payment')[1]).prop('disabled', true);
  $($('.payment')[1]).val(0);

}
});

$($('.card')[0]).change(function(){

if($($('.payment')[2]).is(':disabled')){
  $($('.payment')[2]).prop('disabled', false);
  $('.card_bill').prop('disabled', false);

}
else{
  $($('.payment')[2]).prop('disabled', true);
  $('.card_bill').prop('disabled', true);
  $($('.payment')[2]).val(0);

}
});



$('#pay_confirm').bind('submit',function(e){

if(  $('.total_pay').val() != $('.grand').html()){
    e.preventDefault();
      alert("payment should be equal to amount to be paid ");
}
else {

}
});
