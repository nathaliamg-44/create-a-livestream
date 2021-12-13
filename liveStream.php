<?php
session_start();

if (!isset($_SESSION['hasLogin'])) {
    header("Location: https://favirguezc.com/");
}
?>
<!DOCTYPE html>
<html lang="en" style="width:100%; height:100%;">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="./css/icon-font.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Player - Live 🔴</title>

    <link href="https://vjs.zencdn.net/7.5.4/video-js.css" rel="stylesheet">
    <script src='https://vjs.zencdn.net/7.5.4/video.js'></script>
</head>

<body style="width:100%; height:100%;" background="fondo.jpg">
    <div class="d-flex mb-3 py-5 justify-content-center" style="width:100%; height:25%;">
        <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
        <span class="h1 fw-bold mb-0" style="text-align:center;">Welcome <?php echo $_SESSION["user"] ?> 👋</span>
    </div>
    <div class="d-flex justify-content-center px-5" style="width:100%; height:85%;" >
        <video id="player" class="video-js vjs-default-skin" style="width:100%; height:75%;"  controls preload="none">
            <source src="https://favirguezc.com:8080/livestream/stream.m3u8" type="application/x-mpegURL" />
        </video>
    </div>
    <script>
        var player = videojs('#player')
    </script>
</body>

</html>