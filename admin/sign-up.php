<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Kayıt ol</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <style>
        html,
        body {
            height: 100%;
        }

        body {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
        }
    </style>
</head>
<!-- ============================================================== -->
<!-- signup form  -->
<!-- ============================================================== -->

<body>
    <!-- ============================================================== -->
    <!-- signup form  -->
    <!-- ============================================================== -->
    <form class="splash-container" method="POST" action="signup_page.php">
        <div class="card">
            <div class="card-header">
                <h3 class="mb-1">Kayıt Formu</h3>
                <p>Lütfen gerekli kısımları doldurun</p>
            </div>
            <div class="card-body">
                    <div class="form-group">
                        <input class="form-control form-control-lg" type="text" name="username" required="" placeholder="Kullanıcı Adı" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" type="email" name="email" required="" placeholder="E-mail" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" id="pass1" name="password" type="password" required="" placeholder="Şifre">
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" id="pass2" name="password2" type="password" required="" placeholder="Şifre tekrar">
                    </div>
                    <div class="form-group pt-2">
                        <button class="btn btn-block btn-primary" type="submit">Kayıt ol</button>
                    </div>
                    <div class="form-group">
                        <label class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox" required=""><span class="custom-control-label">Kullanıcı sözleşmesini<a href="#"> kabul ediyorum</a></span>
                        </label>
                    </div>
               
            </div>
            <div class="card-footer bg-white">
                <p>Üye misiniz? <a href="login.php" class="text-secondary">Giriş yap.</a></p>
            </div>
        </div>
    </form>
</body>


</html>