<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
      text-align: center;
    }

    form {
      border: 3px cyan #20c997;
    }

    input[type=text],
    input[type=password] {
      width: 40%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
      text-align: center;
    }

    button {
      background-color: #20c997;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 20%;
      text-align: center;
    }

    button:hover {
      opacity: 0.8;
    }

    .cancelbtn {
      width: auto;
      padding: 10px 18px;
      background-color: #f44336;
    }

    .imgcontainer {
      text-align: center;
      margin: 24px 0 12px 0;
    }

    img.avatar {
      width: 15%;
      border-radius: 30%;
    }

    .container {
      padding: 16px;
      align-self: center;
    }

    span.psw {
      float: right;
      padding-top: 16px;
    }

    /* Change styles for span and cancel button on extra small screens */
    @media screen and (max-width: 300px) {
      span.psw {
        display: block;
        float: none;
      }

      .cancelbtn {
        width: 100%;
      }
    }
  </style>
</head>

<body>

  <h2>Giriş Sayfası</h2>

  <form action="sign_in.php" method="post">
    <div class="imgcontainer">
      <img src="images/avatar.jpg" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <input type="text" placeholder="Kullanıcı adı giriniz" name="uname" required><br>

      <input type="password" placeholder="Paralo giriniz" name="psw" required>
      <br>
      <button type="submit">Giriş</button>
      <label>
      </label>
    </div>
  </form>

  <form action="signup_page.php" method>

    <div class="container" style="background-color:#f1f1f1">
      <button type="submit" class="cancelbtn">Kayıt Ol</button> <br>
      <!-- <span class="psw">Forgot <a href="#">password?</a></span> -->
    </div>

  </form>

</body>

</html>