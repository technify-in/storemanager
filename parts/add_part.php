<?php
require 'session.php';
require 'mysql.php';



if ($_REQUEST['submit']=='product') {
    // print "<br />";
    // print"recieved product";
    $db = new Db();

    (isset( $_REQUEST['name']))      ?($name=       $db -> quote( $_REQUEST['name']))       :($name="''");
    (isset( $_REQUEST['sku']))       ?($sku=        $db -> quote( $_REQUEST['sku']))        :($sku="''");
    (isset( $_REQUEST['imei']))      ?($imei=       $db -> quote( $_REQUEST['imei']))       :($imei="''");
    (isset( $_REQUEST['sno']))       ?($sno=        $db -> quote( $_REQUEST['sno']))        :($sno="''");
    (isset( $_REQUEST['mrp']))       ?($mrp=        $db -> quote( $_REQUEST['mrp']))        :($mrp="''");
    (isset( $_REQUEST['dp']))        ?($dp=         $db -> quote( $_REQUEST['dp']))         :($dp="''");
    (isset( $_REQUEST['qty']))       ?($qty=        $db -> quote( $_REQUEST['qty']))        :($qty="''");
    (isset( $_REQUEST['vat']))       ?($vat=        $db -> quote( $_REQUEST['vat']))        :($vat="''");
    (isset( $_REQUEST['tiv']))       ?($tiv=        $db -> quote( $_REQUEST['tiv']))        :($tiv="''");
    (isset( $_REQUEST['dat']))       ?($dat=        $db -> quote( $_REQUEST['dat']))        :($dat="''");
    (isset( $_REQUEST['seller']))    ?($seller=     $db -> quote( $_REQUEST['seller']))     :($seller="''");
    (isset( $_REQUEST['stock_type']))?($stock_type= $db -> quote( $_REQUEST['stock_type'])) :($stock_type="''");


    $qry_product="INSERT INTO `store3`.`products`".
    "(`id`, `sku`, `imei`, `sno`, `pid`, `name`, `tax`, `dp`, `mrp`, `vat_bill_id`, `p_condition`, `stock_type`, `sold`, `date` , `sales_person`,`qty`)".
    " VALUES (NULL, $sku, $imei, $sno, '', $name, $vat, $dp, $mrp, $tiv, 'pcon', $stock_type, '0', $dat , '$_SESSION[uid]',$qty );";


    $qry_inv = "INSERT INTO `store3`.`taxinvoice`".
    "(`inv_no`, `date`, `seller`, `id`) VALUES".
    "($tiv, $dat, $seller, NULL);";


    $r1=$db -> select(0,$qry_product);
    // print $db->error();
    $r2=$db -> select(0,$qry_inv);

    // print_r($r1);print"r1<br/>";
    // print_r($r2);print"r2<br/>";

    // print $qry_product;
    // print "<br />".$qry_inv;

    if( isset($r1) && isset($r2) ){
              if( $r1 && $r2 ){
                $_SESSION['n']=1;
                $_SESSION['message']='product inserted sucessfully';
              header('Location:/dashboard');
 // print"3355";
              }
              else{

                $_SESSION['error']='inp';
                $_SESSION['mess']="yo";

              header('Location:/error.php');
  // print"3344";
              }
    }  else{

        $_SESSION['error']='inp';
      header('Location:/error.php');
  // print"33";

      }


}

 ?>
