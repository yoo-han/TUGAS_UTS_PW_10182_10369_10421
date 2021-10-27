<?php
session_start();

if(isset($_SESSION['isLogin'])){ ?>
    <body>
    <header>
        <nav class="navbar navbar-expand navbar-fixed-top">
        <div class="container-xxl">
            <a class="navbar-brand" href="../page/index.php">
                <img src="../resources/paper-plane.png" height="30" alt="Logo">
                OurTrip
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="ml-auto" id="navbarNav">
            <ul class="navbar-nav navbar-right">
                <li <?php if ($currentPage == 'index') {echo 'class = "active"';}?>>
                <a class="nav-link" href="../page/index.php">Dashboard</a>
                </li>
                <li <?php if ($currentPage == 'daftar_wisata' || $currentPage == 'reservasi') {echo 'class = "active"';}?>>
                <a class="nav-link" href="../page/daftar_wisata.php">Daftar Wisata</a>
                </li>
                <li <?php if ($currentPage == 'riwayat' || $currentPage == 'editReservasi') {echo 'class = "active"';}?>>
                <a class="nav-link" href="../page/riwayat.php">Riwayat Pemesanan</a>
                </li>
                <li <?php if ($currentPage == 'profil' || $currentPage == 'edit') {echo 'class = "active"';}?>>
                <a class="nav-link" href="../page/profil.php">Profil</a>
                </li>
            </ul>
            </div>
        </div>
        </nav>
    </header>
<?php } else { ?>
    <body>
    <header>
        <nav class="navbar navbar-expand navbar-fixed-top">
        <div class="container-xxl">
            <a class="navbar-brand" href="../page/index.php">
                <img src="../resources/paper-plane.png" height="30" alt="Logo">
                OurTrip
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="ml-auto" id="navbarNav">
            <ul class="navbar-nav navbar-right">
                <li <?php if ($currentPage == 'index') {echo 'class = "active"';}?>>
                <a class="nav-link" href="../page/index.php">Dashboard</a>
                </li>
                <li <?php if ($currentPage == 'daftar_wisata') {echo 'class = "active"';}?>>
                <a class="nav-link" href="../page/daftar_wisata.php">Daftar Wisata</a>
                </li>
                <li <?php if ($currentPage == 'login') {echo 'class = "active"';}?>>
                <a class="nav-link" href="../page/login.php">Masuk</a>
                </li>
                <li <?php if ($currentPage == 'register') {echo 'class = "active"';}?>>
                <a class="nav-link" href="../page/register.php">Daftar</a>
                </li>
            </ul>
            </div>
        </div>
        </nav>
    </header>
<?php } ?>