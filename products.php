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
		?>

		<!-- Main -->
		<div id="main" class="alt">

			<!-- One -->
			<section id="one">
				<div class="inner">
					<header class="major">
						<h1>Ürünler</h1>
					</header>
				</div>
			</section>
			<!-- Featured Products -->
			<section class="tiles">
				<?php

				$type = $_GET["type"];

				$connection = mysqli_connect("localhost", "root", "", "p_database");

				mysqli_select_db($connection, 'p_database');

				if (mysqli_connect_errno()) {
					echo "Failed to connect to MySQL: " . mysqli_connect_error();
				} else {
					//echo "<br>connection established";
				}

				$query = mysqli_query($connection, "SELECT * FROM products where type = '$type'");

				while ($str = mysqli_fetch_assoc($query)) {
					echo "<article>" ?>

					<span class="image">
						<?php
						$image_path = $str["image_path"];
						?>
						<img src='<?php echo $image_path; ?>' alt="" />
					</span>

					<header class='major'>
						<h3><?php echo $str["name"]; ?></h3>
						<?php
						$price = $str["price"];
						?>

						<p><strong><?php echo $str["details"]; ?> </strong></p>
						<p><strong><?php echo $price ?> tl</strong></p>



						<div class="major-actions">
							<a href="product-details.php?id=<?php echo $str["id"]?>" class="button small next">Ürünü Satın al </a>
						</div>
					</header>
				<?php
					echo "</article>";
				}
				?>

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