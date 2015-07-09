<?php require 'setup.php' ?>
<?php require 'session.php' ?>
<?php require 'secure.php' ?>
<?php require 'db.php' ?>
<?php require 'dash_head.php'; ?>

<?php require 'header.php' ?>



<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/main.css">



<div class="main_box">
      <form action="add_distributor.php" method="GET">
        <center><h2>Distributor</h2></center>

        <div class="small_box">
              <div class="lft" >distributor name</div>
            <div class="rgt"><input name="name" type='text' class="" required></div><br>
            <div class="lft" >contact person</div>
            <div class="rgt"><input name="cp" type='text' class="" required></div><br>
              <div class="lft">address</div>
              <div class="rgt" > <input name="add" type='text' class="" ></div><br>
              <div class="lft">mobile</div>
              <div class="rgt"><input name="mobile" type='text' class="" required></div><br>
              <div class="lft">phone</div>
              <div class="rgt"><input name="phone" type='text' class="" ></div><br>
              <div class="lft">email</div>
              <div class="rgt"><input name="email" type='text' class="" ></div><br>
              <div class="lft">tin</div>
              <div class="rgt"><input name="tin" type='text' class="" required></div><br>
        </div>

          <center><input type="submit"></center>
      </form>
</div>
