<?php require 'setup.php' ?>
<?php require 'session.php' ?>
<?php require 'secure.php' ?>

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
		<?php require 'message.php' ?>

			<div class="page ">

					<section id="head">
						<?php require 'menu.php' ?>
					</section>

					<section id="head">
						<?php require 'date.php' ?>
					</section>




					<section class=" trans_30">
						<div class="heading">
							Products
						</div>

						<div class="search_bar">
								<input placeholder="Search" id="search" class="" />
                <p class="add" >
                <a href = "/add/product" >  <i class="fa fa-plus"></a></i>
                </p>
						</div>

							<div class="">
								<?php require 'parts/mysql.php' ?>
								<?php require 'parts/fetch/products.php' ?>
							</div>
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


	// Change the selector if needed

	// Adjust the width of thead cells when window resizes
	$(window).resize(function() {
			// alert($(window).width() -100);
		if(   $(window).width() < 800)
			$('tbody').width($(window).width() - 83 );

	}).resize(); // Trigger resize handler

	$('#search').keydown(
	function () { $.each($("tbody").find("tr"), function() {
								        if($(this).text().toLowerCase().indexOf($('#search').val().toLowerCase()) == -1)
								           $(this).hide();

								        else
								             $(this).show();
								    });

				});


				$('.notification').click(function(){

					$(this).hide();


				});




	});


</script>

</html>
