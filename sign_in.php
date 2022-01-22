<html>

<head>
    <title></title>
</head>

<body>
    <?php
    $username = $_POST["uname"];
    $password = $_POST["psw"];

    $connection = mysqli_connect("localhost", "root", "", "p_database");

    mysqli_select_db($connection, 'p_database');

    //if (mysqli_connect_errno()) {
      //  echo "Failed to connect to MySQL: " . mysqli_connect_error();
    //} else {
      //  echo "<br>connection established";
    //}

    $query = mysqli_query($connection,"SELECT * FROM user where username = '$username' and password = '$password'");

    $str = mysqli_fetch_array($query);

    if(empty($str)) {
        echo "<br>User not found";
    }else {
        session_start();

        $_SESSION["username"] = $username;
        $_SESSION["password"] = $password;

        header("Location: http://localhost/Proje/main_page.php");
    }

    ?>
</body>

</html>