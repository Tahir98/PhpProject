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
	<?php
	session_start();
	$username = $_SESSION["username"];
	$password = $_SESSION["password"];
	?>
	<!-- Wrapper -->
	<div id="wrapper">

		<?php
		include("header.php");
		?>

		<!-- Banner -->
		<section id="banner" class="major">
			<div class="inner">
				<header class="major">
					<h1>Bilgisayar Mağazasına Hoşgeldiniz</h1>
				</header>
			</div>
		</section>


		<!-- Main -->
		<div id="main">


			<!-- Featured Products -->
			<section class="tiles">
				<article>
					<span class="image">
						<img src="images/laptop2.jpg" alt="" />
					</span>

					<header class="major">
						<h3>Disüstü Bilgisayarlar</h3>
						<?php
						//session_start();
						$type =  "LAPTOP";
						?>
						<div class="major-actions">
							<a href="products.php?type=<?php echo $type; ?>" class="button small next">Ürünleri gör</a>
						</div>
					</header>
				</article>
				<article>
					<span class="image">
						<img src="images/comp.jpg" alt="" />
					</span>
					<header class="major">
						<h3>Masaüstü Bilgisayarlar</h3>

						<div class="major-actions">
							<?php
							//session_start();
							$type =  "DESKTOP";
							?>
							<a href="products.php?type=<?php echo $type; ?>" class="button small next">Ürünleri gör</a>
						</div>
					</header>
				</article>
				<article>
					<span class="image">
						<img src="images/graphicscard.jpg" alt="" />
					</span>
					<header class="major">
						<h3>Ekran Kartları</h3>

						<div class="major-actions">
							<?php
							//session_start();
							$type =  "GPU";
							?>
							<a href="products.php?type=<?php echo $type; ?>" class="button small next">Ürünleri gör</a>
						</div>
					</header>
				</article>
				<article>
					<span class="image">
						<img src="images/product-1-720x480.jpg" alt="" />
					</span>
					<header class="major">
						<h3>Harddiskler</h3>
						<div class="major-actions">
							<?php
							//session_start();
							$type =  "HARDDİSK";
							?>
							<a href="products.php?type=<?php echo $type; ?>" class="button small next">Ürünleri gör</a>
						</div>
					</header>
				</article>
				<article>
					<span class="image">
						<img src="images/product-2-720x480.jpg" alt="" />
					</span>
					<header class="major">
						<h3>Bellekler</h3>
						<div class="major-actions">
							<?php
							//session_start();
							$type =  "RAM";
							?>
							<a href="products.php?type=<?php echo $type; ?>" class="button small next">Ürünleri gör</a>
						</div>
					</header>
				</article>
				<article>
					<span class="image">
						<img src="images/product-3-720x480.jpg" alt="" />
					</span>
					<header class="major">
						<h3>İşlemciler</h3>
						<div class="major-actions">
							<?php
							//session_start();
							$type =  "CPU";
							?>
							<a href="products.php?type=<?php echo $type; ?>" class="button small next">Ürünleri gör</a>
						</div>
					</header>
				</article>

				<?php
				include("footer.php");
				?>
		</div>
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