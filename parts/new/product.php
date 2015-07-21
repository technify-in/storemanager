<div class="heading">
Add Product
</div>


  <div class="add_form">



    <form class="product_form store_form pd_20" action="add.php" method="GET">
      <h3 class="pd_30">PRODUCT INFO</h3>

      <div class="" ><p>  product name  </p>
        <input name="name" type='text' class="name" >
      </div>

      <div class=""><p>sku</p>
      <input name="sku" type='text' class="sku" >
      </div>

      <div class=""><p>imei</p>
     <input name="imei" type='text' class="imei">
      </div>

      <div class=""><p>s no</p>
      <input name="sno" type='text' class="sno" >
      </div>

      <div class=""><p>dp</p>
      <input name="dp" type='text' class="dp" >
      </div>

      <div class=""><p>vat</p>
      <input name="vat" type='text' class="vat">
       </div>

      <div class=""><p>price</p>
      <input name="mrp" type='text' class="mrp">
      </div>

      <div class=""><p>quantity</p>
      <input name="qty" type='text' class="qty">
      </div>

      <div class=""><p>Sales Person</p>
      <input type='text' value="<?php print$username;?>" disabled>
      </div>

      <hr class="trans clear">
    <h3 class="pd_30">VAT INVOICE</h3>

    <div class=""><p>tax_ivoice no</p>
      <input name="tiv" class="tiv">
    </div>

    <div class=""><p>date</p>
      <input name="dat" class="dat" >
    </div>

    <div class=""><p>seller</p>
      <input name="seller" class="seller" >
    </div>


<hr class="ma_30 clear">
    <input type="submit">
<hr class="ma_30 clear no_color">

    </form>


  </div>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
  <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

  <script type="text/javascript">
  $(function(){

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

  });


</script>
