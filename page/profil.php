<?php $currentPage = 'profil';?>
<?php $title = 'Profil';?>
<?php include('../component/header.php');?>
<?php include ('../component/navbar.php');?>

<?php
  if($_SESSION['user']['nama'] != NULL){?>
    <main>
    <div class="container min-vh-100 pt-5 justify-content-center bg-white">
      <div class="row">
        <div class="col-lg-5 col-md-5 col-sm-5 align-center">
          <img src="../resources/profile.png" class="rounded-circle" alt="Avatar" style="width: 250px;">
        </div>

        <div class="col-lg-7 col-md-7 col-sm-7  container">
          <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-5">
              <h1 class="col-5">Halo, <?php echo $_SESSION['user']['nama'];?>!
            </div>
            <div class="col-lg-7 col-md-7 col-sm-7 mt-2">
              <a href="../page/edit_profil.php" class="btn btn-sm btn-secondary"><span class="fas fa-edit"></span> Edit profile</a>
              <?php if($_SESSION['user']['email'] != 'administrator'){?>
                  <span>
                  <a href="../process/hapusAkunProcess.php" class="btn btn-outline-danger btn-sm" onclick="return confirm( 'Yakin?')"><span class="fas fa-trash-alt"></span>Hapus Akun</a>
                  </span>
              <?php } ?>
              <span>
              <a href="../process/logoutProcess.php" class="btn btn-danger btn-sm ms-5"><span class="fas fa-sign-out-alt"></span> Keluar</a></span>
            </div>
          </div>
          <h6>Email : <?php echo $_SESSION['user']['email'];?></h6>
          
          <div class="row">
          <div class="col-lg-9 col-md-9 col-sm-9">
              <h5 class ="mt-5">Nama Lengkap</h5>
              <div class="input-group">
                  <input class="form-control align-center" id="saldo" name="saldo" aria-describedby="phoneHelp" value="<?php echo $_SESSION['user']['nama'];?>" disabled>
              </div>

              <h5 class ="mt-2">Tanggal Lahir</h5>
              <div class="input-group">
                  <input class="form-control align-center" id="saldo" name="saldo" aria-describedby="phoneHelp" value="<?php echo $_SESSION['user']['tgl_lahir'];?>" disabled>
              </div>

              <h5 class ="mt-2">Jenis Kelamin</h5>
              <div class="input-group">
                  <input class="form-control align-center" id="saldo" name="saldo" aria-describedby="phoneHelp" value="<?php if($_SESSION['user']['jenis_kelamin']==0)echo 'Laki-Laki'; else echo 'Perempuan';?>" disabled>
              </div>

              <h5 class ="mt-2">No Telp</h5>
              <div class="input-group">
                  <input class="form-control mb-5 align-center" id="saldo" name="saldo" aria-describedby="phoneHelp" value="<?php echo $_SESSION['user']['telp'];?>" disabled>
              </div>

              <h5 for="saldo" class="form-label mt-5">Saldo Anda</h5>
              <div class="input-group">
                  <input class="form-control mb-5 align-center" id="saldo" name="saldo" aria-describedby="phoneHelp" value="Rp <?php echo $_SESSION['user']['saldo'];?>,00" disabled>
                  <span><a href="./tambah_saldo.php" class="btn btn-primary"><span class="fas fa-wallet"></span> Tambah Saldo</a></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </main>
<?php  }else{ ?>
    <script>
    alert("Ubah Data Anda Terlebih Dahulu!");
    window.location = "../page/edit_profil.php"
    </script>
<?php  }?>
<?php include('../component/footer.php');?>