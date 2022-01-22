<!DOCTYPE HTML>
<html>

<head>
	<title>Computer Store</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<noscript>
		<link rel="stylesheet" href="assets/css/noscript.css" />
	</noscript>
</head>

<body class="is-preload">

	<!-- Wrapper -->
	<div id="wrapper">

		<?php
		include("header.php");

		$connection = mysqli_connect("localhost", "root", "", "p_database");

		mysqli_select_db($connection, 'p_database');

		if (mysqli_connect_errno()) {
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		} else {
			//echo "<br>connection established";
		}
		$id = $_GET["id"];

		$query = mysqli_query($connection, "SELECT * FROM products where id = '$id'");
		$str = mysqli_fetch_assoc($query);
		?>
		<!-- Main -->
		<div id="main" class="alt">

			<!-- One -->
			<section id="one">
				<div class="inner">
					<header class="major">
						<h1><?php echo $str["name"]; ?></h1>
					</header>

					<div class="row">
						<div class="col-md-5">
							<img src="<?php echo $str["image_path"]; ?>" class="img-responsive" alt="">
						</div>

						<div class="col-md-7">
							<h2> <?php echo $str["details"]; ?></h2>

							<h2> <?php echo $str["price"]; ?> tl </h2>

							<div class="row">
								<div class="col-sm-8">

									<div class="col-sm-6">
										<a href="order_page.php?id=<?php echo $str["id"] ?>" class="button small next">Satın Al</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<br>

		</div>
		</section>

	</div>

	<?php
	include("footer.php");
	?>

	</div>

	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="assets/js/jquery.scrolly.min.js"></script>
	<script src="assets/js/jquery.scrollex.min.js"></script>
	<script src="assets/js/browser.min.js"></script>
	<script src="assets/js/breakpoints.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>

</body>

</html>