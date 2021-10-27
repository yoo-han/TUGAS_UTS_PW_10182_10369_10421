<?php $currentPage = 'reservasi';?>
<?php $title = 'Reservasi';?>
<?php include('../component/header.php');?>
<?php include ('../component/navbar.php');?>

<?php 
    if(isset($_SESSION['isLogin'])){
    $lokasi=$_POST['lokasi'];
    $_SESSION['lokasi'] = $lokasi;?>
    <section class="pt-5 align-center">
        <div class="row pt-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="font-weight-bold">Reservasi Tiket</h1>
            <p class="text-muted">Isi data pribadi anda dengan benar.</p>
        </div>
        </div>
    </section>
    <div class="container min-vh-100 pt-5 align-items-center justify-content-center">
        <form action="../process/reservasiProcess.php" method="post">
            <div class="row center">
                <div class="col-xl-2 col-sm-2 col-md-2">
                    <label for="gelar" class="form-label">Title</label>
                    <select class="form-select align-center" aria-label="Default select example" name="gelar" id="gelar">
                        <option value="Mr">Mr</option>
                        <option value="Mrs">Mrs</option>
                    </select>
                </div>
                <div class="col-xl-10 col-sm-10 col-md-10 ">
                    <label for="exampleInputEmail1" class="form-label">Fullname</label>
                        <input class="form-control" id="nama" name="nama" aria-describedby="emailHelp" required>
                </div>
                <div class="col-xl-12 col-sm-12 col-md-12">
                    <label for="email" class="form-label">Email</label>
                        <input class="form-control" type="email" id="email" name="email" aria-describedby="emailHelp" required>
                </div>
                <div class="col-xl-2 col-sm-2 col-md-2">
                    <label for="country_code" class="form-label">Title</label>
                    <select class="form-select align-center" aria-label="Default select example" name="country_code" id="country_code" required>
                        <option value="+62">Indonesia(+62)</option>
                        <option value="+60">Malaysia(+60)</option>
                        <option value="+65">Singapore(+65)</option>
                        <option value="+63">Filipina(+63)</option>
                        <option value="+66">Thailand(+66)</option>
                        <option value="+673">Brunei(+673)</option>
                        <option value="+856">Laos(+856)</option>
                        <option value="+855">Kamboja(+855)</option>
                        <option value="+84">Vietnam(+84)</option>
                        <option value="+95">Myanmar(+95)</option>
                    </select>
                </div>
                <div class="col-xl-10 col-sm-10 col-md-10">
                    <label for="noTelp" class="form-label">Phone Number</label>
                        <input class="form-control" type="number" id="noTelp" name="noTelp" aria-describedby="phoneHelp" required>
                </div>
                <div class="col-xl-12 col-sm-12 col-md-12">
                    <label for="location" class="form-label">Lokasi</label>
                        <input class="form-control" id="location" name="location" aria-describedby="emailHelp" value="<?php echo htmlspecialchars($lokasi); ?>" disabled required>
                </div>
                <div class="col-xl-4 col-sm-4 col-md-4">
                    <label for="jenis" class="form-label">Jenis Tiket</label>
                    <select class="form-select align-center" aria-label="Default select example" name="jenis" id="jenis" onchange="myChangeFunction(this)" required>
                        <option disabled selected value> -- Pilih Jenis Tiket -- </option>
                        <option value="Reguler">Reguler</option>
                        <option value="VIP">VIP</option>
                    </select>
                </div>
                <div class="col-xl-4 col-sm-4 col-md-4">
                    <label for="exampleInputEmail1" class="form-label">Harga Tiket</label>
                    <input class="form-control align-center" id="harga" name="harga" value="0" disabled required>
                </div>
                <div class="col-xl-4 col-sm-4 col-md-4">
                    <label for="exampleInputEmail1" class="form-label">Date</label>
                    <input class="form-control align-center" id="tanggal_rsv" name="tanggal_rsv" placeholder="DD/MM/YYY" type="date" required>
                </div>
                <div class="d-grid gap-2 mt-5">
                    <button type="submit" class="btn btn-primary" name="Next">Bayar</button>
                </div>
            </div>
        </form>
    </div>
    <script>
        $(function() {
            $('#datetimepicker1').datetimepicker();
        });
    </script>
    
    <script type="text/javascript">
        function myChangeFunction(input1) {
            var input2 = document.getElementById('harga');
            if(input1.value == 'Reguler') input2.value = "5000";
            else input2.value = "10000";
        }
    </script>
    
    </main>
    
<?php }else{?>
        <script>
        alert("Masuk Terlebih Dahulu!");
        window.location = "../page/login.php"
        </script>
<?php  }?>

<?php include('../component/footer.php');?>