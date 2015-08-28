  function setup(){
  $(".product").autocomplete({
    source: "search/sale_name.php",
    minLength: 1
  });




  $('.product').change(function(){
    var r = $(this).val().split(":");

    var xmlhttp;
    $('#preloader').focusout();
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
        var res=xmlhttp.responseText

        if(res!= "")
        {var p=$('.product').parent().parent().parent();

        $('.product').parent().parent().remove();

        $('.submit').remove();

        var sub="<input class='submit' type='submit' />";

        p.html( p.html() + xmlhttp.responseText + sub)
        $('#preloader').hide();

        setup();
    }
      }
    }
    xmlhttp.open("GET","/parts/form/product.php?id="+r[0],true);
    xmlhttp.send();
  });



}






$('.contact').change(function(){

  var xmlhttp;
  $('#preloader').show();
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
      var res=xmlhttp.responseText
      var p =$('.contact').parent().parent();

      p.html( p.html() + xmlhttp.responseText);
      $('.contact').parent().remove();

      $('#preloader').hide();
//  function bindings
      setup();
// .......................................
    }
  }
  xmlhttp.open("GET","/parts/form/user.php?contact="+ $(this).val(),true);
  xmlhttp.send();

});
