
<?php require 'setup.php' ?>
<?php require 'session.php' ?>
<?php require 'secure.php' ?>
<?php require 'db.php' ?>
<?php require 'dash_head.php'; ?>

<?php require 'header.php' ?>




<div class="main_box">
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


<?php require 'sale_js.php'?>
