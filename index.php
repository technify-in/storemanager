<?php
// setup paths and other values
require 'setup.php';
// redirect to dashboard if logged in
($logged)?header("Location:dashboard.php"):$y=0;
?>

<!DOCTYPE html>

<html>
<head>
  <?php require 'header.php' ?>
  <?php require 'common_css.php' ?>

</head>


<body class="bk_virgin">
  <div class="page ">

  <section id="head">
    <?php require 'menu_fake.php' ?>
  </section>

  <section id = "login" class=" pd_50">
    <?php require 'login_view.php' ?>
  </section>

</div>

</body>
</html>
