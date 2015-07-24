<div class="heading">
Add Product
</div>


  <div class="add_form">



    <form class="product_form store_form pd_20" action="/parts/add_part.php" method="GET">
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

<div class=""><p>Stock Type</p>
        <div class="tabs-input">

   <div class="tab-input">
       <input type="radio" id="tab-1" name="stock_type" value="A" checked>
       <label for="tab-1">A</label>
   </div>

   <div class="tab-input">
       <input type="radio" id="tab-2" name="stock_type"  value="B" >
       <label for="tab-2">B</label>
   </div>

    <div class="tab-input">
       <input type="radio" id="tab-3" name="stock_type"  value="C">
       <label for="tab-3">C</label>
     </div>

</div>
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
    <input name="submit" value="product" type="submit">
<hr class="ma_30 clear no_color">

    </form>


  </div>
