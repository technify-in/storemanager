<?php require 'setup.php' ?>
<?php require 'session.php' ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>ERROR</title>
  <?php require 'header.php' ?>
  <?php require 'common_css.php' ?>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
</head>
<body class="bk_spike" >

  <?php require 'loader.php' ?>
    <div class="page ">

        <section id="head">
          <?php require 'menu_fake.php' ?>
        </section>

        <section id="head">
          <?php require 'date.php' ?>
        </section>




        <section class="mt_50 trans_30 center ">

          <?php require 'error_sec.php' ?>
        </section>

      </div>

<?php require 'footer.php' ?>

</body>
<script src="js/jquery.min.js" type="text/javascript"></script>

<script type="text/javascript">
	<?php require 'clock_js.php' ?>
	$(function(){
	$('#preloader').fadeOut(300);


	// Change the selector if needed

	// Adjust the width of thead cells when window resizes
});


</script>
</html>
