<!DOCTYPE html>
<html>
<style>
  body {
    font-family: Arial, Helvetica, sans-serif;
    text-align: center;
  }

  * {
    box-sizing: border-box
  }

  input[type=text],
  input[type=password] {
    width: 40%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inine-block;
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

  hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
  }

  /* Set a style for all buttons */
  button {
    background-color: #04AA6D;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 20%;
    opacity: 1.0;
    text-align: center;
  }

  button:hover {
    opacity: 1;
  }

  /* Extra styles for the cancel button */
  .cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
  }

  /* Float cancel and signup buttons and add an equal width */
  .cancelbtn,
  .signupbtn {
    float: center;
    width: 10%;
    text-align: center;
  }

  /* Add padding to container elements */
  .container {
    padding: 40px;
    border: none !important;
  }

  /* Clear floats */
  .clearfix::after {
    content: "";
    clear: both;
    display: table;
  }

  /* Change styles for cancel button and signup button on extra small screens */
  @media screen and (max-width: 300px) {

    .cancelbtn,
    .signupbtn {
      width: 50%;
    }
  }
</style>

<body>

  <div class="container">
    <form action="sign_up.php" method="POST">

      <h1>Kayıt Ol</h1>
      <p>Lüften kayıt olmak için bu formu doldurunuz</p>
      <hr>

      <input type="text" placeholder="Kullanıcı adı giriniz" name="username" required>
      <br />
      <input type="password" placeholder="Paralo giriniz" name="psw" required>

      <p><br></p>
      <button type="submit" class="signupbtn">Kayıt Ol</button>

    </form>
  

    <form action="index.php" method="post">
      <button type="submit" class="cancelbtn">İptal</button>
    </form>
  </div>

</body>

</html>