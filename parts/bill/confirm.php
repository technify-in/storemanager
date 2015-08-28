<?php

require 'mysql.php';

// print_r($_REQUEST);

$cid = $_REQUEST['customer'];
$no=count($_REQUEST['p_id']);
for ($i=0; $i < $no ; $i++) {
  $products[]=array($_REQUEST['p_id'][$i] ,$_REQUEST['quantity'][$i]);
}
$db= new Db();
/////////////////////////////////////////////////////////////////////////////
?>
<form id="pay_confirm" class="" action="/parts/bill/pay.php" method="get" style="text-align:left">

<section  class="full mb_30">
  <div class="heading">
    Product Info
  </div>
 <table border="1px">
    <th>name</th><th>sku</th><th>sno</th><th>imei</th><th>vat</th><th>price</th><th>qty</th><th>Total</th>
    <?php
    foreach ($products as $p) {
      $qry="select * from products where id='".$p[0]."'";
      $r=$db->select(1,$qry);
      // print_r($r[1]);

      print<<<EOF
      <tr>
      <td class="{$p[0]}">{$r[1][0]['name']}</td>
      <td class="{$p[0]}">{$r[1][0]['sku']}</td>
      <td class="{$p[0]}">{$r[1][0]['sno']}</td>
      <td class="{$p[0]}">{$r[1][0]['imei']}</td>
      <td class="{$p[0]}">{$r[1][0]['tax']}</td>
      <td class="price_tr {$p[0]}">
      <input type="text" name="price[]" value=""  required>
      <input type="hidden" name="product[]" value="$p[0]">
      <input type="hidden" name="quantity[]" value="$p[1]">
      </td>
      <td class="{$p[0]}">{$p[1]}</td>
      <td class="{$p[0]} total"></td>
      </tr>
EOF;
    }
    ?>

    <tr>
      <td></td><td></td><td></td><td></td><td></td><td></td><td>GrandTotal</td><td class="grand"></td>
    </tr>
  </table>

</section>
<?php
print "<input type='hidden' name='customer' value='$_REQUEST[customer]'>"
?>




<section class="pd_30">

  <div class="heading">
    Payment Info
  </div>

  <p> Fill payment Details
  </p>
  <div class="bill_field">
      <input id="cash" class="cash" type="checkbox" name="cash">
      <label for="cash">
        cash
    </label>
    <div class="payment_detail cash">
    <input type="text" name="cash_val" class="cash payment" value="0"  disabled required >
    </div>

  </div>

  <div class="bill_field">

      <input type="checkbox" name="finance" class="finance" id="finance"  >
      <label for="finance">
      finance
    </label>
    <div class="payment_detail finance">
    <input type="text" name="finance_val" class="finance payment" value="0" disabled  required>
    </div>


  </div>
  <div class="bill_field" >
      <input type="checkbox" id="card" class="card" name="card" value="card">

      <label for="card">
        card </label>
      <div class="payment_detail card">
      <input type="text" name="card_val" class="card payment" value="0" placeholder="card"  disabled  required>
      <input type="file" name="card_bill" class="card_bill" value="Bill Image" placeholder="bill image"  disabled  required>
      </div>
    </div>

<br />
<br />
    total <input type="text"  class="total_pay"  name="name" value="" disabled required>


<div class="center ma_70">
      <input type="submit" name="total" value="Sell">
</div>


</section>

</form>
