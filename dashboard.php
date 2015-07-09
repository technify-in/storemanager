<?php require 'setup.php'; ?>

<?php require 'session.php'; ?>
<?php require 'secure.php' ;?>
<?php require 'db.php'; ?>
<html>

<head>

<?php require 'date.php';?>

<?php require 'dash_head.php'; ?>


</head>


<body>
	<?php require 'header.php';?>
	<div class="clearfix">

	</div>

		<div class="container">
			<?php require 'clock.php'; ?>


		<?php require 'dash_details.php' ;?>

	</div>
		<!--  script =================                 -->
		<?php require 'dashboard_js.php';?>
		</body>
		</html>
