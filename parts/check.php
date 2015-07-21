<?php

// connect the db
$db = new Db();

if(!file_exists( $db->configfile)){
      $_SESSION['error']='cnf';
      header('Location:/error.php');
      exit(0);
}
else{
  $_SESSION['error']=1;
}


$x= $db->connect();
$e=$x->connect_errno;
if($e > 0){
  $_SESSION['error']='dbe';
  $_SESSION['code']=$e;

  header('Location:/error.php');
  exit(0);
}
 ?>
