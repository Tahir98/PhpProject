<html><head>
<meta charset="utf-8">
<title>JavaScript Alert Box by PHP</title>
<?php
function  createConfirmationmbox(){
    echo '<script type="text/javascript"> ';
    echo ' function openulr(newurl) {';
    echo '  if (confirm("Are you sure you want to open new URL")) {';
    echo '    document.location = newurl;';
    echo '  }';
    echo '}';
    echo '</script>';
    //header("Location: http://localhost/Proje/main_page.php");
}
?>
<?php
createConfirmationmbox();
?>
</head>
<body>
<strong> Sipirişiniz alındı </strong>
<br>
<strong><a href="main_page.php">Anasayfaya geri dön</a></strong>
</body>
</html>