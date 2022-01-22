<html>

<head>
    <title></title>
</head>

<body>
    <?php
    $username = $_POST["username"];
    $password = $_POST["psw"];

    $connection = mysqli_connect("localhost", "root", "", "p_database");

    mysqli_select_db($connection, 'p_database');

    if (mysqli_connect_errno()) {
        echo "<br>Failed to connect to MySQL: " . mysqli_connect_error();
    } else {
        echo "<br>connection established";
    }

    $query1 = mysqli_query($connection, "SELECT * FROM user where username = '$username' and password = '$password'");

    $rowCount = mysqli_num_rows($query1);

    if ($rowCount > 0) {
        echo ("<br>You have already signup with this username and password");
    } else {
        if (!empty($username) && !empty($password))
            $query2 = mysqli_query($connection, "INSERT INTO user(username,password, credit_id, data_id) VALUES ('$username','$password',-1,-1)");

        if ($query2) {
            header("Location: http://localhost/Proje/main_page.php");

            session_start();
            $_SESSION["username"] = $username;
            $_SESSION["password"] = $password;
        }
    }

    ?>

    <form method="post" action="get_reg.php">
        <input type="hidden" name="username" value="">
        <input type="hidden" name="password" value="">
        <input type="submit">
    </form>
</body>

</html>