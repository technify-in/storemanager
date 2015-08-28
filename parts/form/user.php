<?php
require '../mysql.php';
$qry="SELECT * FROM `customers` where `mobile` = '$_REQUEST[contact]' ";
$db = new Db();

$res = $db -> select(2,$qry);

if($res[0]==1){
$rec=$res[1][0];
print<<<END
<div class="store_form1">
<p>Customer Info</p>
<p class="rem_this">
X
</p>
<div class="form_field" ><p>  customer name  </p>
  <input name="c_name" type='text' class="c_name"   value="$rec[name]"  disabled >
</div>
<div class="form_field" ><p>  address  </p>
  <input name="c_add" type='text' class="c_add"   value="$rec[address]"  disabled >
</div>
<div class="form_field" ><p>  email  </p>
  <input name="c_email" type='text' class="c_email"   value="$rec[email]"  disabled >
</div>
<div class="form_field" ><p>  contact  </p>
  <input name="c_mobile" type='text' class="c_mobile" value="$rec[mobile]" disabled >
  </div>
  <input name="customer" type='hidden' class="c_mobile" value="$rec[id]" >

  <hr class="clear"/>
</div>


<hr class="clear" />


<div class="store_form">
<h3 class="pd_30">PRODUCT INFO</h3>
<div class="form_field" ><p> product  </p>

<input name="product" type='text' class="product" >
  </div>
  <hr class="clear"/>

  </div>




END;

$_SESSION['customer']=$res[1][0]['id'];

}
else {

print<<<END
<div class="store_form1">
<p>Add Customer</p>

<p class="rem_this">
X
</p>

  <div class="form_field" ><p>  customer name  </p>
    <input name="c_name" type='text' class="c_name"   >
  </div>
  <div class="form_field" ><p>  address  </p>
    <input name="c_add" type='text' class="c_add"   >
  </div>
  <div class="form_field" ><p>  email  </p>
    <input name="c_email" type='text' class="c_email"   >
  </div>
  <div class="form_field" ><p>  contact  </p>
    <input name="c_mobile" type='text' class="c_mobile" >
  </div>
  <hr class="clear"/>
</div>

  <hr class="clear">

  <h3 class="pd_30">PRODUCT INFO</h3>

<div class="store_form">
<div class="form_field" ><p> product  </p>
  <input name="product" type='text' class="product" >
</div>
  <hr class="clear"/>
</div>



END;
$_SESSION['customer']=-1;

}




 ?>
