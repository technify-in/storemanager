<?php require 'setup.php' ?>

<?php require 'session.php' ?>
<?php require 'secure.php' ?>
<?php require 'db.php' ?>
<?php require 'dash_head.php'; ?>

<?php require 'header.php' ?>



<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/main.css">

<div class="main_box">
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
              <div class="lft">bp</div>
              <div class="rgt"><input name="dp" type='text' class="dp" required></div><br>
              <div class="lft">vat</div>
              <div class="rgt"><input name="vat" type='text' class="vat" ></div><br>
              <div class="lft">dp</div>
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



<?php require 'auto_fill_new_product.php' ?>
