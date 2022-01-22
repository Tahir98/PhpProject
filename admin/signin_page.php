<?php 
 $username = $_POST["username"];
 $password = $_POST["password"];

 $connection = mysqli_connect("localhost", "root", "", "p_database");

 mysqli_select_db($connection, 'p_database');

 if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } else {
   //  echo "<br>connection established";
}

 $query = mysqli_query($connection,"SELECT * FROM admin where username = '$username' and password = '$password'");

 $str = mysqli_fetch_array($query);

 if(empty($str)) {
     echo "<br>Admin user not found";
     header("Location: index.php");
 }else {
     session_start();

     $_SESSION["username"] = $username;
     $_SESSION["password"] = $password;

     header("Location: orders.php");
 }

?>