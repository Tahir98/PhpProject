<!doctype html>
<html lang="tr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <title>Anasayfa</title>
</head>

<body>
    <?php
    session_start();
    $username = $_SESSION["username"];
    $password = $_SESSION["password"];
    ?>

    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <?php
        include("header.php");
        ?>
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="orders.php">Sipari?? Ge??mi??i</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="users.php">Kullan??c??lar</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="user_datas.php">Kullan??c?? Verisi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="products.php">??r??nler</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="creditcards.php">Kredi Kartlar??</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">


                    <!-- recent orders  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-9 col-lg-12 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">??ipari??ler Ge??mi??i</h5>
                            <div class="card-body p-0"style="width:max-content">
                                <div class="table-responsive"style="width:max-content">
                                    <table class="table" style="width:max-content">
                                        <thead class="bg-light">
                                            <tr class="border-0">
                                                <th class="border-0">#</th>
                                                <th class="border-0">G??rsel</th>
                                                <th class="border-0" style="width:150px">??r??n Ad??</th>
                                                <th class="border-0">??r??n ID</th>
                                                <th class="border-0">Fiyat</th>
                                                <th class="border-0">Kullan??c?? Ad??</th>
                                                <th class="border-0">Adres</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $connection = mysqli_connect("localhost", "root", "", "p_database");

                                            mysqli_select_db($connection, 'p_database');

                                            if (mysqli_connect_errno()) {
                                                echo "Failed to connect to MySQL: " . mysqli_connect_error();
                                            } else {
                                                //  echo "<br>connection established";
                                            }

                                            $query1 = mysqli_query($connection, "SELECT * from orders");

                                            $counter = 1;

                                            while ($str = mysqli_fetch_assoc($query1)) {
                                                $product_id = $str["product_id"];
                                                $query2 = mysqli_query($connection,"SELECT * FROM products where id = '$product_id'");
                                                $product = mysqli_fetch_assoc($query2);
                                                $product_name = $product["name"];
                                                $image_path = "../".$product["image_path"];
                                                $price = $product["price"];

                                                $address = $str["address"];

                                                $user_id = $str["user_id"];
                                                $query3 = mysqli_query($connection,"SELECT * FROM user where id = '$user_id'");
                                                $user = mysqli_fetch_assoc($query3);
                                                $user_name = $user["username"];

                                            ?>
                                            <tr>
                                                <td><?php echo $counter; ?></td>
                                                <td>
                                                    <div class="m-r-10"><img src="<?php echo $image_path;?>" alt="user" class="rounded" width="45"></div>
                                                </td>
                                                <td style="width:150px"><?php echo $product_name;?></td>
                                                <td><?php echo $product_id;?> </td>
                                                <td><?php echo $price;?></td>
                                                <td><?php echo $user_name;?></td>
                                                <td><?php echo $address;?></td>
                                            </tr>
                                            <?php
                                            $counter++;
                                            }
                                            ?>

                                            <tr>
                                              
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end recent orders  -->

                </div>
                <!-- ============================================================== -->
                <!-- end wrapper  -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- end main wrapper  -->
            <!-- ============================================================== -->
            <!-- Optional JavaScript -->
            <!-- jquery 3.3.1 -->
            <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
            <!-- bootstap bundle js -->
            <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
            <!-- slimscroll js -->
            <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
            <!-- main js -->
            <script src="assets/libs/js/main-js.js"></script>
            <!-- chart chartist js -->
            <script src="assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
            <!-- sparkline js -->
            <script src="assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
            <!-- morris js -->
            <script src="assets/vendor/charts/morris-bundle/raphael.min.js"></script>
            <script src="assets/vendor/charts/morris-bundle/morris.js"></script>
            <!-- chart c3 js -->
            <script src="assets/vendor/charts/c3charts/c3.min.js"></script>
            <script src="assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
            <script src="assets/vendor/charts/c3charts/C3chartjs.js"></script>
            <script src="assets/libs/js/dashboard-ecommerce.js"></script>
</body>

</html>