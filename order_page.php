<!DOCTYPE HTML>
<html>

<head>
  <title>Computer Store</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    body {
      font-family: Arial;
      font-size: 17px;
      padding: 8px;
      background-color: #242943;
    }

    * {
      box-sizing: border-box;
    }

    .row {
      display: -ms-flexbox;
      /* IE10 */
      display: flex;
      -ms-flex-wrap: wrap;
      /* IE10 */
      flex-wrap: wrap;
      margin: 0 -16px;
    }

    .col-25 {
      -ms-flex: 25%;

      /* IE10 */
      flex: 25%;
    }

    .col-50 {
      -ms-flex: 50%;
      /* IE10 */
      flex: 50%;
    }

    .col-75 {
      background-color: white;
      align-items: center;
      -ms-flex: 75%;
      /* IE10 */
      flex: 75%;
    }

    .col-25,
    .col-50,
    .col-75 {
      padding: 0 16px;
    }

    .container {
      background-color: white;
      padding: 5px 20px 15px 20px;
      border: 1px solid lightgrey;
      border-radius: 3px;
    }

    input[type=text] {
      width: 100%;
      margin-bottom: 20px;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 3px;
    }

    label {
      margin-bottom: 10px;
      display: block;
    }

    .icon-container {
      margin-bottom: 20px;
      padding: 7px 0;
      font-size: 24px;
    }

    .btn {
      background-color: blue;
      color: white;
      padding: 12px;
      margin: 10px 0;
      border: none;
      width: 100%;
      border-radius: 3px;
      cursor: pointer;
      font-size: 17px;
    }

    .btn:hover {
      background-color: #242943;
    }

    a {
      color: white;
    }

    hr {
      border: 1px solid lightgrey;
    }

    span.price {
      float: right;
      color: grey;
    }

    .label.for {
      text-align: center;
    }

    /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
    @media (max-width: 800px) {
      .row {
        flex-direction: column-reverse;
      }

      .col-25 {
        margin-bottom: 20px;
      }
    }
  </style>

</head>

<body class="is-preload">
  <?php
  session_start();
  $username = $_SESSION["username"];
  $password = $_SESSION["password"];
  $_SESSION["product_id"] = $_GET["id"];
  ?>
  <!-- Wrapper -->
  <div id="wrapper">

    <?php
    //include("header.php");
    ?>



    <!-- Main -->
    <div id="main">
      <div class="col-75">
        <div class="col-75">
          <?php
          $connection = mysqli_connect("localhost", "root", "", "p_database");

          mysqli_select_db($connection, 'p_database');

          if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
          } else {
            //echo "<br>connection established";
          }
          $id = $_GET["id"];
          $_SESSION["id"] = $id;

          $query = mysqli_query($connection, "SELECT * FROM products where id = '$id'");
          $str = mysqli_fetch_assoc($query);
          ?>
          <br>
          <label for="showing"><i></i> <?php echo $str["name"] ?></label>
          <img src="<?php echo $str["image_path"] ?>" alt="" width="200" height="200">
        </div>

        <form action="order_complete.php" method="POST">
          <div class="row">

            <div class="col-75">
              <div class="container">
                <form action="/action_page.php">

                  <div class="row">
                    <div class="col-50">
                      <h3>Fatura Adresi</h3>
                      <label for="fname"><i class="fa fa-user"></i> İsim Soyisim</label>
                      <input type="text" id="fname" name="name_surname" placeholder="Tahir Kaplan" required>
                      <label for="email"><i class="fa fa-envelope"></i> Email</label>
                      <input type="text" id="email" name="email" placeholder="abc@mail.com" required>
                      <label for="adr"><i class="fa fa-address-card-o"></i> Adres</label>
                      <input type="text" id="adr" name="address" placeholder="Ankara Gölbaşı" required>
                      <label for="city"><i class="fa fa-institution"></i> Şehir</label>
                      <input type="text" id="city" name="city" placeholder="Ankara" required>

                      <label>

                        <input type="checkbox" checked="checked" name="savedata"> Kişisel bilgilerimi kaydet
                      </label>
                    </div>

                    <div class="col-50">
                      <h3>Ödeme</h3>
                      <label for="fname">Kabul Edilen Kartlar</label>
                      <div class="icon-container">
                        <i class="fa fa-cc-visa" style="color:navy;"></i>
                        <i class="fa fa-cc-amex" style="color:blue;"></i>
                        <i class="fa fa-cc-mastercard" style="color:red;"></i>
                        <i class="fa fa-cc-discover" style="color:orange;"></i>
                      </div>
                      <label for="cname">Kart üzerindeki isim</label>
                      <input type="text" id="cname" name="cardname" placeholder="Tahir Kaplan" required>
                      <label for="ccnum">Kredi kartı numarası</label>
                      <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444" required>


                      <label for="cvv">CVV</label>
                      <input type="text" id="cvv" name="cvv" placeholder="352" required>

                      <label>
                        <input type="checkbox" checked="checked" name="savecrd"> Kredi kartı bilgilerimi kaydet
                      </label>
                    </div>
                  </div>


              </div>

              <input type="submit" value="Sipariş et" class="btn">
        </form>
      </div>
    </div>
  </div>
  </div>

  <?php
  //include("footer.php");
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