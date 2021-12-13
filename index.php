<?php
session_start();
$credentials = [
  "favirguezc" => array(
    "name"=> "Fredy Antonio Virgüez Calvo",
    "shortname"=> "Fredy Virgüez",
    "password"=> "DzG%*Oab"
  ),
  "davirguezc" => 
  array(
    "name"=> "David Camilo Virgüez Calvo",
    "shortname"=> "Camilo Virgüez",
    "password"=> "spZhzXI%",
  ),
  "dcvirguezc" => 
  array(
    "name"=> "Diego Alejandro Virgüez Calvo",
    "shortname"=> "Diego Virgüez",
    "password"=> "!U6EldPM"
  ),
  "blcalvog" => 
  array(
    "name"=> "Blanca Lilia Calvo Gómez",
    "shortname"=> "Lilia Calvo",
    "password"=> "jFl8g@M@"
  ),
  "acalvog" => 
  array(
    "name"=> "Adeniz Calvo Gómez",
    "shortname"=> "Adeniz Calvo",
    "password"=> "O9pP!meR"
  ),
  "ammontanezp" => 
  array(
    "name"=> "Alba María Montañez Puentes",
    "shortname"=> "Alba Montañez",
    "password"=> "YuufsQj@"
  ),
  "tlcalvom" => 
  array(
    "name"=> "Tatiana Lisette Calvo Montañez",
    "shortname"=> "Tatiana Calvo",
    "password"=> "cJa8Xp#M"
  ),
  "lecalvom" =>
  array(
    "name"=> "Lorena Estefany Calvo Montañez",
    "shortname"=> "Lorena Calvo",
    "password"=> "Rgu@wm6g"
  ) ,
  "dfcalvom" => 
  array(
    "name"=> "Valentina Calvo Montañez",
    "shortname"=> "Valentina Calvo",
    "password"=> "sJ^EPMOa"
  ),
  "vcalvom" => 
  array(
    "name"=> "Valentina Calvo Montañez",
    "shortname"=> "Valentina Calvo",
    "password"=> "PFyR*S@@"
  ),
  "yedazar" => 
  array(
    "name"=> "Yohan Stiven Daza Rojas",
    "shortname"=> "Yohan Daza",
    "password"=> "zB029EG*"
  ),
  "nmonterog" =>
  array(
    "name"=> "Nathalia Montero Gómez",
    "shortname"=> "Nathalia Montero",
    "password"=> "jX*WfjBk"
  ) ,
  "smonterog" => 
  array(
    "name"=> "Santiago Montero Gómez ",
    "shortname"=> "Santiago Montero",
    "password"=> "q@g300jK"
  ),
  "gmonterog" =>
  array(
    "name"=> "Gonzalo Montero Galvis",
    "shortname"=> "Gonzalo Montero",
    "password"=> "c%f1TEJf"
  ) ,
  "ggomezc" => 
  array(
    "name"=> "Gladys Gómez Castro",
    "shortname"=> "Gladys Gómez",
    "password"=> "q@MlMsHO"
  )
];
$user = $_POST["user"];
$pass = $_POST["pass"];
if (isset($credentials[$user]) && $pass == $credentials[$user]["password"]) {
  $_SESSION["hasLogin"] = true;
  $_SESSION["user"] = $credentials[$user]["shortname"];
  header("Location: https://favirguezc.com/liveStream.php");
} else {
  if (isset($user) || isset($pass)) {
    $message = 'Sorry, those credentials do not match';
  }
?>
  <html>

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Favirguezc</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="/ls.png">

    <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="./css/icon-font.min.css">

    <link rel="stylesheet" type="text/css" href="./css/animate.css">

    <link rel="stylesheet" type="text/css" href="./css/hamburgers.min.css">

    <link rel="stylesheet" type="text/css" href="./css/animsition.min.css">

    <link rel="stylesheet" type="text/css" href="./css/select2.min.css">

    <link rel="stylesheet" type="text/css" href="./css/daterangepicker.css">

    <link rel="stylesheet" type="text/css" href="./css/util.css">
    <link rel="stylesheet" type="text/css" href="./css/main.css">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <meta name="robots" content="noindex, follow">
  </head>

  <body style="background-color: #666666;">
    <div class="limiter">
      <div class="container-login100">
        <div class="wrap-login100">
          <form method="POST" class="login100-form validate-form">
            <span class="login100-form-title p-b-40">
              <H1>FAVIRGUEZC</H1>
            </span>
            <span class="login100-form-title p-b-60">
              Sign into your account
            </span>
            <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
              <input class="input100" type="text" name="user">
              <span class="focus-input100 p-b-60"></span>
              <span class="label-input100">Username</span>
            </div>
            <div class="wrap-input100 validate-input" data-validate="Password is required">
              <input class="input100" type="password" name="pass">
              <span class="focus-input100"></span>
              <span class="label-input100">Password</span>
            </div>
            <?php if (!empty($message)) { ?>
              <div class="alert alert-danger" role="alert"> <?= $message ?> </div>
            <?php } ?>

            <div class="pt-1 mb-4">
              <input class="btn btn-dark btn-lg btn-block" type="submit" value="Login"></input>
            </div>
            <a href="#!" class="small text-muted">Terms of use.</a>
            <a href="#!" class="small text-muted">Privacy policy</a>
          </form>

          <div class="login100-more">
            <img src="img1.jpg" alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
          </div>
        </div>
      </div>
    </div>
    <script src="./js/jquery-3.2.1.min.js"></script>
    <script src="./js/animsition.min.js"></script>
    <script src="./js/popper.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/select2.min.js"></script>
    <script src="./js/moment.min.js"></script>
    <script src="./js/daterangepicker.js"></script>
    <script src="./js/countdowntime.js"></script>
    <script src="./js/main.js"></script>
  </body>

  </html>
<?php
}
?>