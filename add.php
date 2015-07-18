<?php require 'setup.php' ?>
<?php require 'session.php' ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<?php require 'header.php' ?>
		<?php require 'common_css.php' ?>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
</head>

	<body class="bk_spike" >

		<?php require 'loader.php' ?>
			<div class="page ">

					<section id="head">
						<?php require 'menu.php' ?>
					</section>

					<section id="head">
						<?php require 'date.php' ?>
					</section>




					<section class=" trans_30 ">

					<?php
					(isset($_REQUEST['product']))?include 'new/product.php':print'';
					(isset($_REQUEST['dealer']))?include 'new/dealer.php':print'';
					(isset($_REQUEST['sale']))?include 'new/sale.php':print'';
					 ?>

					</section>

				</div>

<?php require 'footer.php' ?>

	</body>


	<script src="js/jquery.min.js" type="text/javascript"></script>
	<script src="js/sorttable.js" type="text/javascript"></script>


<script type="text/javascript">
	<?php require 'clock_js.php' ?>
	$(function(){
	$('#preloader').fadeOut(300);

	});


</script>

</html>
