<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PCB - PC Build</title>
    <link rel="stylesheet" href="../PC/css/bootstrap.min.css">
    <link rel="stylesheet" href="../PC/custom.css">
    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="../PC/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="../PC/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../PC/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../PC/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../PC/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../PC/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="../PC/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../PC/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../PC/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="../PC/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../PC/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../PC/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../PC/favicon/favicon-16x16.png">
    <link rel="manifest" href="../PC/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
</head>
<body>
    
<nav class="navbar navbar-dark" style="background-color: #000;">
  <a class="navbar-brand"><img src="../PC/gambar/logo.png" alt=""></a>
    <form class="form-inline">    
        <a href="{{ Route ('register')}}">Register</a>
        <a href="{{ Route ('login')}}">Login</a>
    </form>
</nav>

<div class="row">
    <div class="col-md-6 col-sm-6 col-xs-6">
        <img class="text" src="../PC/gambar/text.png" alt="" >
    </div>
    <div class="col-md-6 col-sm-6 col-xs-6">
        <img class="pc" src="../PC/gambar/pc.png" alt="" >
    </div>
</div>

<button class="depan" onclick="location.href='{{ Route ('menu')}}'" type="button">Klik Disini</button>

    <script src="../PC/js/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>
