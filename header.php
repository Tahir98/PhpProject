<!-- Header -->
<?php
session_start();

$username = $_SESSION["username"];
$password = $_SESSION["password"];
?>

<header id="header" class="alt">
    <a href="main_page.php" class="logo"><strong>Bilgisayar Mağazası</strong> <span>Websitesi</span></a>
    <nav>
        <a href="#menu"><?php echo $username ?></Menu>
            </Menu></a>
    </nav>
</header>

<!-- Menu -->
<nav id="menu">
    <ul class="links">
        <li class="active"> <a href="main_page.php">Menü </a> </li>

        <li> <a href="products.php">Ürünler</a> </li>


    </ul>
</nav>