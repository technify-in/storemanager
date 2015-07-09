<?php
if($logged==1){
  $username = $_SESSION['username'];

}
else {
  header("Location:index.php?msg=invalid login");
}

?>
