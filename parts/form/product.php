<?php
require '../mysql.php';
$qry="SELECT * FROM `products` where `id` = '$_REQUEST[id]' ";
$db = new Db();

$res = $db -> select(2,$qry);

if($res[0]==1){
$rec=$res[1][0];

($rec['name'])?$name=$rec['name']:$name="N/A";
($rec['sku'])?$sku=$rec['sku']:$sku="N/A";
($rec['sno'])?$sno=$rec['sno']:$sno="N/A";
($rec['imei'])?$imei=$rec['imei']:$imei="N/A";
($rec['tax'])?$tax=$rec['tax']:$tax="N/A";
($rec['mrp'])?$mrp=$rec['mrp']:$mrp="N/A";
($rec['vat_bill_id'])?$vbid=$rec['vat_bill_id']:$vbid="N/A";
($rec['qty'])?$qty=$rec['qty']:$qty=1;

$sec="";
for($a=1;$a<=$qty;$a++){
  $sec.="<option value='$a'>$a</option>\n";
}



(isset($_SESSION['username']))?$salesman=$_SESSION['username']:$username="N/A";



print<<<END
<div class="store_form1">
<p>
  Product
</p>
<p class="rem_this">
X
</p>

<div class="form_field" ><p>  product name  </p>
  <input name="p_name" type='text' class="c_name"   value="$name"  disabled >
</div>

<div class="form_field" ><p>  sku  </p>
  <input name="sku" type='text' class="sku"   value="$sku"  disabled >
</div>

<div class="form_field" ><p>  sno  </p>
  <input name="sno" type='text' class="sno"   value="$sno"  disabled >
</div>

<div class="form_field" ><p>  imei  </p>
  <input name="imei" type='text' class="imei"   value="$imei"  disabled >
</div>

<div class="form_field" ><p>  tax  </p>
  <input name="imei" type='text' class="imei"   value="$tax %"  disabled >
</div>

<div class="form_field" ><p>  mrp  </p>
  <input name="imei" type='text' class="imei"   value="$mrp"  disabled >
</div>

<div class="form_field" ><p>  quantity  </p>
<select name="quantity[]">
$sec
</select>
</div>

<input name="p_id[]" type='hidden' class="imei"   value="$rec[id]"  >


<hr class="clear">
</div>


<div class="store_form">
<div class="form_field" ><p> product  </p>
<input name="product" type='text' class="product" >
</div>
<hr class="clear" />
</div>




END;

$_SESSION['product'][]=$rec['id'];

}
else {

print"";

}




 ?>
