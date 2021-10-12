<?php
session_start();
if($_SESSION['status_login']!=true){
    header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark"
style="box-shadow: 4px 4px 5px -4px;">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">PERPUS</a>
        <button class="navbar-toggler" type="button" data-bs-
        toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav"
        aria-expanded="false" aria-label="toggle Navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page"
            href="home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page"
            href="buku.php">Buku</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page"
            href="cart.php">Keranjang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page"
            href="histori.php">Histori</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page"
            href="proses_logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
</body>
</html>