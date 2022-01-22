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

        //session_start();
        $product_id = $_SESSION["product_id"];
        $username = $_SESSION["username"];
        $query = mysqli_query($connection, "SELECT * from user where '$username' = username");
        $str = mysqli_fetch_assoc($query);
        $user_id = $str["id"];

        //Checkboxes
        $saveData = $_POST["savedata"];
        $saveCrd = $_POST["savecrd"];

        //User data
        $name_surname = $_POST["name_surname"];
        $email = $_POST["email"];
        $address = $_POST["address"];
        $city = $_POST["city"];

        //Credit card data
        $cname = $_POST["cardname"];
        $cnumber = $_POST["cardnumber"];
        $cvv = $_POST["cvv"];


        $isCsaved = false;

        if ($saveData && $str['data_id'] == -1) {
            $query2 = mysqli_query($connection, "INSERT INTO user_data(name_surname, email, address, city) VALUES ('$name_surname','$email','$address','$city')");
            $query3 = mysqli_query($connection, "SELECT id from user_data where '$name_surname' = name_surname");
            $value = (mysqli_fetch_assoc($query3))["id"];
            $query4 = mysqli_query($connection, "UPDATE user set user.data_id = '$value' where user.id = '$user_id'");
            $isCsaved = true;
        }

        $isDsaved = false;

        if ($saveCrd && $str["credit_id"] == -1) {
            $query2 = mysqli_query($connection, "INSERT INTO creditcard(name_surname, number, cvv ) VALUES ('$cname','$cnumber','$cvv')");
            $query3 = mysqli_query($connection, "SELECT id from creditcard where '$name_surname' = name_surname");
            $value = (mysqli_fetch_assoc($query3))["id"];
            $query4 = mysqli_query($connection, "UPDATE user set user.credit_id = '$value' where user.id = '$user_id'");

            $isDsaved = false;
        }

        $queryF = mysqli_query($connection,"INSERT INTO orders (user_id, product_id, address) VALUES('$user_id','$product_id','$address')");

        header("Location: http://localhost/Proje/success.php");

        ?>
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