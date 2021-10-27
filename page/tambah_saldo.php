<?php $currentPage = 'profil';?>
<?php $title = 'Profil';?>
<?php include('../component/header.php');?>
<?php include ('../component/navbar.php');?>

<?php
    $saldo = $_SESSION['user']['saldo'];?>
    <main>
        <div class="container min-vh-100 d-flex align-items-center justify-content-center">
            <div class="card text-dark bg-light ma-5 shadow" style="min-width: 25rem;">
                <div class="card-header fw-bold align-center"><h4>Tambah Saldo</h4></div>
                <div class="card-body">
                    <form action="../process/tambahSaldoProcess.php" method="post">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Saldo Terkini</label>
                            <input class="form-control" id="saldo" name="saldo" aria-describedby="emailHelp" value="<?php echo $saldo; ?>" disabled required>
                        </div>   
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Top Up Saldo</label>
                            <input class="form-control" id="tambahSaldo" name="tambahSaldo" aria-describedby="emailHelp" required>
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary" name="bayar">Tambah</button>
                        </div>
                    </form>
                </div>
                </div>
            </div>  
        </div>
    </main>

<?php include('../component/footer.php');?>