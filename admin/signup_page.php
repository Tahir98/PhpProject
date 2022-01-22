<?php
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];
$password2 = $_POST["password2"];

echo $username."<br>";

$connection = mysqli_connect("localhost", "root", "", "p_database");

mysqli_select_db($connection, 'p_database');

if (mysqli_connect_errno()) {
    echo "<br>Failed to connect to MySQL: " . mysqli_connect_error();
} else {
    //echo "<br>connection established";
}

$query1 = mysqli_query($connection, "SELECT * FROM admin where username = '$username' and password = '$password'");

$rowCount = mysqli_num_rows($query1);

if ($rowCount > 0) {
    echo ("<br>You have already signup with this username and password");
} else {
    if ($password == $password2) {
        $query2 = mysqli_query($connection, "INSERT INTO admin(username,email,password) VALUES ('$username','$email','$password')");

        if ($query2) {
            echo "Her şey yolunda gitti";
            session_start();
            $_SESSION["username"] = $username;
            $_SESSION["password"] = $password;
            header("Location: orders.php");
        } else {
            header("Location: sign-up.php");
          
        }
    }
}
