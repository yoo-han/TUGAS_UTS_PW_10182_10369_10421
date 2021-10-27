<?php $currentPage = 'daftar_wisata';?>
<?php $title = 'Daftar Tempat Wisata';?>
<?php include('../component/header.php');?>
<?php include ('../component/navbar.php');?>

<?php 
    $title = $_POST['gelar'];
    $_SESSION['gelar'] = $title;
    $nama = $_POST['nama'];
    $_SESSION['nama'] = $nama;
    $email = $_POST['email'];
    $_SESSION['email'] = $email;
    $country_code = $_POST['country_code'];
    $_SESSION['country_code'] = $country_code;
    $noTelp= $_POST['noTelp'];
    $_SESSION['noTelp'] = $noTelp;
    $jenis_tiket = $_POST['jenis'];
    $_SESSION['jenis'] = $jenis_tiket;
    $tanggal_reservasi = $_POST['tanggal_rsv'];
    $_SESSION['tanggal_rsv'] = $tanggal_reservasi;
    
    if($_SESSION['jenis'] == 'Reguler') $harga="5000"; else $harga="10000";
    $saldo = $_SESSION['user']['saldo'];?>
    <main>
        <div class="container min-vh-100 d-flex align-items-center justify-content-center">
            <div class="card text-dark bg-light ma-5 shadow" style="min-width: 25rem;">
                <div class="card-header fw-bold align-center"><h4>Pembayaran</h4></div>
                <div class="card-body">
                    <form action="../process/reservasiProcess.php" method="post">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Pembayaran</label>
                            <input class="form-control" id="email" name="email" aria-describedby="emailHelp" value="<?php echo $harga; ?>" disabled required>
                        </div>   
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Saldo</label>
                            <input class="form-control" id="email" name="email" aria-describedby="emailHelp" value="<?php echo $saldo; ?>" disabled required>
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary" name="bayar">Bayar</button>
                        </div>
                    </form>
                </div>
                </div>
            </div>  
        </div>
    </main>
<?php include('../component/footer.php');?>