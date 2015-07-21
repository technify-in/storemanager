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
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
  <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

<script type="text/javascript">
	<?php require 'clock_js.php' ?>
	$(function(){
	$('#preloader').fadeOut(300);

	$(".name").autocomplete({
		source: "search/name.php",
		minLength: 1
	});

	$(".sku").autocomplete({
		source: "search/sku.php",
		minLength: 1
	});

	$(".sno").autocomplete({
		source: "search/sno.php",
		minLength: 1
	});

	$(".dp").autocomplete({
			source: "search/dp.php",
			minLength: 1
		});

	$(".vat").autocomplete({
				source: "search/vat.php",
				minLength: 1
			});
	$(".mrp").autocomplete({
					source: "search/mrp.php",
					minLength: 1
				});

	$(".imei").autocomplete({
						source: "search/imei.php",
						minLength: 1
					});



	});


</script>

</html>
