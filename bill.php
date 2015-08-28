<?php require 'setup.php' ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<?php require 'header.php' ?>
		<?php require 'common_css.php' ?>

<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/bill.css">
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
					(isset($_REQUEST['product']))?include 'bill/confirm.php':print'';
					// (isset($_REQUEST['dealer']))?include 'new/dealer.php':print'';
					// (isset($_REQUEST['sale']))?include 'new/sale.php':print'';
					 ?>

					</section>

				</div>

<?php require 'footer.php' ?>

	</body>


	<script src="js/jquery.min.js" type="text/javascript"></script>
	<script src="js/sorttable.js" type="text/javascript"></script>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
  <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

<script type="text/javascript">
	<?php require 'clock_js.php' ?>
	$(function(){
	$('#preloader').fadeOut(300);

<?php
(isset($_REQUEST['product']))?include 'js/bill_confirm.js.php':print'';
// (isset($_REQUEST['dealer']))?include 'js/add_dealer.js.php':print'';
// (isset($_REQUEST['sale']))?include 'js/add_sale.js.php':print'';

?>

	});


</script>

</html>
